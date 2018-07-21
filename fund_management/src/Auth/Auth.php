<?php

namespace App\Auth;

use PDO;
use  PDOException;
use App\Connection;

class Auth extends Connection
{
private $user;
private $email;
private $phone;
private $password;


    public function set($data = array()){
        if(array_key_exists('user',$data)){
            $this->user = $data['user'];
        }
        if(array_key_exists('email',$data)){
            $this->email = $data['email'];
        }
        if(array_key_exists('phone',$data)){
            $this->phone = $data['phone'];
        }
        if(array_key_exists('password',$data)){
            $this->password = $data['password'];
        } 
        return $this;
    }


    
    public function store(){
        try {
            $stmt = $this->con->prepare("INSERT INTO `registration`(`user`, `email`, `phone`, `password`) VALUES(:user,:email,:phone,:password)");


            $result = $stmt->execute(array(
                ':user' => $this->user,
                ':email' => $this->email,
                ':phone' => $this->phone,
                ':password' => $this->password             
                
            ));

            if($result){
                $_SESSION['insert'] = ' Registration successfully !!';
                header('location: login.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



    public function login(){
    try {

        $stm =  $this->con->prepare("SELECT * FROM `registration` where  email = :email AND password = :password");
        //$stm->bindValue(':user', $this->user, PDO::PARAM_STR);
        $stm->bindValue(':email', $this->email, PDO::PARAM_STR);
        $stm->bindValue(':password', $this->password, PDO::PARAM_STR);
        $stm->execute();
        $registration = $stm->fetch(PDO::FETCH_ASSOC);

        if(!empty($registration['id'])){
            $_SESSION['email'] = $registration['email'];
            header('location: ../../../view/admin/fund/index.php');
        }
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
 }




}