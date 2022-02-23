<?php
// require_once './controllers/UserController.php';
if (isset($_POST['reserve'])) {
    $data = new UserController();
    $vols = $data->searchVol();
    // die(print_r($vols));

} else {
   $data = new VolController();
     $vols = $data->getAllVols();
//  die(print_r($volss));
 }



?>


<?php

include './views/include/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="./public/assets/resrv.css">

</head>

<body>






    <div class="body">

        <section class="home" id="home">

            <div class="image" data-aos="fade-down">
                <img src="./image/hom.svg" alt="">
            </div>

            <div class="content" data-aos="fade-up">
                <h3>Welcome to</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo eius inventore reprehenderit alias eos facilis, ipsa est asperiores repellendus!</p>
                <a href="" class="btn">explore</a>
            </div>

        </section>

        <section class="form-container" id="form-container" data-aos="zoom-in" required>

            <form action="" method="post" id="form">
                <div class="inputBox">
                    <span>Depar</span>
                    <input type="text" name="depar" placeholder="lieux de recherche" required>
                </div>

                <div class="inputBox">
                    <span>Où aller</span>
                    <input type="text" name="arrive" placeholder="lieux de recherche" required>
                </div>


                <div class="inputBox">
                    <span>Date De Depar</span>
                    <input type="date" name="month" required>
                </div>
                <!-- <div class="inputBox">
                    <span>Jour D'arrivée</span>
                    <input type="number" min="1"  max="30" name="day">
                </div> -->

                <input type="submit" name="reserve" value=" recherche" class="btn">

            </form>

        </section>


     

    <div class="container my-5">
    <div class="text-center mb-5">
      <!-- <span class="text-secondary text-uppercase">Pricing</span> -->
      <h1 class="text-capitalize font-weight-bold">Tarification <span class="headline">Des plans</span></h1>
    </div>
<?php foreach ($vols as $vol) : ?>
    <div class="my-5 py-4 px-5 bg-light d-sm-flex align-items-center justify-content-between">
      <div class="text-center">
        
        <h1 class="my-2 font-weight-bold">$<?= $vol['prix'] ?></h1>
        
      </div>
      <div class="text-center text-uppercase ">
        <p class="d-block">Airline : <?= $vol['airlines']; ?>  </p>
        <p class="d-block my-3">départ : <?= $vol['depart']; ?> </p>
        <p class="d-block my-3">Arriver: <?= $vol['destination'] ?> </p>
        
        
      </div>
      <div class="text-center text-uppercase">
        <p class="d-block">date départ : <?= $vol['HeurDepart'] ?></p>
        <p class="d-block my-6 " style="color:green;">date Arriver: <?=   $vol['HeurDarrivée']; ?> </p>
        <?php if($vol['numberPlac']==0) echo '<p class="d-block my-4"style="color:red;">ne pas fiable</p>';
            ?>
        
      </div>
      <form action="reserve" method="post">
     <div class="text-center">
      
        <button type="submit" name="idVol"value="<?php echo $vol['idVol'] ?>" class="btn text-white px-5 py-3 main-btn">Reserve</button>
        <!-- <a type="submit" name="sum"  href="<?php echo BASE_URL; ?>reserve" class="btn text-white px-5 py-3 main-btn">Reserve</a> -->
      </div>
      </form>
     
    </div>
    <?php endforeach; ?>

    

   
 
  

 

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>










    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        AOS.init({
            duration: 10000,
            delay: 200
        });
    </script>
</body>

</html>