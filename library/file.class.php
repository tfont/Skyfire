<?php

// Dates interface and function into object inherence

class File extends Controller
{
    static public function includeIfExist($path){}      // $this->includeIfExist()
    static public function includ_onceIfExist($path){}  // $this->includ_onceIfExist()
    static public function requireIfExist($path){}      // $this->requireIfExist()
    static public function require_onceIfExist($path){} // $this->require_onceIfExist()

    protected function write_log_error($text, $log_file)
    {
        return write_log_error($text, $log_file);
    }

    protected function get_file_ext($filename)
    {
        return get_file_ext($filename);
    }

    // convertIniFileToConstants
    protected function convert_ini_file_to_constants($path)
    {
        return convert_ini_file_to_constants($path);
    }

    protected function list_directory($directory, $recursive = FALSE)
    {
        return list_directory($directory, $recursive);
    }


}