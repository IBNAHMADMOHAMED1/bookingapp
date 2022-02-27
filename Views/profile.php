<?php


if (!(isset($_SESSION['user_logged']) && $_SESSION['user_logged'] == true)) {
    Redirect::to('login');
}

$user_id = $_SESSION['idClinet'];
$exitUser = new UserController();
$user = $exitUser->getOneUser($user_id);
// die(var_dump($user));


if (isset($_POST['idVol'])) {
    // die(var_dump($_POST['idVol']));

    $exitVol = new VolController();
    $vol = $exitVol->getOneVol();
    // die(print_r($vol));
}
$getabs= new abstractController();
$infos = $getabs->getall();
// die(var_dump($infos));

$getAllReservations = new reservation();
$reservation= $getAllReservations->getone($user_id);
// die(var_dump($reservation));


if (isset($_POST['submit']))
{
    $update= new UserController();
    $up=$update->updateProfile($user_id);
}
if (isset($_POST['annuler']))
{
    $idreservation=$_POST['idreservation'];
    $annulerResva = new abstractController();
    $annuler= $annulerResva->annuler($idreservation);
}

include './views/include/header.php';

?>



<p style="margin-top: 100px;">
<p>
<div class="container-xl px-4 mt-4" style="margin-top:80px;">
    <!-- Account page navigation-->


    <div class="row">
        <div class="col-xl-4">
            <!-- Image de profil card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header" style="background: #5C7AEA; color:#fff; ">Image de profile</div>
                <div class="card-body text-center">

                    <img class="img-account-profile rounded-circle mb-2" src="./image/clinet1.png" alt="">

                    <div class="small font-italic text-muted mb-4">JPG 1G</div>

                    <button class="btn btn-primary" type="button">Nouvelle image</button>


                    <div class="col-md-16 " style="margin-top: 20px;">
                        <div class="form-group d-flex flex-column  ">
                            <hr class="mt-0 mb-3">
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
                    <!-- <button class="btn btn-primary" type="button">Modifer</button> -->
                </div>
            </div>

        </div>

        <div class="col-xl-8">
            <!-- Détails du compte card-->
            <div class="card mb-4">
                <div class="card-header" style="background: #5C7AEA; color:#fff; ">Détails du compte</div>
                <div class="card-body">
                    <form method="POST">
                        <!-- nom)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Nom d'utilisateur (comment votre nom apparaîtra aux autres utilisateurs du site)</label>
                            <input class="form-control" id="inputUsername" type="text" name="niknam" placeholder="Enter your username" value="">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Prenom</label>
                                <input class="form-control" id="inputFirstName" name="prenom" type="text" placeholder="Entrez votre prénom" value="">
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Nom</label>
                                <input class="form-control" id="inputLastName" type="nom" name="inputLastName" placeholder="Entrez votre nom de famille" value="">
                            </div>
                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Age</label>
                                <input class="form-control" id="inputOrgName" type="number" name="age" placeholder="Entrez votre Age" value="">
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Email</label>
                                <input class="form-control" id="inputLocation" type="email" name="email" placeholder="Entrez votre Email" value="">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="">Numéro de téléphone</label>
                            <input class="form-control" id="" type="tel" name="phonenumber" placeholder="Enter your Tele" value="">
                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <label class="small mb-1" for="">Numéro de passport</label>
                                <input class="form-control" id=" type=" name="passport" placeholder="Enter your"number" placeholder="Entrez voter numéro de PassPort" value="">
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="">date de naissanc</label>
                                <input class="form-control" id="" type="text" name="datenaissanc" placeholder="Entrez votre date de naissance" value="">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="">Mot de pass</label>
                                <input class="form-control" id="" type="password" name="password" placeholder="Entrez votre Mot de pass" value="">
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" name="submit" type="submit">Sauvegarder</button>
                            <a href="<?php echo BASE_URL;?>logout" class="btn btn-primary border-0" style="background: red; border:non; color:#fff; " type="submit">Se déconnecter</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <table class="table" style="
    background-color: white;">
        <div class="card-header" style="background: #5C7AEA; color:#fff; ">Les resrvations</div>

        <thead>
            <tr>
                <th scope="col">Nom Prenom</th>
                <th scope="col">Nombre de billettes</th>
                <th scope="col">date</th>
                <th scope="col">Total Prix</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            
           
            <form method="POST" action="ticket">
                <?php
                if (isset($_POST['NumberPassger'])) {
                    $billettes = intval($_POST['NumberPassger'] )+ 1;
                } else $billettes = 1;

                foreach ( $infos as $info):
                ?>
                <tr>
                    <th><?php echo $info['nom'].' '.$info['peron']; ?></th>
                    <td><?php echo $info['numberpassger']?></td>
                    <td><?php echo $info['date']?></td>
                    <td><?php echo $info['numberpassger']* $info['prix'];?></td>

                  
                    
                                            <script>
                        function myFunction() {
                        confirm("Press a button!");
                        if (confirm("Press a button!") == true) {
                                                }
                        }
                        </script>
                    <td class="d-flex flew-row"><button onclick=" myFunction() " type="submit" name="annuler" class="btn btn-outline-primary p-1 mr-1 my-1"><i class="bi bi-x-circle"></i> Annuler </button>
                        <button type="submit" name="imprime" class="btn btn-outline-primary p-1 mr-1 my-1"><i class="bi bi-filetype-pdf"></i> Imprime</button>
                    </td>

                </tr>
                <?php endforeach; ?>
                <input type="hidden" name="idVol" value="<?php  echo $reservation->idVol; ?>">
            </form>
        </tbody>
    </table>
    </form>
</div>