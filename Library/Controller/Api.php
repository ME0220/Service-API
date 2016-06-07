<?php
/**
 * Service-API
 * Add: 2016/6/7 11:29
 * Author: Sendya <18x@loacg.com>
 */

namespace Controller;


use Helper\Utils;

class Api
{

    /**
     * @DynamicRoute /Api/{string}
     * @param $api_key
     */
    public function index($api_key)
    {

    }

    /**
     * @Route /Api/agent
     */
    public function agent()
    {
        if ($_POST['token'] != null) {
            $log_file_path = DATA_PATH . 'api_data.log';
            $token = $_POST['token'] . PHP_EOL;
            $data = $_POST['data'] . PHP_EOL;
            
            file_put_contents($log_file_path, $token . $data, FILE_APPEND);
        }
    }

    /**
     * @Route /Api/create
     */
    public function create()
    {
        echo Utils::randomChar(25);
        exit();
    }

}