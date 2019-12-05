<?php
	class Singleton
	{
		private $single;
		
		private function set_single()
		{
			$this->single=1;
		}
		
		public function __construct()
		{
			$this->set_single();
		}
	}