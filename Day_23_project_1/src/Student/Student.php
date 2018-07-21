<?php
namespace App\Student;
if(!isset($_SESSION)){
    session_start();
}
use App\Connection;
use PDO;
use PDOException;
class Student extends Connection
{
    private $name;
    private $department;
    private $address;
    private $id;

    public function set($data = array()){
        if(array_key_exists('name',$data)){
            $this->name = $data['name'];
        }
        if(array_key_exists('department',$data)){
            $this->department = $data['department'];
        }
        if(array_key_exists('address',$data)){
            $this->address = $data['address'];
        }
        if(array_key_exists('id',$data)){
            $this->id = $data['id'];
        }
        return $this;
    }

    public function store(){
        try {
           $stmt = $this->con->prepare("INSERT INTO `oop_students`(`name`,`department`,`address`)
                                              VALUES(:n,:department,:a)");
           $result = $stmt->execute(array(
                ':n' => $this->name,
                ':department' => $this->department,
                ':a' => $this->address
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

    public function index(){
        try {

            $stmt = $this->con->prepare("SELECT * FROM `oop_students`"); //update table name
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function view($id){
        try {

            $stmt = $this->con->prepare("SELECT * FROM `oop_students` WHERE id = :id"); //update table name
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

            $stmt = $this->con->prepare("DELETE FROM `oop_students` WHERE id = :id"); //update table name
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

            $stmt = $this->con->prepare("UPDATE `php-63`.`oop_students` SET `name` = :name, `department` = :department, `address` = :address WHERE `oop_students`.`id` = :id;"); //update table name
            $stmt->bindValue(':name', $this->name, PDO::PARAM_INT);
            $stmt->bindValue(':department', $this->department, PDO::PARAM_INT);
            $stmt->bindValue(':address', $this->address, PDO::PARAM_INT);
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
}