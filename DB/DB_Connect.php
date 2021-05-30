<?php
    class DB_Connect {
     
      public static $instance = NULl;

      public static function connect() {
        // Create connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "mvc_example";
        self::$instance = mysqli_connect($servername, $username, $password, $db_name);
        
        // Check connection
        if (!self::$instance) {
          die("Connection failed: " . mysqli_connect_error());
        }
        // echo "Connected successfully";
        return self::$instance;
      }
    }

    DB_Connect::connect();
    
    

