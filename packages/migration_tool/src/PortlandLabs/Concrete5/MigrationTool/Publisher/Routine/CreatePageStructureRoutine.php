<?php
namespace PortlandLabs\Concrete5\MigrationTool\Publisher\Routine;

use Concrete\Core\Page\Type\Type;
use PortlandLabs\Concrete5\MigrationTool\Batch\BatchInterface;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\Batch;

defined('C5_EXECUTE') or die("Access Denied.");

class CreatePageStructureRoutine extends AbstractPageRoutine
{
    public function getPageRoutineAction($page)
    {
        return new CreatePageStructureRoutineAction($page);
    }


}
