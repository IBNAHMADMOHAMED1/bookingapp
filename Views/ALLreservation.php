<?php 
// require_once './controllers/ReservationController.php';

    $data = new ReservationController();
    $vols = $data->getAllReservations();
    // die(print_r($vols));

?>




<?php

include './views/include/aside.php';

?>
<div class="container-sm ">
    <div class="row my-4 ">
        <div class="col-md-30 mx-auto">
      
            <div class="card " style="margin-top:80px;">
            
                <div class="card-body bg-lghit " style="background: #F6F8FF; ">
                <!-- <?php echo '<div class="alert alert-success">Tous Les Resrvations</div>'?>; -->
                    <div class="table-responsive-lg ">
                        <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex">
                                <div class="toast-body">

                                </div>
                                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>


                        
                        <a href="<?php echo BASE_URL; ?>admin" class="btn btn-outline-primary p-2 mr-2 my-2">
                            <i class="fas fa-home"></i>   dashboard</a>
                            <a href="<?php echo BASE_URL; ?>admin" class="btn btn-outline-primary p-2 mr-2 my-2">
                            <i class="bi bi-eye-slash"></i> réservation</a>
                        <form method="post" action="" style=" width: 100%;" class=" w-full float-right mb-2 d-flex flex-row">
                            <input type="text" name="search" placeholder="search" class="form-control">
                            <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <table class="table table-hover small">
                            <thead style="background: #5C7AEA; color:#fff;">
                                <tr>
                                    <th scope="col ">Id Vol</th>
                                    <th scope="col">Airlines</th>
                                    <th scope="col">Date Reservation</th>
                                    <th scope="col">Depart</th>
                                    <th scope="col">Heur Depart</th>
                                    <th scope="col">Heur Darrivée</th>
                                    <th scope="col">PassPort Passager</th>
                                    <th scope="col">Prix</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($vols as $vol) : ?>
                                    <tr>
                                        <th scope="row"> <?= $vol['idVol']; ?></th>
                                        <td><?= $vol['airlines']; ?></td>
                                        <!-- <td><?= $vol['numvol']; ?></td> -->
                                        <td><?= $vol['depart']; ?></td>
                                        <td><?= $vol['destination'] ?></td>
                                        <td><?= $vol['HeurDepart'] ?></td>
                                        <td><?= $vol['HeurDarrivée'] ?></td>
                                        <td><?= $vol['numberPlac'] ?></td>
                                        <td><?= $vol['prix'] ?></td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>