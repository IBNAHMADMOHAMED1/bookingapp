<?php 

class abstractController{

   public function insert($nomberBilet)
   {
       $datuser=array(
        'user_id' => $_POST['user_id'],
        'idVol' => $_POST['idVol'],
        'nom0' => $_POST['firstname'],
        'prenom0' => $_POST['lastname'],
        'age0' => $_POST['ageclient'],
        'passport0' => $_POST['passportClinet'],
        'email0' => $_POST['emailclinet'],
        'phonenumber0'=>$_POST['phonenumber'],
        'datenaissanc0'=>$_POST['datenaissanc0'],
        'prix' => $_POST['prix'],
        'numberpassger' => $_POST['NumberPassger'],
       );
    //    die(var_dump($datuser));
       $params = array();
        for ($i = 1; $i <$nomberBilet ; $i++) {
           $data= array(
                    'nom'.$i => $_POST['nom'.$i],
                    'prenom'.$i => $_POST['prenom'.$i],
                    'age'.$i => $_POST['age'.$i],
                    'email'.$i => $_POST['email'.$i],
                    'phonenumber'.$i => $_POST['phonenumber'.$i],
                    'passport'.$i => $_POST['passport'.$i],
                    'datenaissanc'.$i => $_POST['datenaissanc'.$i]

           ); 
           $params[$i]=$data;
        }
        // $params=$datuser;
        // array_push($params,$datuser);
        // die(var_dump($params));
       $res=abstractt::insert($datuser);
       $results =reservation::insertMultiple($params,$datuser);
       if($results === 'ok' && $res === 'ok')
       {
           echo '<script>alert(nice)</script>';
       }

   }
   public function getall()
   {
       $res=abstractt::getall();
    return $res;
   }

}


?>