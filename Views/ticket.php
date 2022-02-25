<?php 

if (!(isset($_SESSION['user_logged']) && $_SESSION['user_logged'] == true )) {
    Redirect::to('login');
}
$user_id=$_SESSION['idClinet'];
$exitUser = new UserController();
$user =$exitUser->getOneUser($user_id);


if (isset($_POST['idVol'])) {
        // die(var_dump($_POST['idVol']));
    
        $exitVol = new VolController();
        $vol = $exitVol->getOneVol();
        // die(var_dump($vol));
    }
	
	$idClinet=$user->idClinet;
	$exitresults=new ReservationController();
	$res=$exitresults->getonRes($idClinet);
	// die(var_dump($res));

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="wrapper">
	<div class="invoice_wrapper">
		<div class="header">
			<div class="logo_invoice_wrap">
				<div class="logo_sec">
					<img src="./image/Logo.png" alt="code logo">
					
				</div>
				<div class="invoice_sec">
					
					<p class="invoice_no">
						<span class="bold">Numéro</span>
						<span>#<?php echo $res->idreservation; ?></span>
					</p>
					<p class="date">
						<span class="bold">Date</span>
						<?php
						$day=date("d" ,strtotime($res->datereservation));
						$month=date("F" ,strtotime($res->datereservation));
						$yaer=date("Y" ,strtotime($res->datereservation));
						
						
						?>
						<span><?= $day; ?></span>/<?= $month;?>/<?= $yaer; ?></span></>
					</p>
				</div>
			</div>
			<div class="bill_total_wrap">
				<div class="bill_sec">
					<p>Facturer</p> 
	          		<p class=" name"><?php echo $user->prenom.' '. $user->nom;?></p>
			        <span>
			          <?php echo $user->email;?><br/>
			          
			        </span>
				</div>
				<div class="total_wrap">
					<p>Airline :</p>
	          		<p class="bold price"><?php if(!(isset($_POST['idVol']))) echo $vol->airlines;?></p>
				</div>
			</div>
		</div>
		<div class="body">
			<div class="main_table">
				<div class="table_header">
					<div class="row">
						<div class="col col_no">N.</div>
						<div class="col col_des">Nom </div>
						<div class="col col_price">Prenom</div>
						<div class="col col_qty">PassPort</div>
						<div class="col col_total">Prix</div>
					</div>
				</div>
				<div class="table_body">
					<div class="row">
						<div class="col col_no">
							<p>01</p>
						</div>
						<div class="col col_des">
							<p class="bold"><?php echo $user->nom; ?></p>
							<!-- <p>Lorem ipsum dolor sit.</p> -->
						</div>
						<div class="col col_price">
							<p><?php echo $user->prenom; ?></p>
						</div>
						<div class="col col_qty">
							<p><?php echo $user->passport;?></p>
						</div>
						<div class="col col_total">
							<p><?php if(!(isset($_POST['idVol']))) echo $vol->prix;?></p>
						</div>
					</div>
					
				</div>
			</div>
			<div class="paymethod_grandtotal_wrap">
				<div class="paymethod_sec">
					<p class="bold">Payment Method</p>
					<p>Visa, master Card and We accept Cheque</p>
				</div>
				<div class="grandtotal_sec">
			        <p class="bold">
			            <span>TOTAL</span>
			            <span><?php if(!(isset($_POST['idVol']))) echo $vol->prix ;else echo '<p style=color:red> Vous navez pas encore réservé/p>';?></span>
			        </p>
			        <p>
			            <span>Tax  18%</span>
			        </p>
			        <p>
			            <span>Rabais 10%</span>
			            
			        </p>
			       	<p class="bold">
			            <span>Total</span>
			            <span>$7000.0</span>
			        </p>
				</div>
			</div>
		</div>
		<div class="footer">
			<p>Merci et meilleurs voeux</p>
			<div class="terms">
		        <p class="tc bold">Terms & Coditions</p>
		        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non praesentium doloribus. Quaerat vero iure itaque odio numquam, debitis illo quasi consequuntur velit, explicabo esse nesciunt error aliquid quis eius!</p>
		    </div>
		</div>
	</div>
