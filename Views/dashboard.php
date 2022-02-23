<?php
// include_once './controllers/AdminController.php';
// $data=new EmployesController();
// $vols=$data->getAllEmployes();
// print_r($vols); 


if (isset($_POST['find'])) {
    $data = new VolController();
    $vols = $data->search($_POST['search']);
} else {
    $data = new VolController();
    $vols = $data->getAllVols();
    // die(print_r($volss));
}

include './views/include/aside.php';

?>
<div class="container-sm ">
    <div class="row my-4 ">
        <div class="col-md-30 mx-auto">
            <?php include('./views/include/alerts.php'); ?>
            <div class="card " style="margin-top:80px;">
                <div class="card-body bg-lghit " style="background: #F6F8FF; ">
                    <div class="table-responsive-lg ">
                        <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex">
                                <div class="toast-body">

                                </div>
                                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>


                        <a href="<?php echo BASE_URL; ?>ajouterVol" class="btn btn-outline-primary p-2 mr-2 my-2"><i class="bi bi-plus-circle"></i> Nouvelle </a>
                        <!-- <i class="fas fa-plus"></i></a> -->
                        <a href="<?php echo BASE_URL; ?>admin" class="btn btn-outline-primary p-2 mr-2 my-2">
                            <i class="fas fa-home"></i>   dashboard</a>
                            <a href="<?php echo BASE_URL; ?>ALLreservation" class="btn btn-outline-primary p-2 mr-2 my-2">
                            <i class="bi bi-eye"></i>  réservation</a>
                        <form method="post" action="" style=" width: 100%;" class=" w-full float-right mb-2 d-flex flex-row">
                            <input type="text" name="search" placeholder="search" class="form-control">
                            <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <table class="table table-hover small">
                            <thead style="background: #5C7AEA; color:#fff;">
                                <tr>
                                    <th scope="col ">idVol</th>
                                    <th scope="col">airlines</th>
                                    <!-- <th scope="col">numvol</th> -->
                                    <th scope="col">depart</th>
                                    <th scope="col">destination</th>
                                    <th scope="col">HeurDepart</th>
                                    <th scope="col">HeurDarrivée</th>
                                    <th scope="col">numberPlac</th>
                                    <th scope="col">prix</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
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

                                        <td>
                                            <?php echo $vol['class']
                                                ?
                                                '<a href="" class="btn btn-outline-success p-1 mr-1 my-1"><i class="bi bi-arrow-repeat"></i></i>    one way ' :
                                                ' <a href="" class="btn btn-outline-primary p-1 mr-1 my-1"><i class="bi bi-arrow-repeat"></i></i>    round trip 
                                                    <!-- <i class="fas fa-plus"></i></a> -->';
                                            ?>
                                        </td>

                                        <td class="d-flex flew-row">
                                            <form action="UpdateVol" method="POST" class="mr-1">
                                                <input type="hidden" name="idVol" value="<?php echo $vol['idVol'] ?>">
                                                <button class="btn btn-sm btn btn-warning"><i class="fa fa-edit"></i></button>
                                            </form>

                                            <form action="supprimerVol" method="POST" class="mr-1">
                                                <input type="hidden" name="idVol" value="<?php echo $vol['idVol'] ?>">
                                                <!-- <button class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i></button> -->
                                                <button class="btn btn-sm btn" style="background-color: red;color:#fff;"><i class="bi bi-recycle"></i></button>
                                            </form>
                                        </td>
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