<?php
namespace PortlandLabs\Concrete5\MigrationTool\Entity\Import;

use PortlandLabs\Concrete5\MigrationTool\Inspector\PageFeedInspector;
use PortlandLabs\Concrete5\MigrationTool\Publisher\PublishableInterface;
use PortlandLabs\Concrete5\MigrationTool\Publisher\Validator\PageFeedValidator;

/**
 * @Entity
 * @Table(name="MigrationImportPageFeeds")
 */
class PageFeed implements PublishableInterface
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="\PortlandLabs\Concrete5\MigrationTool\Entity\Import\PageFeedObjectCollection")
     **/
    protected $collection;

    /**
     * @Column(type="string")
     */
    protected $handle;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $title;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $parent;

    /**
     * @Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @Column(type="boolean")
     */
    protected $include_all_descendants = false;

    /**
     * @Column(type="boolean")
     */
    protected $display_aliases = false;

    /**
     * @Column(type="boolean")
     */
    protected $display_featured_only = false;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $page_type;

    /**
     * @Column(type="string")
     */
    protected $content_type = 'description';

    /**
     * @Column(type="string", nullable=true)
     */
    protected $content_type_area;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param mixed $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return mixed
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * @param mixed $handle
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getIncludeAllDescendants()
    {
        return $this->include_all_descendants;
    }

    /**
     * @param mixed $include_all_descendants
     */
    public function setIncludeAllDescendants($include_all_descendants)
    {
        $this->include_all_descendants = $include_all_descendants;
    }

    /**
     * @return mixed
     */
    public function getDisplayAliases()
    {
        return $this->display_aliases;
    }

    /**
     * @param mixed $display_aliases
     */
    public function setDisplayAliases($display_aliases)
    {
        $this->display_aliases = $display_aliases;
    }

    /**
     * @return mixed
     */
    public function getDisplayFeaturedOnly()
    {
        return $this->display_featured_only;
    }

    /**
     * @param mixed $display_featured_only
     */
    public function setDisplayFeaturedOnly($display_featured_only)
    {
        $this->display_featured_only = $display_featured_only;
    }

    /**
     * @return mixed
     */
    public function getPageType()
    {
        return $this->page_type;
    }

    /**
     * @param mixed $page_type
     */
    public function setPageType($page_type)
    {
        $this->page_type = $page_type;
    }

    /**
     * @return mixed
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * @param mixed $content_type
     */
    public function setContentType($content_type)
    {
        $this->content_type = $content_type;
    }

    /**
     * @return mixed
     */
    public function getContentTypeArea()
    {
        return $this->content_type_area;
    }

    /**
     * @param mixed $content_type_area
     */
    public function setContentTypeArea($content_type_area)
    {
        $this->content_type_area = $content_type_area;
    }

    public function getPublisherValidator()
    {
        return new PageFeedValidator($this);
    }

    public function getInspector()
    {
        return new PageFeedInspector($this);
    }
}
