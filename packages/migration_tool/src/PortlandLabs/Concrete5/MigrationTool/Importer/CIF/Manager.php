<?php
namespace PortlandLabs\Concrete5\MigrationTool\Importer\CIF;

use Concrete\Core\Support\Manager as CoreManager;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\AttributeSet;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\AttributeType;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\AttributeKey;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\AttributeKeyCategory;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\BannedWord;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\BlockType;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\BlockTypeSet;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\Captcha;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\ConfigValue;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\ContentEditorSnippet;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\ConversationEditor;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\ConversationFlagType;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\ConversationRatingType;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\Group;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\Job;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\JobSet;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\Package;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\Page;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\PageFeed;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\PageTemplate;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\PageType;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\PageTypeComposerControlType;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\PageTypePublishTargetType;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\PermissionAccessEntityType;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\PermissionKey;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\PermissionKeyCategory;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\SinglePage;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\SocialLink;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\Stack;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\Theme;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\ThumbnailType;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\Tree;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\WorkflowProgressCategory;
use PortlandLabs\Concrete5\MigrationTool\Importer\CIF\Element\WorkflowType;

defined('C5_EXECUTE') or die("Access Denied.");

class Manager extends CoreManager
{
    public function createPageDriver()
    {
        return new Page();
    }

    public function createAttributeKeyDriver()
    {
        return new AttributeKey();
    }

    public function createSinglePagedriver()
    {
        return new SinglePage();
    }

    public function createPageTemplateDriver()
    {
        return new PageTemplate();
    }

    public function createBlockTypeDriver()
    {
        return new BlockType();
    }

    public function createConversationEditorDriver()
    {
        return new ConversationEditor();
    }

    public function createConversationFlagTypeDriver()
    {
        return new ConversationFlagType();
    }

    public function createConversationRatingTypeDriver()
    {
        return new ConversationRatingType();
    }

    public function createAttributeKeyCategoryDriver()
    {
        return new AttributeKeyCategory();
    }

    public function createAttributeTypeDriver()
    {
        return new AttributeType();
    }

    public function createThumbnailTypeDriver()
    {
        return new ThumbnailType();
    }

    public function createBlockTypeSetDriver()
    {
        return new BlockTypeSet();
    }

    public function createPageTypePublishTargetTypeDriver()
    {
        return new PageTypePublishTargetType();
    }

    public function createPageTypeComposerControlTypeDriver()
    {
        return new PageTypeComposerControlType();
    }

    public function createWorkflowTypeDriver()
    {
        return new WorkflowType();
    }

    public function createWorkflowProgressCategoryDriver()
    {
        return new WorkflowProgressCategory();
    }

    public function createBannedWordDriver()
    {
        return new BannedWord();
    }

    public function createSocialLinkDriver()
    {
        return new SocialLink();
    }

    public function createCaptchaDriver()
    {
        return new Captcha();
    }

    public function createThemeDriver()
    {
        return new Theme();
    }

    public function createPermissionKeyCategoryDriver()
    {
        return new PermissionKeyCategory();
    }

    public function createPermissionAccessEntityTypeDriver()
    {
        return new PermissionAccessEntityType();
    }

    public function createJobDriver()
    {
        return new Job();
    }

    public function createJobSetDriver()
    {
        return new JobSet();
    }

    public function createAttributeSetDriver()
    {
        return new AttributeSet();
    }

    public function createPageFeedDriver()
    {
        return new PageFeed();
    }

    public function createPackageDriver()
    {
        return new Package();
    }

    public function createContentEditorSnippetDriver()
    {
        return new ContentEditorSnippet();
    }

    public function createConfigValueDriver()
    {
        return new ConfigValue();
    }

    public function createTreeDriver()
    {
        return new Tree();
    }

    public function createPermissionKeyDriver()
    {
        return new PermissionKey();
    }

    public function createStackDriver()
    {
        return new Stack();
    }

    public function createPageTypeDriver()
    {
        return new PageType();
    }

    public function createGroupDriver()
    {
        return new Group();
    }


    public function __construct()
    {
        $this->driver('group');
        $this->driver('thumbnail_type');
        $this->driver('banned_word');
        $this->driver('social_link');
        $this->driver('permission_key_category');
        $this->driver('permission_access_entity_type');
        $this->driver('permission_key');
        $this->driver('captcha');
        $this->driver('theme');
        $this->driver('workflow_type');
        $this->driver('workflow_progress_category');
        $this->driver('page_type_publish_target_type');
        $this->driver('page_type_composer_control_type');
        $this->driver('attribute_type');
        $this->driver('attribute_key_category');
        $this->driver('conversation_editor');
        $this->driver('conversation_flag_type');
        $this->driver('conversation_rating_type');
        $this->driver('attribute_key');
        $this->driver('attribute_set');
        $this->driver('job');
        $this->driver('job_set');
        $this->driver('block_type');
        $this->driver('block_type_set');
        $this->driver('stack');
        $this->driver('single_page');
        $this->driver('page_type');
        $this->driver('page');
        $this->driver('page_template');
        $this->driver('page_feed');
        $this->driver('package');
        $this->driver('tree');
        $this->driver('config_value');
        $this->driver('content_editor_snippet');
    }
}
