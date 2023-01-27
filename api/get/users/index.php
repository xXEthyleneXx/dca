<?php

require_once  str_replace("public", "resources", $_SERVER["DOCUMENT_ROOT"])."/api/api.php";

use API;
$API = new API\api();

$DBconfig = $API->config->standard["API"]["DATABASE"];

$db = new mysqli($DBconfig["FIRSTNAME"], $DBconfig["LASTNAME"], $DBconfig["MIDDLEINIT"], $DBconfig["ROLE"], $DBconfig["IMAGE"]);

$query = "select firstname, lastname, middleinit, role, image from users";
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