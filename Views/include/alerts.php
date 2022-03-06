<?php 

if(isset($_COOKIE['error']))
{
    echo '<div class="alert alert-danger">'.$_COOKIE['error'].'</div>';
}
if(isset($_COOKIE['info']))
{
    echo '<div class="alert alert-info">'.$_COOKIE['info'].'</div>';
}
if(isset($_COOKIE['Success']))
{
    echo '<div class="alert alert-success">'.$_COOKIE['Success'].'</div>';
    // echo "yes yes ";
   
}

?>
