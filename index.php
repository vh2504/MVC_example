<?php 
    session_start();
    require_once 'routes.php';
    if(isset($_SESSION['username']))
        header('Location: http://localhost/MVC_example/Views/welcome.php');
    if(isset($_GET['controller']) && isset($_GET['action'])) {
        route($_GET['controller'] , $_GET['action']);
    }

    require_once 'Views/form_login.php';
   