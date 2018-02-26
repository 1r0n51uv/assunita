<?php

include_once BEANS_DIR . 'User.php';
include_once MODEL_DIR . 'Connector.php';

class UserManager
{


    public function __construct()
    {

    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM UTENTE";
        $users = array();
        $res = mysqli_query(Connector::getConnector(), $query);
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $utente = new User($obj['KEYUSER'], $obj['NOME'], $obj['COGNOME'], $obj['NASCITA'], $obj['EMAIL'], $obj['PASSWORD']);
                array_push($users, $utente);
            }
        }

        return $res;

    }

    public function selectByKeyUser($key)
    {
        $query = "SELECT * FROM UTENTE WHERE KEYUSER = '%s'";
        $finalQuery = sprintf($query, $key);
        $res = mysqli_query(Connector::getConnector(), $finalQuery);
        if ($obj = $res->fetch_object()) {
            $utente = new User($obj['KEYUSER'], $obj['NOME'], $obj['COGNOME'], $obj['NASCITA'], $obj['EMAIL'], $obj['PASSWORD']);
            return $utente;
        } else {
            return null;
        }
    }

    public function checkByEmail($email)
    {
        $query = "SELECT * FROM UTENTE WHERE EMAIL = '%s'";
        $finalQuery = sprintf($query, $email);
        $res = mysqli_query(Connector::getConnector(), $finalQuery);
        if ($res->num_rows > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function insertUserByForm($name, $surname, $birth, $email, $pass)
    {
        $query = "INSERT INTO UTENTE VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
        $finalQuery = sprintf($query, null, $name, $surname, $birth, $email, $pass);
        $res = mysqli_query(Connector::getConnector(), $finalQuery);
        if ($res) {
            return 0;
        }
    }


    public function loginForm($email, $pass) {
        $query = "SELECT * FROM UTENTE WHERE EMAIL = '%s' AND PASSWORD = '%s'";
        $finalQuery = sprintf($query, $email, $pass);
        $res = mysqli_query(Connector::getConnector(), $finalQuery);
        //echo $finalQuery;
        if ($res) {
            while ($obj = $res->fetch_assoc()){
                $utente = new User($obj['KEYUSER'], $obj['NOME'], $obj['COGNOME'], $obj['NASCITA'], $obj['EMAIL'], $obj['PASSWORD']);
            }
            return $utente;
        } else {
            return 1;
        }

    }


}




