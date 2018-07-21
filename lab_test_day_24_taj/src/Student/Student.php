<?php
namespace App\Student;

if(!isset($_SESSION)){
    session_start();
}
use App\Connection;
use PDO;
use PDOException;

use App\Connect;

class Student extends  Connect
{

    private $Product_title;
    private $Product_price;
    private $Category;
    private $Description;
    private  $image;

    public function set($data = array())
    {
        if (array_key_exists('Product_title', $data)) {
            $this->Product_title = $data['Product_title'];
        }
        if (array_key_exists('Product_price', $data)) {
            $this->Product_price = $data['Product_price'];
        }
        if (array_key_exists('Category', $data)) {
            $this->Category = $data['Category'];
        }
        if (array_key_exists('Description', $data)) {
            $this->Description = $data['Description'];
        }
        if (array_key_exists('image', $data)) {
            $this->image = $data['image'];
        }
        return $this;
    }
    public function store(){
        try {
            $stmt = $this->con->prepare("INSERT INTO `busness`(`Product_title`,`Product_price`,`Category`,`Description`,`image`)
                                                        VALUES(:Product_title,:Product_price,:Category,:Description,:image)");
            $result = $stmt->execute(array(
                ':Product_title' => $this->Product_title,
                ':Product_price' => $this->Product_price,
                ':Category' => $this->Category,
                ':Description' => $this->Description,
                ':image' => $this->image
            ));

            if($result){
               // $_SESSION['insert'] = 'Data successfully Inserted !!';
                header('location: index.php?msg');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



    public function index(){
        try {

            $stmt = $this->con->prepare("SELECT * FROM `busness`"); //update table name
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function update(){
        try {

            $stmt = $this->con->prepare("UPDATE `php-63`.`busness` SET `Product_title`=:Product_title,`Product_price`=:Product_price,`Category`=:Category,`Description`=:Description,`image`=:image WHERE `busness`.`id` = :id;"); //update table name



            //$stmt = $this->con->prepare("UPDATE `php-63`.`busness` SET `name` = :name, `department` = :department, `address` = :address WHERE `oop_students`.`id` = :id;"); //update table name

            $stmt->bindValue(':Product_title', $this->Product_title, PDO::PARAM_INT);
            $stmt->bindValue(':Product_price', $this->Product_price, PDO::PARAM_INT);
            $stmt->bindValue(':Category', $this->Category, PDO::PARAM_INT);
            $stmt->bindValue(':Description', $this->Description, PDO::PARAM_INT);
            $stmt->bindValue(':image', $this->image, PDO::PARAM_INT);
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            if($stmt){
                $_SESSION['update'] = 'Data successfully Updated !!';
                header('location: index.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public function view($id){
        try {

            $stmt = $this->con->prepare("SELECT * FROM `busness` WHERE id = :id"); //update table name
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function delete($id){
        try {

            $stmt = $this->con->prepare("DELETE FROM `busness` WHERE id = :id"); //update table name
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            if($stmt){
                $_SESSION['delete'] = 'Data successfully Deleted !!';
                header('location: index.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    
}