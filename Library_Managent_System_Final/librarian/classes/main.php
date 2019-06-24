<?php
	
	include "DB.php";

	abstract class main{
		protected $table;

		abstract public function insert();
		abstract public function Update($id);

		public function readById($id){

			$sql = "SELECT * FROM $this->table WHERE id=:id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			return $stmt->fetch();		
		}



		public function readAll(){
			$sql = "SELECT * FROM $this->table";
			$stmt = DB::prepare($sql);
			$stmt->execute();
			return $stmt->fetchALL();
		}

		

		public function delete($id){
			$sql = "DELETE  FROM $this->table WHERE id=:id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id);
			return $stmt->execute();	
		}	
	}

?>