<?php
class ChuyenBay{
	private $macb,$malb,$tencb,$madatcho,$thoigianquacanh,$ngaydi,$ngayden;
	public function __construct($macb,$malb,$tencb,$madatcho,$thoigianquacanh,$ngaydi,$ngayden){
		$this->malb= $malb;
		$this->macb = $macb;
		$this->tencb = $tencb;
		$this->madatcho = $madatcho;
		$this->thoigianquacanh = $thoigianquacanh;
		$this->ngaydi = $ngaydi;
		$this->ngayden = $ngayden;
	}
	public function getmalb(){
		return $this->malb;
	}
	public function setmalb($value){
		$this->malb = $value;
	}
	public function getmacb(){
		return $this->macb;
	}
	public function setmacb($value){
		$this->mmacb = $value;
	}
	public function getmadatcho(){
		return $this->madatcho;
	}
	public function setmadatcho($value){
		$this->madatcho = $value;
	}
	public function getthoigianquacanh(){
		return $this->thoigianquacanh;
	}
	public function setthoigianquacanh($value){
		$this->thoigianquacanh = $value;
	}
	public function getngaydi(){
		return $this->ngaydi;
	}
	public function setngaydi($value){
		$this->ngaydi = $value;
	}
	public function gettencb(){
		return $this->tencb;
	}
	public function settencb($value){
		$this->tencb = $value;
	}
	public function getngayden(){
		return $this->ngayden;
	}
	public function setngayden($value){
		$this->ngayden = $value;
	}

}
class chuyenbayDB{
	public static function searchFlight($masbdi,$masbden,$ngaydi){
		$db=Database::getDB();
		$query = " SELECT * from
			chuyenbay cb left join vemaybay vmb on cb.macb = vmb.macb
			left join vechitiet vct on cb.macb = vct.macb
			left join phanboghe pbg on cb.macb = pbg.macb
			left join lichbay lb on cb.malb = lb.malb	
			left join tuyenbayhk tbhk on lb.matbhk = tbhk.matbhk
			left join hanghk hhk on tbhk.mahanghk = hhk.mahanghk
			left join tuyenbay tb on tbhk.matb = tb.matb
			left join hangve hv on pbg.mahangve = hv.mahangve
            left join sanbay sb on tb.masbden = sb.masb and tb.masbdi = sb.masb
            
            where cb.ngaydi >= ? and sb.masb=?  ";

		try{
			$statement=$db->prepare($query);
			$statement->execute([
				$masbdi,
				$ngaydi,

			]);
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "Error database : $error_message";
			exit();
		}
	}
	public static function details_bymacb($macb){
		$db=Database::getDB();

		$query = "SELECT * from
			chuyenbay cb left join vemaybay vmb on cb.macb = vmb.macb
			left join vechitiet vct on cb.macb = vct.macb
			left join phanboghe pbg on cb.macb = pbg.macb
			left join lichbay lb on cb.malb = lb.malb	
			left join tuyenbayhk tbhk on lb.matbhk = tbhk.matbhk
			left join hanghk hhk on tbhk.mahanghk = hhk.mahanghk
			left join tuyenbay tb on tbhk.matb = tb.matb
			left join hangve hv on pbg.mahangve = hv.mahangve
            left join sanbay sb on tb.masbden = sb.masb and tb.masbdi = sb.masb
            where cb.macb =?
			";
		try{
			$statement=$db->prepare($query);
			$statement->execute([
				$macb,
			]);
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "Error database : $error_message";
			exit();
		}
	}
	/*public static function details_ve_bymacb($macb){
		$db=Database::getDB();

		$query = "
			";

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
	/*public static function searchFlight($sbdi, $sbden, $ngaydi){
		$db=Database::getDB();

		$query = "SELECT * from
			chuyenbay cb left join vemaybay vmb on cb.macb = vmb.macb
			left join vechitiet vct on cb.macb = vct.macb
			left join phanboghe pbg on cb.macb = pbg.macb
			left join lichbay lb on cb.malb = lb.malb	
			left join tuyenbayhk tbhk on lb.matbhk = tbhk.matbhk
			left join hanghk hhk on tbhk.mahanghk = hhk.mahanghk
			left join tuyenbay tb on tbhk.matb = tb.matb
			left join hangve hv on pbg.mahangve = hv.mahangve";

		try{
			$statement=$db->prepare($query);
			$statement->execute(array(
				$sbdi,
				$sbden,
				$ngaydi,
			));
			$result=$statement->fetchAll();
			return $result;
			$statement->closeCursor();
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "Error database : $error_message";
			exit();
		}
	}*/
	/*ublic static function searchFlight($sbdi, $sbden, $ngaydi){
		$db=Database::getDB();

		$query = "SELECT *
			FROM chuyenbay, sanbay
			INNER JOIN lichbay ON chuyenbay.malb = lichbay.malb
			INNER JOIN tuyenbayhk ON lichbay.matbhk = tuyenbayhk.matbhk
			INNER JOIN tuyenbay ON tuyenbayhk.matb = tuyenbay.matb
			WHERE chuyenbay.ngaydi = ?
				and tuyenbay.masbdi = (SELECT masb FROM sanbay WHERE tensb = ?)
				and tuyenbay.masbden = (SELECT masb FROM sanbay WHERE tensb = ?)";

		try{
			$statement=$db->prepare($query);
			$statement->execute(array(
				$sbdi,
				$sbdi,
				$sbden,
			));
			$result=$statement->fetchAll();
			return $result;
			$statement->closeCursor();
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "Error database : $error_message";
			exit();
		}
	}*/
	/*public static function searchDate($ngaydi, $ngayden){
		$db=Database::getDB();

		$query = "SELECT tensb
					FROM chuyenbay";

		try{
			$statement=$db->prepare($query);
			$statement->execute(array(
				$ngaydi,
				$ngayden,
			));
			$result=$statement->fetchAll();
			return $result;
			$statement->closeCursor();
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "Error database : $error_message";
			exit();
		}
	}

	public static function searchTensb($tensb){
		$db=Database::getDB();

		$query = "SELECT sanbay.tensb FROM sanbay,
		(SELECT tuyenbay.masbden, tuyenbay.masbdi FROM chuyenbay INNER JOIN lichbay
		ON chuyenbay.malb = lichbay.malb
		JOIN tuyenbayhk
		ON lichbay.matbhk = tuyenbayhk.matbhk
		JOIN tuyenbay
		ON tuyenbayhk.matb = tuyenbay.matb
		WHERE macb = 1) AS tb WHERE sanbay.masb = tb.masbden";

		try{
			$statement=$db->prepare($query);
			$statement->execute(array(
				$sbdi,
				$sbdi,
				$sbden,
			));
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