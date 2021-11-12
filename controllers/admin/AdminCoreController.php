<?php

/**
 * Class AdminCoreController
 */
class AdminCoreController extends ModuleAdminController
{
    /**
     * Initialize bootstrap and parent constructor
     */
    public function __construct()
    {
        $this->bootstrap = true;
        parent::__construct();
    }

    /**
     * @throws SmartyException
     */
    public function initContent()
    {
        $this->setTemplateFile('origin.tpl', array());
    }

    /**
     * @param $templateName
     * @param $variables
     */
    private function setTemplateFile($templateName, $variables)
    {
        $template = $this->context->smarty->createTemplate($this->getTemplatePath() . $templateName, $this->context->smarty);
        $template->assign($variables);
        $this->content .= $template->fetch();
        parent::initContent();
    }

}