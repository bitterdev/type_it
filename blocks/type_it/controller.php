<?php

namespace Concrete\Package\TypeIt\Block\TypeIt;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Error\ErrorList\ErrorList;

class Controller extends BlockController
{
    protected $btTable = 'btTypeIt';
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 500;
    protected $btCacheBlockOutputLifetime = 300;

    public function getBlockTypeDescription(): string
    {
        return t('Add block type that lets you effortlessly create animated typing effects.');
    }

    public function getBlockTypeName(): string
    {
        return t("TypeIt");
    }

    public function validate($args): ErrorList
    {
        $e = new ErrorList;

        if (empty($args["keywords"])) {
            $e->addError("Keywords can't be empty.");
        }

        return $e;
    }
}