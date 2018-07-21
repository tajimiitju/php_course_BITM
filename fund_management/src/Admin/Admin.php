<?php
namespace App\Admin;
if(!isset($_SESSION)){
    session_start();
}
use App\Connection;
use PDO;
use PDOException;


class Admin extends Connection
{
    private $name;
    private $target;
    private $location;
    private $pay_method;
    private $start_date;
    private $end_date;
    private $image;
    private $id;
    private $rcv_money;

    public function set($data = array()){
        if(array_key_exists('name',$data)){
            $this->name = $data['name'];
        }
        if(array_key_exists('target',$data)){
            $this->target = $data['target'];
        }
        if(array_key_exists('location',$data)){
            $this->location = $data['location'];
        }
        if(array_key_exists('pay_method',$data)){
            $this->pay_method = $data['pay_method'];
        }
        if(array_key_exists('start_date',$data)){
            $this->start_date = $data['start_date'];
        }
        if(array_key_exists('end_date',$data)){
            $this->end_date = $data['end_date'];
        }
        if(array_key_exists('image',$data)){
            $this->image = $data['image'];
        }
        if(array_key_exists('id',$data)){
            $this->id = $data['id'];
        }
        return $this;
    }



    public function store(){
        try {
           $stmt = $this->con->prepare("INSERT INTO `fund`(`target`, `location`, `pay_method`, `start_date`, `end_date`, `image`, `name`, `unique_id`)
            VALUES(:target,:location,:pay_method, :start_date, :end_date, :image, :name, :unique_id)");
           

           $result = $stmt->execute(array(
                ':target' => $this->target,
                ':location' => $this->location,
                ':pay_method' => $this->pay_method,
                ':start_date' => $this->start_date,
                ':end_date' => $this->end_date,
                ':image' => $this->image,
                ':name' => $this->name,
               ':unique_id' => md5(time())
            ));

           if($result){
               $_SESSION['insert'] = 'Data successfully Inserted !!';
               header('location: index.php');
           }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



    public function store2(){
        try {
            $stmt = $this->con->prepare("INSERT INTO `fund2`(`target`, `location`, `pay_method`, `start_date`, `end_date`, `image`, `name`, `unique_id`)
            VALUES(:target,:location,:pay_method, :start_date, :end_date, :image, :name, :unique_id)");


            $result = $stmt->execute(array(
                ':target' => $this->target,
                ':location' => $this->location,
                ':pay_method' => $this->pay_method,
                ':start_date' => $this->start_date,
                ':end_date' => $this->end_date,
                ':image' => $this->image,
                ':name' => $this->name,
                ':unique_id' => md5(time())
            ));

            if($result){
                $_SESSION['insert'] = 'Data successfully Inserted !!';
                header('location: ../../index.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



    public function index(){
        try {

        $stmt = $this->con->prepare("SELECT * FROM `fund` WHERE `deleted_at` = '0000-00-00 00:00:00'"); //update table name
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



    public function index_dntn(){
        try {

            $stmt = $this->con->prepare("SELECT * FROM `donation`"); //update table name
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



    public function index2(){
        try {

            $stmt = $this->con->prepare("SELECT * FROM `fund2`"); //update table name
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



    public function view($id){
        try {

            $stmt = $this->con->prepare("SELECT * FROM `fund` WHERE unique_id = :id"); //update table name
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



    public function upload(){

        $img_name = $_FILES['image']['name'];
        $img_tmp_name = $_FILES['image']['tmp_name'];
        $genName = substr(md5(uniqid()),0,10);
        $extName = end(explode('.',$img_name));
        $_POST['image']  = $genName.'.'.$extName;
        move_uploaded_file($img_tmp_name,'../../../assets/uploads/'.$_POST['image']);

        return $_POST['image'];

    }



    public function image_delete($id){

        try {

            $stmt = $this->con->prepare("SELECT `image` FROM `fund` WHERE unique_id = :id"); //update table name
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if(isset($data['image'])){
                unlink('../../../assets/uploads/'.$data['image']);
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }



    public function delete($id){
        try {

            $stmt = $this->con->prepare("DELETE FROM `fund` WHERE unique_id = :id"); //update table name
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



    public function update(){
        try {

            $stmt = $this->con->prepare("UPDATE `fund_management`.`fund` SET `target` = :target, `location` = :location, `pay_method` = :pay_method, `start_date` = :start_date, `end_date` = :end_date, `image` = :image, `name` = :name WHERE `fund`.`unique_id` = :id;"); //update table name
        
        $stmt->bindValue(':target', $this->target, PDO::PARAM_INT);
        $stmt->bindValue(':location', $this->location, PDO::PARAM_INT);
        $stmt->bindValue(':pay_method', $this->pay_method, PDO::PARAM_INT);
        $stmt->bindValue(':start_date', $this->start_date, PDO::PARAM_INT);
        $stmt->bindValue(':end_date', $this->end_date, PDO::PARAM_INT);
        $stmt->bindValue(':image', $this->image, PDO::PARAM_INT);
        $stmt->bindValue(':name', $this->name, PDO::PARAM_INT);
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



    /**********Temporary Data Delete Function***********/

    public function tmp_delete($id){
       try { 
         $query = ("UPDATE `fund` SET `deleted_at` = NOW() WHERE unique_id = :id");
         $stmt = $this->con->prepare($query);
         $stmt->bindValue(':id', $id, PDO::PARAM_STR);
         $stmt->execute();
         if($stmt){
                $_SESSION['delete'] = 'Data successfully Updated !!';
                header('location: index.php');
            }
           
       } catch (Exception $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
          die(); 
       }

    }



    public function trash(){
     try {

        $stm =  $this->con->prepare("SELECT * FROM `fund` WHERE `deleted_at` != '0000-00-00 00:00:00'");
         $stm->execute();
         return $stm->fetchAll(PDO::FETCH_ASSOC);

     } catch (PDOException $e) {
         print "Error!: " . $e->getMessage() . "<br/>";
         die();
     }
 }



 public function restore($id){
     try { 
       $query = ("UPDATE `fund` SET `deleted_at` = '0000-00-00 00:00:00' WHERE unique_id = :id");
       $stmt = $this->con->prepare($query);
       $stmt->bindValue(':id', $id, PDO::PARAM_STR);
       $stmt->execute();
       if($stmt){
                $_SESSION['delete'] = 'Data successfully Updated !!';
                header('location: trash.php');
            }

   } catch (Exception $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die(); 
  }

}


}