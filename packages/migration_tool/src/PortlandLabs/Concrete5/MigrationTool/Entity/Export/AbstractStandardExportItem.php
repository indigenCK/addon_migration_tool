<?php
namespace PortlandLabs\Concrete5\MigrationTool\Entity\Export;

abstract class AbstractStandardExportItem extends ExportItem
{
    /**
     * @Column(type="integer", nullable=false)
     */
    protected $item_id;

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * @param mixed $item_id
     */
    public function setItemId($item_id)
    {
        $this->item_id = $item_id;
    }

    public function getItemIdentifier()
    {
        return $this->getItemId();
    }
}
