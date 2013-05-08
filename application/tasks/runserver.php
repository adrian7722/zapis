<?php
class Runserver_Task {

public function run($arg){

  if( !isset($arg[0])){
    $host="localhost";
    $port="8569";
 }else if(is_int($arg[0])){
    $host="localhost";
    $port=$arg[0];
 }else if(preg_match('@[a-z0-9.-]+\:[0-9]+@',$arg[0])){
    list($host,$port)=explode(':',$arg[0]);
 }else{
    echo 'using default localhost:8569';
    $host="localhost"; 
    $port=8569; 
 }

echo 'Running PHP development server on port '.$port.'...';
passthru("php -S {$host}:{$port} -t ".getcwd().'/public'); 
}
}
?>