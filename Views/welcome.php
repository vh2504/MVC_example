<?php
    session_start();
    echo 'Hello ' ;
    echo $_SESSION['username'] . ' | ';

    echo '<a class="underlineHover" href="http://localhost/MVC_example/index.php?controller=UserController&action=logout">Logout</a>';