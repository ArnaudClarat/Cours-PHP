<?php
	class Singleton
	{
		private static $single;
		
		public function __construct()
		{
			set_single();
		}
		
		private function set_single()
		{
			self::single=1;
		}
	}