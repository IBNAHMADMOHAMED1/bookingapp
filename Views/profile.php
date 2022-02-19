<?php

include './views/include/header.php';

?>




<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
   
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Image de profil card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header"style="background: #5C7AEA; color:#fff; ">Image de profil</div>
                <div class="card-body text-center">
                    
                    <img class="img-account-profile rounded-circle mb-2" src="./image/clinet1.png" alt="">
                    
                    <div class="small font-italic text-muted mb-4">JPG 1G</div>
                  
                    <button class="btn btn-primary" type="button">Nouvelle image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
         <!-- Détails du compte card-->
            <div class="card mb-4">
                <div class="card-header" style="background: #5C7AEA; color:#fff; ">Détails du compte</div>
                <div class="card-body">
                    <form>
                        <!-- nom)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Nom d'utilisateur (comment votre nom apparaîtra aux autres utilisateurs du site)</label>
                            <input class="form-control" id="inputUsername" type="text" name="niknam"placeholder="Enter your username" value="">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Prenom</label>
                                <input class="form-control" id="inputFirstName"name="prenom" type="text" placeholder="Entrez votre prénom" value="">
                            </div>
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Nom</label>
                                <input class="form-control" id="inputLastName" type="nom" placeholder="Entrez votre nom de famille" value="">
                            </div>
                        </div>
                       
                        <div class="row gx-3 mb-3">
                          
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Age</label>
                                <input class="form-control" id="inputOrgName" type="number" name="age" placeholder="Entrez votre Age" value="">
                            </div>
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Date de naissanc</label>
                                <input class="form-control" id="inputLocation" type="email" name="email" placeholder="Entrez votre Email" value="">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="small mb-1" for="">Numéro de téléphone</label>
                            <input class="form-control" id="" type="tel"name="phonenumber" placeholder="Enter your Tele" value="">
                        </div>
                        
                        <div class="row gx-3 mb-3">
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="">Numéro de passport</label>
                                <input class="form-control" id=" type="number" placeholder="Entrez voter numéro de PassPort" value="">
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
  <button class="btn btn-primary" type="button">Sauvegarder</button>
  <button class="btn btn-primary border-0"style="background: red; border:non; color:#fff; " type="button">Se déconnecter</button>
</div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>