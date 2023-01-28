<?php

// Configures cofig settings
namespace Config;

use Exception;

// Creates config class
class config {

    public array $standard;

    // config construction
    public function __construct()
    {
        $this->makestandard();
    }
    /**
     * Make Standard
     *  Creates a default config standard array to pull default values
     */
    protected function makestandard() {
        $string = file_get_contents(str_replace("public", "resources", $_SERVER["DOCUMENT_ROOT"])."/config.json");
        if ($string == false) {
            throw new Exception("Unable to obtain Config.json File", 1);
        } else {
            $this->standard = json_decode($string, true);
        }
    }
}

?>