</div>

<style>


@import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;400;900&display=swap');

:root {
  --primary: #8080ff;
  --secondary: #3d3d3d; 
  --white: #fff;
}

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Lato', sans-serif;
}

body{
	background: #CDD8FF;
	padding: 50px;
	color: var(--secondary);
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 14px;
}

.bold{
	font-weight: 900;
}

.light{
	font-weight: 100;
}

.wrapper{
	background: var(--white);
	padding: 30px;
}

.invoice_wrapper{
	border: 3px solid var(--primary);
	width: 850px;
	max-width: 100%;
}

.invoice_wrapper .header .logo_invoice_wrap,
.invoice_wrapper .header .bill_total_wrap{
	display: flex;
	justify-content: space-between;
	padding: 30px;
}

.invoice_wrapper .header .logo_sec{
	display: flex;
	align-items: center;
}

.invoice_wrapper .header .logo_sec .title_wrap{
	margin-left: 5px;
}

.invoice_wrapper .header .logo_sec .title_wrap .title{
	text-transform: uppercase;
	font-size: 18px;
	color: var(--primary);
}

.invoice_wrapper .header .logo_sec .title_wrap .sub_title{
	font-size: 12px;
}

.invoice_wrapper .header .invoice_sec,
.invoice_wrapper .header .bill_total_wrap .total_wrap{
	text-align: right;
}

.invoice_wrapper .header .invoice_sec .invoice{
	font-size: 28px;
	color: var(--primary);
}

.invoice_wrapper .header .invoice_sec .invoice_no,
.invoice_wrapper .header .invoice_sec .date{
	display: flex;
	width: 100%;
}

.invoice_wrapper .header .invoice_sec .invoice_no span:first-child,
.invoice_wrapper .header .invoice_sec .date span:first-child{
	width: 70px;
	text-align: left;
}

.invoice_wrapper .header .invoice_sec .invoice_no span:last-child,
.invoice_wrapper .header .invoice_sec .date span:last-child{
	width: calc(100% - 70px);
}

.invoice_wrapper .header .bill_total_wrap .total_wrap .price,
.invoice_wrapper .header .bill_total_wrap .bill_sec .name{
	color: var(--primary);
	font-size: 20px;
}

.invoice_wrapper .body .main_table .table_header{
	background: var(--primary);
}

.invoice_wrapper .body .main_table .table_header .row{
	color: var(--white);
	font-size: 18px;
	border-bottom: 0px;	
}

.invoice_wrapper .body .main_table .row{
	display: flex;
	border-bottom: 1px solid var(--secondary);
}

.invoice_wrapper .body .main_table .row .col{
	padding: 10px;
}
.invoice_wrapper .body .main_table .row .col_no{width: 5%;}
.invoice_wrapper .body .main_table .row .col_des{width: 20%;}
.invoice_wrapper .body .main_table .row .col_price{width: 20%; text-align: center;}
.invoice_wrapper .body .main_table .row .col_qty{width: 20%; text-align: center;}
.invoice_wrapper .body .main_table .row .col_total{width: 40%; text-align: right;}

.invoice_wrapper .body .paymethod_grandtotal_wrap{
	display: flex;
	justify-content: space-between;
	padding: 5px 0 30px;
	align-items: flex-end;
}

.invoice_wrapper .body .paymethod_grandtotal_wrap .paymethod_sec{
	padding-left: 30px;
}

.invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec{
	width: 30%;
}

.invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p{
	display: flex;
	width: 100%;
	padding-bottom: 5px;
}

.invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p span{
	padding: 0 10px;
}

.invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p span:first-child{
	width: 60%;
}

.invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p span:last-child{
	width: 40%;
	text-align: right;
}

.invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p:last-child span{
	background: var(--primary);
	padding: 10px;
	color: #fff;
}

.invoice_wrapper .footer{
	padding: 30px;
}

.invoice_wrapper .footer > p{
	color: var(--primary);
	text-decoration: underline;
	font-size: 18px;
	padding-bottom: 5px;
}

.invoice_wrapper .footer .terms .tc{
	font-size: 16px;
}
</style>
</body>
</html>