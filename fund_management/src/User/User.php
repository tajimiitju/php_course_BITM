<?php


namespace App\User;
 use PDOException;
 use PDO;

use App\Connection;

class User extends Connection

{
    private $name;
    private $target;
    private $location;
    private $pay_method;
    private $start_date;
    private $end_date;
    private $image;
    private $id;

    public function set($data = array())
    {
        if (array_key_exists('name', $data)) {
            $this->name = $data['name'];
        }
        if (array_key_exists('target', $data)) {
            $this->target = $data['target'];
        }
        if (array_key_exists('location', $data)) {
            $this->location = $data['location'];
        }
        if (array_key_exists('pay_method', $data)) {
            $this->pay_method = $data['pay_method'];
        }
        if (array_key_exists('start_date', $data)) {
            $this->start_date = $data['start_date'];
        }
        if (array_key_exists('end_date', $data)) {
            $this->end_date = $data['end_date'];
        }
        if (array_key_exists('image', $data)) {
            $this->image = $data['image'];
        }
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }
        return $this;
    }

    public function store()
    {
        try {
            $stmt = $this->con->prepare("INSERT INTO `user`(`target`, `location`, `pay_method`, `start_date`, `end_date`, `image`, `name`)
            VALUES(:target,:location,:pay_method, :start_date, :end_date, :image, :name)");


            $result = $stmt->execute(array(
                ':target' => $this->target,
                ':location' => $this->location,
                ':pay_method' => $this->pay_method,
                ':start_date' => $this->start_date,
                ':end_date' => $this->end_date,
                ':image' => $this->image,
                ':name' => $this->name
            ));

            if ($result) {
                $_SESSION['insert'] = 'Data successfully Inserted !!';
                header('location: ../../index.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function index()
    {
        try {

            $stmt = $this->con->prepare("SELECT * FROM `user`"); //update table name
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function view($id)
    {
        try {

            $stmt = $this->con->prepare("SELECT * FROM `user` WHERE id = :id"); //update table name
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function upload()
    {

        $img_name = $_FILES['image']['name'];
        $img_tmp_name = $_FILES['image']['tmp_name'];
        $genName = substr(md5(uniqid()), 0, 10);
        $extName = end(explode('.', $img_name));
        $_POST['image'] = $genName . '.' . $extName;
        move_uploaded_file($img_tmp_name, '../../assets/uploads/' . $_POST['image']);

        return $_POST['image'];

    }

    public function image_delete($id)
    {

        try {

            $stmt = $this->con->prepare("SELECT `image` FROM `user` WHERE id = :id"); //update table name
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if (isset($data['image'])) {
                unlink('../../assets/uploads/' . $data['image']);
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }


    public function delete($id)
    {
        try {

            $stmt = $this->con->prepare("DELETE FROM `user` WHERE id = :id"); //update table name
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt) {
                $_SESSION['delete'] = 'Data successfully Deleted !!';
                header('location: ../../view/admin/fund/requests.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function update()
    {
        try {

            $stmt = $this->con->prepare("UPDATE `fund_management`.`user` SET `target` = :target, `location` = :location, `pay_method` = :pay_method, `start_date` = :start_date, `end_date` = :end_date, `image` = :image, `name` = :name WHERE `fund`.`id` = :id;"); //update table name

            $stmt->bindValue(':target', $this->target, PDO::PARAM_INT);
            $stmt->bindValue(':location', $this->location, PDO::PARAM_INT);
            $stmt->bindValue(':pay_method', $this->pay_method, PDO::PARAM_INT);
            $stmt->bindValue(':start_date', $this->start_date, PDO::PARAM_INT);
            $stmt->bindValue(':end_date', $this->end_date, PDO::PARAM_INT);
            $stmt->bindValue(':image', $this->image, PDO::PARAM_INT);
            $stmt->bindValue(':name', $this->name, PDO::PARAM_INT);
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt) {
                $_SESSION['update'] = 'Data successfully Updated !!';
                header('location:index.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
