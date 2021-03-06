<?php
namespace PortlandLabs\Concrete5\MigrationTool\Publisher\Routine;

use PortlandLabs\Concrete5\MigrationTool\Batch\BatchInterface;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\Batch;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\AttributeKey\AttributeKey;

defined('C5_EXECUTE') or die("Access Denied.");

class CreateAttributesRoutine extends AbstractRoutine
{
    public function execute(BatchInterface $batch)
    {
        $keys = $batch->getObjectCollection('attribute_key');
        /**
         * @var AttributeKey
         */

        if (!$keys) {
            return;
        }

        foreach ($keys->getKeys() as $key) {
            if (!$key->getPublisherValidator()->skipItem()) {
                $pkg = null;
                if ($key->getPackage()) {
                    $pkg = \Package::getByHandle($key->getPackage());
                }

                $category = $key->getCategory();
                if (is_object($category)) {
                    $publisher = $category->getPublisher();
                    $o = $publisher->publish($key, $pkg);
                    $typePublisher = $key->getTypePublisher();
                    $typePublisher->publish($key, $o);
                }
            }
        }
    }
}
