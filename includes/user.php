<?php
require_once 'database.php';

class user{
    public $userId;    
    public $email;
    public $password;
    public $gender;
    public $date_of_birth;
    public $username;
    public $profilePic;
    public $job;
    public $address;
    public $active;


    public function fetchAll(){
        $database = new database();
        $query = "select * from users where active = 1";
        $database->performQuery($query);
        return $database->fetchAll();
    }
    public function fetchById($id){
        $database = new database();
        $query = "select * from users where active = 1 and user_id = $id";
        $database->performQuery($query);
        return $database->fetchAll();
    }
    public static function auth($email, $password){
        $database = new database();
        $query = "select * from users where email = '$email' "
                . "and password = '$password'"
                . " and active = 1";        
        $database->performQuery($query);
        return $database->fetchAll();
    }
    public function delete($user_id){
        $database = new database();
        $query = "update users set active = 0 where user_id = $user_id";
        $result = $database->performQuery($query);
        return $result ? TRUE : FALSE;
    }
    public function create(){
        $database = new database();
        $this->password = md5($this->password);
        $query = "insert into users (email, password, gender, date_of_birth)
                  values('$this->email', '$this->password',"
                . "'$this->gender', '$this->date_of_birth')";
        $result = $database->performQuery($query);
        return $result ? TRUE : FALSE;
    }
    public function update($user_id){
        $database = new database();
        $query = "update users set email = '$this->email',"
                . "username = '$this->username',"
                . "profile_pic = '$this->profilePic',"
                . "job = '$this->job',"
                . "address = '$this->address',"
                . "gender = '$this->gender'"
                . "WHERE user_id=$user_id";
        $result = $database->performQuery($query);
        return $result ? TRUE : FALSE;
    }
}