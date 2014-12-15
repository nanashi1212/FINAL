<?
include_once __DIR__ . '_all.php';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = $_SERVER['REQUEST_METHOD'] ? $_SERVER['REQUEST_METHOD'] : GET;
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$name= isset($_REQUEST['user']

$view 	= null;


switch ($action . '_' . $method) {
	default:
	case 'index_GET':
		$view = 'index.php';
		break;
	
	//default:
		//$model = Food::Get();
		//$view = 'food/index.php';		
		//break;
}

switch($action){
	case('retrieve'):
		break;
	case('insert'):
		break;
}

switch ($format) {
	case 'json':
		echo json_encode($model);
		break;
	case 'plain':
		include __DIR__ . "/../Views/$view";		
		break;		
	default:
		include __DIR__ . "/../views/$view";
}