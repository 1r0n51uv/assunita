<?php

class Connector
{

    public static function getConnector() {
        $host = 'db700141872.db.1and1.com';
        $user = 'dbo700141872';
        $pass = 'Ultimigiorni1?';
        $db = 'db700141872';
        $port = '3306';
        return new mysqli($host, $user, $pass, $db, $port);
    }

}
