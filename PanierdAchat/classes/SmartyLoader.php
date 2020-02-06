<?php
	require_once('./libs/smarty/Smarty.class.php');
	
	class SmartyLoader extends Smarty
	{
		public function __construct()
		{
			parent::__construct();
			$this->template_dir = './views/templates/';
			$this->compile_dir = './views/templates_c/';
			$this->config_dir = './views/configs/';
			$this->cache_dir = './views/cache/';
		}
		
		public function getHeader($title)
		{
			$this->assign(
				'title', $title
			);
			$this->display('header.tpl');
		}
		
		public function getFooter()
		{
			$this->display('footer.tpl');
		}
	}