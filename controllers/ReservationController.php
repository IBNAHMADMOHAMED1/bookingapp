

<?php 


class ReservationController
{
    public function getAllReservations()
    {
        $reservation = reservation::getAllRese();
        return $reservation;
    }
    public function effectuerReservation($nomberBilet)
    {
        // die(var_dump($nomberBilet));
        $params = array();
        for ($i = 0; $i <$nomberBilet ; $i++) {
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
        // die(var_dump($params));
         $res=reservation::addResrvations($params,$nomberBilet);
         if($res === 'ok'){
             Redirect::to('profile');
         }

    }
}

?>