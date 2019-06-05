<?php
	include('../Model/m_connectDB.php');
	include('../Model/m_chuyenbay.php');
	include('../Model/m_sanbay.php');

$action = filter_input(INPUT_POST, 'action');
if(empty($action)){
	$action = filter_input(INPUT_GET, 'action');
	if(empty($action)){
		$action = 'searchFlight';
	}
}

switch ($action) {

	case 'searchFlight':
		$sanbay = sanbayDB::getAll();

		$ngaydi=filter_input(INPUT_GET,'ngaydi');

		$masbdi=filter_input(INPUT_GET,'masbdi');

		$masbden=filter_input(INPUT_GET,'masbden');

		$detailsCB=chuyenbayDB::searchFlight($masbdi,$masbden,$ngaydi);

		
		include('../View/searflight/search/searchflight.php');
		break;
	case 'details_ve':
		$macb=filter_input(INPUT_GET,'macb');
		$details_ve = chuyenbayDB::details_bymacb($macb);
		include('../View/searflight/details/details.php');
		break;
	case 'chon':
		include('../View/searflight/select_Ve/index.php');
		break;
	case 'tieptuc':
		include('../View/searflight/select_Ve/acp.php');
		break;


	default:
		# code...
		break;
}
?>