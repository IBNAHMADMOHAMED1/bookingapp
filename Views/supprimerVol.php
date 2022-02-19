<?php
if (isset($_POST['idVol']))
{
    $vol = new VolController();
    $vol->deletVol($_POST['idVol']);
    
    
};

// include_once './controllers/EmplesController.php';

?>