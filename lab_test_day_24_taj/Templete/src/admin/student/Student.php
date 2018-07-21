<?php

namespace App\admin\Student;
if(!isset($_SESSION)){
    session_start();
}
use App\Connection;
use PDOException;
use PDO;
class Student extends Connection
{
    public $product_title;
    public $category;
    public $description;
    public $price;
//    public $image;


    public function set($data = array()){
        if(array_key_exists('product_title',$data)){
            $this->product_title = $data['product_title'];
        }
        if(array_key_exists('category',$data)){
            $this->category = $data['category'];
        }
        if(array_key_exists('description',$data)){
            $this->description = $data['description'];
        }
        if(array_key_exists('price',$data)){
            $this->price = $data['price'];
        }
        //  if(array_key_exists('image',$data)){
        //   $this->image = $data['image'];
        //  }
        return $this;
    }

    public function store(){
        try {

            $stm =  $this->con->prepare("INSERT INTO `product`(`product_title`, `category`, `description`, `price`)VALUES(:p,:c,:d,:pr)");
            $result =$stm->execute(array(
                ':p' => $this->product_title,
                ':c' => $this->category,
                ':d' => $this->description,
                ':pr' => $this->price,
                //':i' => $this->image
            ));
            if($result){
                $_SESSION['msg'] = 'Data successfully Inserted !!!';
                header('location:index.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



    public function index(){
        try {

            $stm =  $this->con->prepare("SELECT * FROM `oop_students`");

            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function view($id){
        try {

            $stm =  $this->con->prepare("SELECT * FROM `oop_students` WHERE id = $id");

            $stm->execute();
            return $stm->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public function delete($id){
        try {

            $stm =  $this->con->prepare("DELETE FROM `oop_students` WHERE id = $id");
            $stm->execute();
            if($stm){
                $_SESSION['delete'] = 'Data successfully Deleted !!!';
                header('location:index.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public function update(){
        try {

            $stmt = $this->con->prepare("UPDATE `php67`.`oop_students` SET `name` = :name, `department` = :department, `address` = :address WHERE `oop_students`.`id` = :id;");
            $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindValue(':department', $this->department, PDO::PARAM_STR);
            $stmt->bindValue(':address', $this->address, PDO::PARAM_STR);
            $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt){
                $_SESSION['update'] = 'Data successfully Updated !!!';
                header('location:index.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

















}
