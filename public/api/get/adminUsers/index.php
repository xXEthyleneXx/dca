<?php

// Require once only needs to use function once for duration
// Replace all public with resources on server root
// Returns api.php to be used in this file
require_once  str_replace("public", "resources", $_SERVER["DOCUMENT_ROOT"])."/api/api.php";

// Makes instance of API for tracking time
use API;
$API = new API\api();

// Sets api as access to database
$DBconfig = $API->config->standard["API"]["DATABASE"];

// Opens DB
$db = new mysqli($DBconfig["HOSTNAME"], $DBconfig["USERNAME"], $DBconfig["PASSWORD"], $DBconfig["DATABASE"]);

$query = "select firstname, lastname, middleinit, role, image from adminUsers";
$return = $db->query($query);
$results = $return->fetch_all(MYSQLI_ASSOC);
$db->close();
$user = [];
foreach ($results as $res) {
    $users[] = [
        "image"=>"".$res["image"],
        "fullname"=>"".$res["lastname"].", ".$res["firstname"]." ".$res["middleinit"],
        "roll"=>"".$res["role"]
    ];
}

$API->close(data:$users);
?>