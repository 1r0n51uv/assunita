<?php



class User {

    private $keyUser;
    private $nome;
    private $cognome;
    private $nascita;
    private $email;
    private $password;

    public function __construct($key, $name, $surname, $birth, $mail, $pass) {
        $this->keyUser = $key;
        $this->nome = $name;
        $this->cognome = $surname;
        $this->nascita = $birth;
        $this->email = $mail;
        $this->password = $pass;

    }

    /**
     * @return mixed
     */
    public function getKeyUser()
    {
        return $this->keyUser;
    }

    /**
     * @param mixed $keyUser
     */
    public function setKeyUser($keyUser)
    {
        $this->keyUser = $keyUser;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * @param mixed $cognome
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    /**
     * @return mixed
     */
    public function getNascita()
    {
        return $this->nascita;
    }

    /**
     * @param mixed $nascita
     */
    public function setNascita($nascita)
    {
        $this->nascita = $nascita;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }





}