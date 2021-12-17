<?php

namespace Nachet\Monitor;

class Monitor
{
    

    public function DiskSpace(){
        $totalSpace = disk_total_space(base_path());
        $freeSpace = disk_free_space(base_path());
        $usedSpace = $totalSpace - $freeSpace;
        $percent = round(($usedSpace / $totalSpace) * 100).'%';
        return ['total'=>self::roundsize($totalSpace),'free'=>self::roundsize($freeSpace),'used'=>self::roundsize($usedSpace),'percent'=>$percent];
    }
    public function getCPUUsagePercentage()
    {
        $cpu = shell_exec("grep 'cpu ' /proc/stat | awk '{usage=($2+$4)*100/($2+$4+$5)} END {print usage}'");
        return (float)$cpu;
    }
    public function getContainers(){
        $containers=shell_exec('for i in $(docker ps --format \'{{.Names}}\');do echo -ne "$i,";done;');
        return $containers;

    }
    public function Ram(){
        return round(memory_get_usage()/1048576,2).''.' MB';

    }
    public static function event(string $name,float $val,?string $dimension=null){
        return $name."-".$val."-".$dimension;
    }
    private function roundsize($size){
        $i=0;
        $iec = array("B", "Kb", "Mb", "Gb", "Tb");
        while (($size/1024)>1) {
            $size=$size/1024;
            $i++;}
        return(round($size,1)." ".$iec[$i]);}
}
