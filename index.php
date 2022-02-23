<?php
    // require_once './views/includes/header.php';
    require_once './autoload.php';
    require_once './controllers/HomeController.php';
    require_once './controllers/UserController.php';

    // spl_autoload_register(function($name){
    //     if (file_exists('./controllers/'.$name.'.php')) {
    //         require_once './controllers/'.$name.'.php';
    //     }else echo 'file not!';
    // });

    $home = new HomeController();
    // $data=new UserController();
    // $data->getAllEmployes();

    // $home->index($_GET['page']);
    $pages=['home','tousRervations','supprimerVol','all','confirmation','UpdateVol','profile','reserve','mesréservation','ALLreservation','reservation','admin','dashboard' ,'ajouterVol','Annuler','logout','search','login'];

    if(isset($_GET['page']))
    {
        if(in_array(($_GET['page']),$pages))
        {
            $page=$_GET['page'];
            if ($page == 'dashboard' || $page=='admin') {
                // include('views/dashboard.php');
                $admin = new AdminController();
                $admin->index($page);
            } else {            
                $home->index($page);
            }
        }
        else
        {
        include('./views/include/eror.php');
        }
    }
    else
    {
        $home->index('home');
    }
    
?>