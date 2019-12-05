<?php
	class Product
	{
		private $id;
		private $name;
		private $pu;
		private $description;
		private $img;
		private $stock;
		
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
		public function getName()
		{
			return $this->name;
		}
		
		/**
		 * @param mixed $name
		 */
		public function setName($name)
		{
			$this->name = $name;
		}
		
		/**
		 * @return mixed
		 */
		public function getPu()
		{
			return $this->pu;
		}
		
		/**
		 * @param mixed $pu
		 */
		public function setPu($pu)
		{
			$this->pu = $pu;
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
		public function getImg()
		{
			return $this->img;
		}
		
		/**
		 * @param mixed $img
		 */
		public function setImg($img)
		{
			$this->img = $img;
		}
		
		/**
		 * @return mixed
		 */
		public function getStock()
		{
			return $this->stock;
		}
		
		/**
		 * @param mixed $stock
		 */
		public function setStock($stock)
		{
			$this->stock = $stock;
		}
		
		
	}