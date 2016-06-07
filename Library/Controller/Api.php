<?php
/**
 * Service-API
 * Add: 2016/6/7 11:29
 * Author: Sendya <18x@loacg.com>
 */

namespace Controller;


use Helper\Utils;
use Model\Process;
use Model\Server;

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
     * @JSON
     */
    public function agent()
    {

        if ($_POST['token'] != null) {
            $token = $_POST['token'] . PHP_EOL;
            $data = $_POST['data'] . PHP_EOL;
        }

        $data_arr = explode(" ", $data);

        $server = new Server();
        $server->version = base64_decode($data_arr[0]);
        $server->uptime = base64_decode($data_arr[1]);
        $server->sessions = base64_decode($data_arr[2]);
        $server->processes = base64_decode($data_arr[3]);
        $processes_array = explode(";", base64_decode($data_arr[4]));
        $processes_arr = array();
        foreach ($processes_array as $processes) {
            $info = explode(" ", $processes);
            $process = new Process();
            $process->user = $info[0];
            $process->cpu = $info[1];
            $process->memory = $info[2];
            $process->name = $info[3];
            if(!$processes_arr[$process->name]) {
                $processes_arr[$process->name] = $process;
            } else {
                $processes_arr[$process->name]->cpu = $processes_arr[$process->name]->cpu + $process->cpu;
                $processes_arr[$process->name]->memory = $processes_arr[$process->name]->memory + $process->memory;
                $processes_arr[$process->name]->count = $processes_arr[$process->name]->count +1;
            }
        }
        $server->processes_array = $processes_arr;
        $server->file_handles = base64_decode($data_arr[5]);
        $server->file_handles_limit = base64_decode($data_arr[6]);
        $server->os_kernel = base64_decode($data_arr[7]);
        $server->os_name = base64_decode($data_arr[8]);
        $server->os_arch = base64_decode($data_arr[9]);
        $server->cpu_name = base64_decode($data_arr[10]);
        $server->cpu_cores = base64_decode($data_arr[11]);
        $server->cpu_freq = base64_decode($data_arr[12]);
        $server->ram_total = base64_decode($data_arr[13]);
        $server->ram_usage = base64_decode($data_arr[14]);
        $server->swap_total = base64_decode($data_arr[15]);
        $server->swap_usage = base64_decode($data_arr[16]);
        $server->disk_array = base64_decode($data_arr[17]);
        $server->disk_total = base64_decode($data_arr[18]);
        $server->disk_usage = base64_decode($data_arr[19]);
        $server->connections = base64_decode($data_arr[20]);
        $server->nic = base64_decode($data_arr[21]);
        $server->ipv4 = base64_decode($data_arr[22]);
        $server->ipv6 = base64_decode($data_arr[23]);
        $server->rx = base64_decode($data_arr[24]);
        $server->tx = base64_decode($data_arr[25]);
        $server->rx_gap = base64_decode($data_arr[26]);
        $server->tx_gap = base64_decode($data_arr[27]);
        $server->load = base64_decode($data_arr[28]);
        $server->load_cpu = base64_decode($data_arr[29]);
        $server->load_io = base64_decode($data_arr[30]);
        $server->ping_us = base64_decode($data_arr[31]);
        $server->ping_jp = base64_decode($data_arr[32]);
        $server->ping_cn = base64_decode($data_arr[33]);

        return $server;
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