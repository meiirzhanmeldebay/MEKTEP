<?

include('db_fns.php');

if(empty($_GET['view'])) $view = 'index';
else $view = $_GET['view'];

$page_data = page_data($view);

switch ($view) 
{
	case 'index':
		
	break;

	case 'photos':
		$photos = select_data($view);
	break;

	case 'portal':
		
	break;
	
}

include($_SERVER['DOCUMENT_ROOT'].'/mektep/views/layouts/site.php');
?>