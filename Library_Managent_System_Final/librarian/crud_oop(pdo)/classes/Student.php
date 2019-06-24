<?php
	include "main.php";
	class Student extends main{
		protected $table = 'tbl_book';

		private $b_name;
		private $dep;
		private $price;
		private $qnty;

		public function setName($b_name){
			 $this->b_name = $b_name;
		}
		public function setDep($a_name){
			 $this->a_name = $a_name;
		}
		public function setAge($price){
			 $this->price = $price;
		}
		public function setQnty($qnty){
			 $this->qnty = $qnty;
		}





		
		public function insert(){
			$sql = "INSERT INTO $this->table(b_name, a_name, price, qnty) VALUES(:b_name, :a_name, :price, :qnty)";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':b_name',$this->b_name);
			$stmt->bindParam(':a_name',$this->a_name);
			$stmt->bindParam(':price',$this->price);

			$stmt->bindParam(':qnty',$this->qnty);
			return $stmt->execute();
		}

		public function Update($id){
			$sql = "UPDATE $this->table SET b_name=:b_name, a_name=:a_name, price=:price, qnty=:qnty WHERE id=:id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':b_name',$this->b_name);
			$stmt->bindParam(':a_name',$this->a_name);
			$stmt->bindParam(':price',$this->price);
			$stmt->bindParam(':qnty',$this->qnty);
			$stmt->bindParam(':id', $id);
			return $stmt->execute();	
		}

		
	}
?>