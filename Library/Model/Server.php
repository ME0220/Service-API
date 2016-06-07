<?php

namespace Model;

/**
 * Service-API
 * Add: 2016/6/7 14:54
 * Author: Sendya <18x@loacg.com>
 */
class Server
{
    public $version; // 脚本版本
    public $uptime; // 开机时间
    public $sessions; // 会话数量
    public $processes; // 进程数量
    public $processes_array; // 详细进程数组
    public $file_handles;
    public $file_handles_limit;
    public $os_kernel;
    public $os_name;
    public $os_arch;
    public $cpu_name;
    public $cpu_cores;
    public $cpu_freq;
    public $ram_total;
    public $ram_usage;
    public $swap_total;
    public $swap_usage;
    public $disk_array;
    public $disk_total;
    public $disk_usage;
    public $connections;
    public $nic;
    public $ipv4;
    public $ipv6;
    public $rx;
    public $tx;
    public $rx_gap;
    public $tx_gap;
    public $load;
    public $load_cpu;
    public $load_io;
    public $ping_us;
    public $ping_jp;
    public $ping_cn;


}