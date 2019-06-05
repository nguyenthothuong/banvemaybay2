<meta charset="utf-8">
<?php
	include('../Model/m_connectDB.php');
	include('../Model/m_nhanvien.php');
	include('../Model/m_sanbay.php');
	session_start();
	$action = filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = 'login_system';
		}
	}

	if (isset($_SESSION['nhanvien']))
		$nhanvien = $_SESSION['nhanvien'];

	switch ($action) {
		case 'login_system':
			if (!isset($nhanvien)) {
				include('../View/login.php');
			} else {
				include('./../View/admin/index.php');
			}
			break;
		case 'cancel':
			include('../View/index.php');
			break;
		case 'check_login':
			$cmnd = filter_input(INPUT_POST, 'cmnd');
			$pass = filter_input(INPUT_POST, 'pass');

			if($nhanvien = nhanvienDB::login($cmnd,$pass)) {
				$_SESSION['nhanvien'] = $nhanvien;
				include('../View/Porson/template/index.php');
			} else {
				include('../View/login.php');
			} 
			break;
		case 'logout':
			unset($_SESSION['nhanvien']);
			include('../View/login.php');
			break;
		case 'search_value':
			$value = filter_input(INPUT_POST, 'search_info');
			$list_nhanvien = nhanvienDB::search_value($value);
			if(empty($list_nhanvien)){
				$list_nhanvien = nhanvienDB::getnhanvien();
			}
			include('./../View/admin/nhanvien/index.php');
		 	break;
		case 'list_nhanvien':
			$list_nhanvien=nhanvienDB::getnhanvien();
			include('./../View/admin/nhanvien/index.php');
			break;
		case 'create_flight':
			$sanbay = sanbayDB::getAll();
			include('./../View/admin/create_flight/index.php');
			break;
		case 'update_nhanvien':
			include('./../View/nhanvien/update/index.php');
			break;
		case 've_manager':
			include('./../View/nhanvien/ve_manager/index.php');
			break;
		case 'add_airline':
			include('./../View/admin/airline/index.php');
			break;
		case 'form_add_nhanvien':
			include('../View/admin/nhanvien/create.php');
			break;
		case 'save_nhanvien':
			$hotennv = filter_input(INPUT_POST, 'hotennv');
			$ngaysinh = filter_input(INPUT_POST, 'ngaysinh');
			$cmnd = filter_input(INPUT_POST, 'cmnd');
			$email = filter_input(INPUT_POST, 'email');
			$gioitinh = filter_input(INPUT_POST, 'gioitinh');
			$diachi = filter_input(INPUT_POST, 'diachi');
			$pass = filter_input(INPUT_POST, 'pass');
			$sdt = filter_input(INPUT_POST, 'sdt');
			nhanvienDB::add_nhanvien($hotennv,$ngaysinh,$cmnd,$email,$gioitinh,$diachi,$pass,$sdt);
			$list_nhanvien=nhanvienDB::getnhanvien();
			include('../View/admin/nhanvien/index.php');
			break;
		case 'delete_nhanvien':
			$manv=filter_input(INPUT_GET, 'manv');
			nhanvienDB::delete_nhanvien($manv);
			$list_nhanvien = nhanvienDB::getnhanvien();
			include('../View/admin/nhanvien/index.php');
			break;
		case 'edit_nhanvien':
			$manv = filter_input(INPUT_GET,'manv');
			$nhanvien_edit = nhanvienDB::get_nhanvien_manv($manv);
			include('../View/admin/nhanvien/edit.php');
			break;
		case 'update_nhanvien':
			$manv = filter_input(INPUT_POST, 'manv');
			$hotennv = filter_input(INPUT_POST, 'hotennv');
			$ngaysinh = filter_input(INPUT_POST, 'ngaysinh');
			$convert = explode("-", $ngaysinh);
			$ngaysinh = $convert[2] . "-" . $convert[1] . "-" . $convert[0];
			$cmnd = filter_input(INPUT_POST, 'cmnd');
			$email = filter_input(INPUT_POST, 'email');
			$gioitinh = filter_input(INPUT_POST, 'gioitinh');
			$diachi = filter_input(INPUT_POST, 'diachi');
			$pass = filter_input(INPUT_POST, 'pass');
			$sdt = filter_input(INPUT_POST, 'sdt');

			nhanvienDB::update_nhanvien($manv,$hotennv,$ngaysinh,$cmnd,$email,$gioitinh,$diachi,$pass,$sdt);

			$list_nhanvien = nhanvienDB::getnhanvien();
			include('../View/admin/nhanvien/index.php');
		

		default:
			# code...
			break;
	} 	
?>