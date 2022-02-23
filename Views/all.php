
<?php


if (!(isset($_SESSION['user_logged']) && $_SESSION['user_logged'] == true )) {
    Redirect::to('login');
}

    $user_id=$_SESSION['idClinet'];
    $exitUser = new UserController();
    $user =$exitUser->getOneUser($user_id);
    // die(var_dump($user));


    if (isset($_POST['idVol'])) {
        // die(var_dump($_POST['idVol']));
    
        $exitVol = new VolController();
        $vol = $exitVol->getOneVol();
    }

?>

<body>
<?php
include './views/include/header.php';

?>

<div class="container mt-20">
        <div class="row d-flex justify-content-center">

            <h1> Tickets </h1>
        </div>

        <div class="row d-flex justify-content-center">
            <form method="POST" class='bookingTicket' action="profile">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <P for="name" class="list-group-item">Airline : <span><?= $vol->airlines; ?></P>
                            <hr class="mt-0 mb-3">
                            <P for="name" class="list-group-item">Ville Depart : <?= $vol->depart; ?> </p>
                            <hr class="mt-0 mb-3">
                            <P for="name" class="list-group-item">Arriver : <?= $vol->destination; ?></p>
                            <hr class="mt-0 mb-3">
                            <P for="name" class="list-group-item">Date Depart : <?= $vol->HeurDepart; ?></p>
                            <hr class="mt-0 mb-3">
                            <P for="name" class="list-group-item">date Darrivée : <?= $vol->HeurDarrivée; ?></p>
                            <input type="hidden" name="idVol" value="<?= $vol->idVol;?>>">
                            <hr class="mt-0 mb-3">
                            <p class="list-group-item">Prix : <?= $vol->prix; ?> $</p>
                            <!-- <p class="list-group-item">Prix : <?= $vol->numberPlac; ?> $</p> -->

                            <input type="hidden" name="idVol" value="<?= $vol->idVol ?>" class="d-block my-3"></input>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <P for="name" class="list-group-item">Nom : <?php echo $user->nom; ?></p>
                            <hr class="mt-0 mb-3">
                            <P for="name" class="list-group-item">Prenom : <?php echo $user->prenom; ?></p>
                            <hr class="mt-0 mb-3">
                            <P for="name" class="list-group-item">Date de naissanc : <?php echo $user->datenaissanc; ?></p>
                            <hr class="mt-0 mb-3">
                            <P for="name" class="list-group-item">Age : <?php echo $user->age; ?></p>
                            <hr class="mt-0 mb-3">
                            <P for="name" class="list-group-item">Numéro de passport: <?php echo $user->passport; ?></p>
                            <hr class="mt-0 mb-3">
                            <P for="name" class="list-group-item">Email : <?php echo $user->email; ?></p>

                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>
</body>
