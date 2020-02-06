<?php
	class Cart
	{
		private $id;
		private $idCustomer;
		private $dateAdd;
		private $dateUpdate;
		private $validate;
		
		public function addProduct(Product $product){}
		public function delProduct(Product $product){}
		public function getProducts(){}
		
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
		public function getIdCustomer()
		{
			return $this->idCustomer;
		}
		
		/**
		 * @param mixed $idCustomer
		 */
		public function setIdCustomer($idCustomer)
		{
			$this->idCustomer = $idCustomer;
		}
		
		/**
		 * @return mixed
		 */
		public function getDateAdd()
		{
			return $this->dateAdd;
		}
		
		/**
		 * @param mixed $dateAdd
		 */
		public function setDateAdd($dateAdd)
		{
			$this->dateAdd = $dateAdd;
		}
		
		/**
		 * @return mixed
		 */
		public function getDateUpdate()
		{
			return $this->dateUpdate;
		}
		
		/**
		 * @param mixed $dateUpdate
		 */
		public function setDateUpdate($dateUpdate)
		{
			$this->dateUpdate = $dateUpdate;
		}
		
		/**
		 * @return mixed
		 */
		public function getValidate()
		{
			return $this->validate;
		}
		
		/**
		 * @param mixed $validate
		 */
		public function setValidate($validate)
		{
			$this->validate = $validate;
		}
		
		
	}