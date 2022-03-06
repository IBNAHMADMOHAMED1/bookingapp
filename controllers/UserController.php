<?php


class UserController
{
    public function searchVol()
    {
        if(isset($_POST['reserve']))
        {
        $data = array('depar' =>$_POST['depar'], 'arrive'=>$_POST['arrive'],'day'=>$_POST['day'],'month'=>$_POST['month']);
		$Vols = vol::search($data);
		// die(print_r($Vols));
		return $Vols;
        }
       
    }
    public function register()
    {


        $data = array(
            'nom' => $_POST['nom'],
            'prenom'=>$_POST['prenom'],
            'age'=>$_POST['age'],
            'datenaissanc'=>$_POST['datenaissanc'],
            'phonenumber'=>$_POST['phonenumber'],
            'email'=>$_POST['email'],
            'passport'=>$_POST['passport'],
            'password'=>$_POST['password']
        );
        $result = passager::CreatAccount($data);
    }
    public function auth()
    {
        $user_email = $_POST['email'];
        $password = $_POST['password'];
        $user = passager::login($user_email);

        if (!empty($user)) {
            if ($user->email == $user_email && $user->password == $password) {
                    $_SESSION['user_logged'] = true;
                    $_SESSION['idClinet'] = $user->idClinet;
                    $_SESSION['email'] = $user->email;
                    $_SESSION['nom'] = $user->nom;
                    $_SESSION['prenom'] = $user->prenom;
                    $_SESSION['datenaissanc'] = $user->datenaissanc;
                    $_SESSION['passport'] = $user->passport;
                    $_SESSION['phonenumber'] = $user->phonenumber;
                    $_SESSION['password'] = $user->password;
                    if ($user->email=='admin@admin'){
                        $_SESSION['admin'] = 'admin';
                    }

                    Redirect::to('home');
            } else {
                    Redirect::to('login');
            }
        }
    }
    public function getOneUser($user_id) {

      
		
			$user = passager::getUser($user_id);
			// extract($vol);
			// die(print_r($vol));
			return $user;

    }
    public function updateProfile($user_id)
    {
        $data= array(
            'nom' =>$_POST['inputLastName'],
            'prenom'=>$_POST['prenom'],
            'datenaissanc'=>$_POST['datenaissanc'],
            'age'=>$_POST['age'],
            'phonenumber'=> $_POST['phonenumber'],
            'passport'=>$_POST['passport'],
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],

        );
        // die(var_dump($data));
        $result = passager::update($data,$user_id);
    }	
    
}
?>