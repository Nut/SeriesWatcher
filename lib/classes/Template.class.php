<?php
class Template extends Smarty {
    public function __construct() {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        $this->setTemplateDir('smarty/templates/'.TEMPLATE_DESKTOP.'/');
        $this->setCompileDir('smarty/templates_c/');
        $this->setConfigDir('smarty/configs/');
        $this->setCacheDir('smarty/cache/');

        $this->force_compile = false;
        $this->debugging = false;
        $this->caching = false;
        $this->cache_lifetime = 120;

        $this->caching = false;
    }
}
?>