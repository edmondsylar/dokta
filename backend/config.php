<?php
  /**
   * This is the main class for all our connectinos
   */
  class AppInit
  {
    public $conn;

    function __construct()
    {
      define('DB_SERVER', 'localhost');
      define('DB_USERNAME', 'dev');
      define('DB_PASSWORD', 'password');
      define('DB_NAME', 'doctor');

      $this->conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
      if($this->conn === false){
        echo "App not loving your database setup";
      }
    }

    function Login($email, $password){
      $passcheck = md5($password);
      $login_query = "SELECT * FROM users WHERE email='$email' AND password='$passcheck'";

      // make the database query
      $Auth = mysqli_query($this->conn, $login_query);
      $bj = mysqli_fetch_assoc($Auth);
      if($bj['id']){
        session_start();
        // $_SESSION["loggedin"] = true;
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $bj['email'];
        $_SESSION["name"] = $bj['names'];

        return header("Location: ../admin/home.php");
      }else{

        $client_login = "SELECT * FROM customers WHERE email='$email' AND password='$passcheck'";
        $Auth = mysqli_query($this->conn, $client_login);
        $bj = mysqli_fetch_assoc($Auth);

        if($bj['id']){
          session_start();
          // $_SESSION["loggedin"] = true;
          $_SESSION["loggedin"] = true;
          $_SESSION["email"] = $bj['email'];
          $_SESSION["name"] = $bj['names'];

          return header("Location: ../index.php");
      }
      header("Location: ../admin/index.php");
        echo mysqli_error($this->conn);
    }
  }

    function createuser($name, $email, $address, $phone, $password){
      $pass = md5($password);

      $ins = "INSERT INTO customers(`fullname`, `email`, `address`, `phone`, `password`) VALUES ('$name', '$email', '$address', '$phone', '$pass')";
      if(mysqli_query($this->conn, $ins)){

        header("Location: ../admin/");
      }else{
        echo "Something is wrong <br> ".mysqli_error($this->conn);
      }



    }

    function register($email, $name, $password){
      $pass = md5($password);

      $ins = "INSERT INTO users(`email`, `password`, `names`) VALUES ('$email', '$pass', '$name')";
      if(mysqli_query($this->conn, $ins)){

        header("Location: ../admin/");
      }else{
        echo "Something is wrong <br> ".mysqli_error($this->conn);
      }
    }

    function add_drug($title, $desc, $add, $image, $price){
      $add = "INSERT INTO drugs(`title`, `description`, `image`, `address`, `price`) VALUES ('$title', '$desc', '$image', '$add', '$price')";

      if(mysqli_query($this->conn, $add)){

        header("Location: ../admin/drugs.php");
      }else{
        echo "somthing went wrong". mysqli_error($this->conn);
      }

    }

    function add_service($title, $desc, $address, $image){
      $add = "INSERT INTO services(`title`, `description`, `image`, `address`) VALUES ('$title', '$desc', '$image', '$address')";

      if(mysqli_query($this->conn, $add)){

        header("Location: ../admin/services.php");
      }else{

        echo "somthing went wrong". mysqli_error($this->conn);
      }

    }

    function getDrugs(){
      $ms = "SELECT * FROM drugs";
      $results = mysqli_query($this->conn, $ms);

      return $results;
    }

    function getServices(){
      $ms = "SELECT * FROM services";
      $results = mysqli_query($this->conn, $ms);

      return $results;
    }

    function search_drug($keyword){
      $query = "SELECT * FROM drugs where title LIKE '%$keyword%' OR description LIKE '%$keyword%'";
      $res = mysqli_query($this->conn, $query);
      return $res;
    }

    function search_service($keyword){
      $query = "SELECT * FROM services where title LIKE '%$keyword%' OR description LIKE '%$keyword%'";
      $res = mysqli_query($this->conn, $query);
      return $res;
    }


    function product($id, $type){
      if($type == 'service'){
        $query = "SELECT * FROM services where id='$id'";
        $exec = mysqli_query($this->conn, $query);
        return $exec;

      }elseif ($type == 'drug') {
        $query = "SELECT * FROM drugs where id='$id'";
        $res = mysqli_query($this->conn, $query);
        return $res;

      }
    }

// end of the function
  }
 ?>
