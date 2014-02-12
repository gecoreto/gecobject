<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GecObject\LogMysql;

class Log {

    private static $log_data;

    static function writeLog($action, $msg) {
        $action.=sizeof(self::$log_data) + 1;
        self::$log_data[$action] = $msg;
    }

    static function showLog() {
        echo "</br>Registro:</br>";
        foreach (self::$log_data as $action => $msg) {
            echo "[$action]: " . $msg . "</br>";
        }
    }

}
