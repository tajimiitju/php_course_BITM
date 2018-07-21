<?php
/**
 * Created by PhpStorm.
 * User: Sadia Sabnaj
 * Date: 9/22/2017
 * Time: 11:44 AM
 */
namespace App;
use PDO;
use PDOException;
class Connection
{
    protected $con;
    private $user = 'root';
    private $pass = '';
    public function __construct(){
        try {
            $this->con = new PDO('mysql:host=localhost;dbname=day23', $this->user, $this->pass);
//            $this->con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            $this->con ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}