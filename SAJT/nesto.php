<?php

$fileName="users.json";
function addToJson($file_name,$new_element){

}


$user=array();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user["destinacija"]=$_POST["destinacija"];
    $user["vreme"]=$_POST["email"];
    $user["cena"]=$_POST["cena"];
    echo json_encode($user);
}