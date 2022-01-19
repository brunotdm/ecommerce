<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	//echo "OK";

	$sql= new Hcodebrbr\DB\Sql();
        $rawQuery = "SELECT * FROM tb_users";
        $results = $sql->select($rawQuery);
        echo json_encode($results);

});

$app->run();

 ?>