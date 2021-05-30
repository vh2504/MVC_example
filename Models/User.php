<?php
    require_once './DB/DB_Connect.php';
 
    class User {

      public static function checkUserExists($username, $password) {
          $password = md5($password);
          $sql = "SELECT *  FROM users where username = '" . $username . "' and password = '" . $password ."'";
      
          $result = mysqli_query(DB_Connect::$instance, $sql);

          if (mysqli_num_rows($result) > 0) 
            return true;

          return false ;
      }
        
    }