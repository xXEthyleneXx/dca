<?php
namespace API;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header("Content-type: application/json");

require_once "resources/config.php";

use Config;

class api {

    public Config\config $config;
    public array $standard;

    public function __construct() {
        $this->config = new Config\config();
        $this->makestandard();
    }

    /**
     * Make Standard ARRAY
     */
    protected function makestandard() {
        $this->standard = [
            "status"=>[
                "message"=>"",
                "process-time"=>0
            ],
            "error"=>[
                "message"=>""
            ],
            "data"=>[]
        ];
    }

    /**
     * Closes the API returns JSON
     */
    public function close(array $error=[false, ""], array $data=[]) {
        if ($error[0] == true) {
            $this->standard["status"]["message"] = "error";
            $this->standard["error"]["message"] = $error[1];
            unset($this->standard["data"]);
        } else {
            $this->standard["status"]["message"] = "okay";
            $this->standard["error"]["message"] = "none";
            $this->standard["data"] = $data;
        }
        $this->standard["status"]["process-time"] = round(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 5);
        echo json_encode($this->standard, JSON_PRETTY_PRINT);
        exit();
    }
}   
?>