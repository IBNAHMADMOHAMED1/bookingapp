<?php
if (!(isset($_SESSION['user_logged']) && $_SESSION['user_logged'] == true)) {
    
    Redirect::to('login');
}


?>










<?php

include './views/include/header.php';
?>