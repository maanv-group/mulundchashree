<?php
class FileSystemModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function scan_dir($path){
        $files = [];
        foreach (scandir($path) as $file) {
            array_push($files, $file);
        }
        return $files;
    }
}
?>