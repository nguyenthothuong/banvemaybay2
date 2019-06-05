<?php
class TuyenBay{
	private $matb,$masbden,$masbdi;
	public function __construct($matb,$masbden,$masbdi){
		$this->matb= $matb;
		$this->masbden = $masbden;
		$this->masbdi= $masbdi;
	}

	public function getmatb(){
		return $this->matb;
	}

	public function setmatb($value){
		$this->matb= $value;
	}

	public function getmasbden(){
		return $this->masbden;
	}

	public function getmasbdi(){
		return $this->masbdi;
	}

	public function setmasbden($value){
		$this->masbden = $value;
	}

	public function setmasbdi($value){
		$this->masbdi= $value;
	}
	
}
class tuyenbayDB{

	/*public static function getAll(){
		$db=Database::getDB();
		$query='SELECT * FROM tuyenbay';
		try{
			$statement=$db->prepare($query);
			$statement->execute();
			$result=$statement->fetchAll();
			return $result;
			$statement->closeCursor();
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "Error database : $error_message";
			exit();
		}
	}*/
}