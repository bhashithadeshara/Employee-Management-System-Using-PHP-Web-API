 <?php  

//  echo "Hi ";

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET,DELETE,PUT');
$method=$_SERVER['REQUEST_METHOD'];
$request_url=$_SERVER['REQUEST_URI'];
$url=rtrim($request_url,'/');
$url=filter_var($url,FILTER_SANITIZE_URL);
$url=explode('/',$url);
$tables=['employee'];
$tableName=!empty($url[4])?(string)$url[4]:null;
$id=!empty($url[5])?(int)$url[5]:null;




// echo $tables[0];



if(in_array($tableName,$tables)){

require_once('./database.php');
require_once("./api/$tableName.php");
}else
{

}

?>

