<?

 function db_connect(){
    
    $host = "localhost";
    $user = "school_user";
    $pswd = "12345";
    $db = "school";
    
    $connection = mysql_connect($host, $user, $pswd);
    mysql_query("SET NAMES utf8");
    if(!$connection || !mysql_select_db($db, $connection)) {
        return false;
    } else {
        return $connection;
    }
 }

function db_result_to_array($result) {
	$res_array = array();
	$count = 0;

	while($row = mysql_fetch_array($result)) {
		$res_array[$count] = $row;
		$count++;
	}
	return $res_array;
}

function get_menu() {

	db_connect();
	$query = "SELECT * FROM pages";
	$result = mysql_query($query);
	$result = db_result_to_array($result);
	return $result;


}

function page_data($title) {

	db_connect();
	$query = sprintf("SELECT * FROM pages WHERE pages.title_url = '%s'",
							mysql_escape_string($title));

	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	return $row;		
}

function select_data($table) {

	db_connect();
	$query = "SELECT * FROM $table ORDER BY $table.id DESC";

	$result = mysql_query($query);
	$result = db_result_to_array($result);
	return $result;
}




?>