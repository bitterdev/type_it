<?php

defined('C5_EXECUTE') or die('Access denied');

use Concrete\Core\Page\Page;
use HtmlObject\Element;

/** @var string|null $keywords */
/** @var string|null $displayTag */

$keywords = $keywords ?? "";
$displayTag = $displayTag ?? "p";

$c = Page::getCurrentPage();

?>

<?php if (is_object($c) && $c->isEditMode()) { ?>
    <div class="ccm-edit-mode-disabled-item">
        <div style="padding: 8px;">
            <?php echo t('TypeIt disabled in edit mode.'); ?>
        </div>
    </div>
<?php } else { ?>
    <?php echo (new Element($displayTag))
        ->addClass("type-it")
        ->setAttribute("data-keywords", h(str_replace("\n", ", ", $keywords)))
        ->render(); ?>
<?php } ?>