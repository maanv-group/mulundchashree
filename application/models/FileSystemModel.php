<?php
class FileSystemModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function scan_dir($path){
        $files = [];
        foreach (glob($path. "*.*") as $file) {
            array_push($files, explode($path, $file)[1]);
        }
        return $files;
    }
}
?>