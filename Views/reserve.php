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
}
if (isset($_POST['ajt'])) {
    $nomberBilet = $_POST['NumberPassger'];
    // var_dump($_POST['email0']);
    $exitres = new ReservationController();
    $res = $exitres->effectuerReservation($nomberBilet);
}
// die(var_dump($_POST['NumberPassger']));
?>
<?php

include './views/include/header.php';
?>

<body>

    <div class="container">
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
                <div class="row">

                    <div class="col-md-12">
                        <div class="">
<!-- <input type="text" name="palce" value="<?php if (isset($_POST['NumberPassger'])){ $billette= $_POST['NumberPassger']+1;} echo $billette;  ?>"> --> -->
                            <label class="">Ajouter auter passager :</label>
                            
                            <?php 
                            $max=$k=$vol->numberPlac-1;
                            if($vol->numberPlac<2){
                                echo ' <p style="color:red;">Il nest pas possible dajouter une autre personne, le nombre de passagers disponibles :'.$vol->numberPlac.'</p>';
                            
                                
                            }else{
                                echo '<p style="color:green;">le nombre de passagers disponibles :'.$vol->numberPlac.'</p>'; 
                            }?>
                           
                            <input type="number" id="NumberPassger" min="0" max="<?php echo $max; ?>" name="NumberPassger" class="form-control" placeholder="1 passager"></input>
                            <!-- <?php if ( $user->num_place <1) echo ' <p style="color:red;"> nomber des*</p>' ?> -->
                            
                        </div>

                        <div class="text-center">
                            <button onclick="showtike()" type="button" class="btn btn-success" id="continueBooking">Ajouter</button>
                             <button type="submit" class="btn btn-outline-success" id="continueBooking">continue</button>
                        </div>
                        
                        <div class="text-center">
                           
                        </div>
                    </div>
                </div>

            </form>
        </div>



        <div class="row d-flex justify-content-center tiket ">
            <div class="col-xl-8">
                <!-- Détails du compte card-->
                <div class="card mb-4" id="contaier">
                    <div class="card-header" style="background: #5C7AEA; color:#fff; ">Détails du compte</div>
                    <div class="card-body">
                        <form method="POST" action="" >
                            <div id="input">
                            </div>
                            <!-- Form Row-->
                            <div class="info" id="parent">

                            </div>

                    </div>
                    <div class="d-grid gap-2">
                        <input type="hidden" name="" value="<script> </script>">
                        <button name="ajt" class="btn btn-primary" type="submit">Ajouter</button>
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>
    <style>
        hr {
            border-top: 2px solid #5C7AEA;
        }

        #contaier {
            display: none;
        }

        .nextButton {
            margin-top: 20px;
        }

        .form-inline {
            margin-top: 50px;
        }

        .form-group {
            margin-left: 260px;
        }

        .table-responsive {
            margin-top: 50px;
        }

        #title {
            font-size: 20px;
            margin-top: 50px;
        }

        .bookingTicket,
        .booked_list,
        .ticketBox {
            background: #ffffff;
            box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.1);
            width: 100%;
            padding: 40px;
            margin: 2em;
            border-radius: 10px;
            display: inline-block;
        }

        #screen {
            width: 200px;
            border: 1px solid #f1f1f1;
            border-radius: 3px;
            box-shadow: 1px 3px 6px 0px #f9f9f9;
            text-align: center;
            margin: 0 auto;
            background-color: #fefeff;
        }

        #table-screen {
            border-collapse: separate;
        }

        #displayscreenTickets {
            margin-top: 10px;
        }

        #table-screen td,
        th,
        tr {
            padding: 8px 0px;
            text-align: center;
        }

        .bookingTicket p {
            width: 100% !important;
        }

        .bookingTicket .form-group {
            margin-left: 0px;
        }

        .screen-map {
            margin-top: 10px;
            margin-bottom: 30px;
            text-align: center;
        }

        .screen-map img {
            margin-right: 15px;
        }

        .reserved-seat {
            margin-left: 4px;
            width: 25px;
        }

        .empty-seat {
            cursor: pointer;
            width: 25px;
        }

        .booked-seat {
            cursor: pointer;
            content: url('../img/selected.png');
            width: 25px;
        }

        .booked {
            /* background-color: black; */
            display: none;
        }
    </style>
</body>

<script type="text/javascript" src="./public/js/core.js"></script>

</html>


<!-- <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form action="reservation-back.php" method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Nom</span>
											<input class="form-control" name="nom" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Prenom</span>
											<input class="form-control" name="prenom" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Age</span>
											<input class="form-control" name="age" type="number" required>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Pays </span>
											<input class="form-control" name="pays" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Adresse </span>
											<input class="form-control" name="adresse" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Numéro de telephone </span>
											<input class="form-control" name="tele" type="number">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Email </span>
											<input class="form-control" name="email" type="email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Numéro de passeport </span>
											<input class="form-control" name="passeport" type="number">
										</div>
									</div>
									<input type="hidden" id="custId" name="id" value="<?= $id; ?>">
								</div>
								<div class="form-btn">

									<button type="submit" name="add" class="submit-btn">
									Réservation complète
									  <a style="color: #fff;;text-decoration: none;" name="add" class="abtn" href="confirmation.php?pid=<?= $row['id']; ?>">Réservation complète</a> -->









<!-- Optional JavaScript --
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>