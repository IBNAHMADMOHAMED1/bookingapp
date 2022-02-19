<?php 

	if(isset($_POST['submit'])){
		$newEmploye = new VolController();
		$newEmploye->AddOneVol();
	}


?>



<?php 

include './views/include/aside.php';

?>
<div class="container  " id="container" style="margin-top:90px;">

	<div class="row my-4">
		<div class="col-md-8 mx-auto">
		<?php include('./views/include/alerts.php'); ?>
			<div class="card " >
				<div class="card-header "style="background-color: #5C7AEA;"><p style="color: #fff;">Ajouter un Vol</p></div>
				<div class="card-body "style="background-color: #F6F8FF;">
					<a href="<?php echo BASE_URL;?>admin" class="btn btn-outline-primary p-2 px-3 mr-2 my-2">
						<i class="fas fa-home"></i>      Home </a>
					<form method="post">
						<div class="form-group order border-primary">
							<label for="nom">airlines*</label>
							<input type="text" name="airlines" class="form-control border border-primary" placeholder="airlines">
						</div>
						<div class="form-group">
							<label for="prenom">numéro de vol*</label>
							<input type="number" name="numvol" class="form-control border border-primary" placeholder="numvol">
						</div>
						<div class="form-group">
							<label for="countries">depart*</label>
							<input type="country" name="depart" class="form-control border border-primary" placeholder="depart">
							<!-- <select id="countries" name="countries"></select> -->
						</div>
						<div class="form-group">
							<label for="depart">destination*</label>
							<input type="text" name="destination" class="form-control border border-primary" placeholder="destination">
						</div>
						<div class="form-group">
							<label for="poste">HeurDepart*</label>
							<input type="datetime-local" name="HeurDepart" class="form-control  border border-primary" placeholder="HeurDepart">
						</div>
						<div class="form-group">
							<label for="heurda">HeurDarrivée*</label>
							<input type="datetime-local" name="HeurDarrivée" class="form-control border border-primary">
						</div>
                        <div class="form-group">
							<label for="numberplac">Number Plac*</label>
							<input type="number" name="numberPlac" class="form-control border border-primary">
						</div>
                        <div class="form-group">
							<label for="prix">prix*</label>
							<input type="number" name="prix" class="form-control border border-primary" placeholder="prix">
						</div>
						<div class="form-group  ">
							<select class="form-control border border-primary custom-select py-0" onchange="btn()" id="inputGroupSelect01"name="statut">
                                <!-- <option  disabled>----choisez---</option> -->
								<option value="1">aller retour</option>
								<option value="0">Aller</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="./public/js/script.js"></script>
</body>
</html>
