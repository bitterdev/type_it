<?php

defined('C5_EXECUTE') or die('Access denied');

use Concrete\Core\Application\Service\UserInterface;
use Concrete\Core\Support\Facade\Application;
use Concrete\Core\Block\View\BlockView;
use Concrete\Core\Form\Service\Form;
use Concrete\Core\View\View;

/** @var string|null $keywords */
/** @var string|null $displayTag */

$keywords = $keywords ?? "";
$displayTag = $displayTag ?? "p";

$app = Application::getFacadeApplication();
/** @var Form $form */
/** @noinspection PhpUnhandledExceptionInspection */
$form = $app->make(Form::class);

/** @noinspection PhpUnhandledExceptionInspection */
View::element("dashboard/help_blocktypes", [], "type_it");

/** @noinspection PhpUnhandledExceptionInspection */
View::element("dashboard/did_you_know", [], "type_it");
?>
<div class="form-group">
    <?php echo $form->label("displayTag", t('Display Property with Formatting')); ?>
    <?php echo $form->select("displayTag", [
        "h1" => t("H1 (Heading 1)"),
        "h2" => t("H2 (Heading 2)"),
        "h3" => t("H3 (Heading 3)"),
        "p" => t("p (paragraph)"),
        "b" => t("b (bold)"),
        "address" => t("address"),
        "pre" => t("pre (preformatted)"),
        "blockquote" => t("blockquote"),
        "div" => t("div")
    ], $displayTag); ?>
</div>

<div class="form-group">
    <?php echo $form->label("keywords", t('Keywords')); ?>
    <?php echo $form->textarea("keywords", $keywords); ?>
</div>

<p class="text-muted">
    <?php echo t("You can enter multiple keywords, one per line."); ?>
</p>
