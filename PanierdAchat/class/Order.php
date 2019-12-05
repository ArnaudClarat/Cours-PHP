<?php
	class Order
	{
		public $id;
		public $idCustomer;
		public $idCart;
		public $dateAdd;
		public $dateUpdate;
		
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
		public function getIdCart()
		{
			return $this->idCart;
		}
		
		/**
		 * @param mixed $idCart
		 */
		public function setIdCart($idCart)
		{
			$this->idCart = $idCart;
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
		
		
	}