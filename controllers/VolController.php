<?php
//   require_once './models/vol.php' ;
// require_once './app/classes/Redirect.php';
class VolController
{
   
    

  
    public function getAllVols(){
            $vols = Vol::getAll();
            // die(print_r($vols));
            return $vols;
    }

    public function AddOneVol (){
		if(isset($_POST['submit']))
		
		{
			$data = array(
				'airlines' => $_POST['airlines'],
				'numvol' => $_POST['numvol'],
				'depart' => $_POST['depart'],
				'destination' => $_POST['destination'],
				'HeurDepart' => $_POST['HeurDepart'],
				'HeurDarrivée' => $_POST['HeurDarrivée'],
				'numberPlac' => $_POST['numberPlac'],
                 'prix' => $_POST['prix'],
				'class' => $_POST['statut'],
			);
			$result = vol::addvol($data);
			
                    if($result === 'ok'){
                        echo'yes';
    
                    }else{
                        echo $result;
                    }
		}
	}
	public function deletVol($idVol)
	{
	
			$vol = vol::delete($idVol);
			if ($vol ==='ok'){
				Session::set('success','vol supprimé');
				Redirect::to('dashboard');
				
			}
	}
	public function getOneVol()
	{
		if(isset($_POST['idVol'])){
			$data = array(
				'idVol' => $_POST['idVol'],
			);
			
			$vol = vol::getVol($data);
			return $vol;
		}
	}
	public function updateVol()
	{
		// if(isset($_POST['submit']))
		// {
		// 	$data = array(
		// 		'idVol' => $_POST['idVol'],
		// 		'airlines' => $_POST['airlines'],
		// 		'numvol' => $_POST['numvol'],
		// 		'depart' => $_POST['depart'],
		// 		'destination' => $_POST['destination'],
		// 		'HeurDepart' => $_POST['HeurDepart'],
		// 		'HeurDarrivée' => $_POST['HeurDarrivée'],
		// 		'numberPlac' => $_POST['numberPlac'],
        //         'prix' => $_POST['prix'],
		// 		'class' => $_POST['statut'],
		// 	);
		// 	$idVol=$_POST['id'];
		// 	die(print_r($data));
		// 	$result = vol::update($data,$idVol);
            
		// }
	}
   


}