<?php 

class passager
{
    static function CreatAccount($data) {

        $query="INSERT INTO passager(nom,prenom,age,datenaissanc,phonenumber,email,passport,password) 
        VALUES(?, ?, ?,?,?,?,?,?) ";
        $stmt=DB::Connect()->prepare($query);
        $params =array($data['nom'],$data['prenom'],$data['age'],$data['datenaissanc'],$data['phonenumber'],$data['email'],$data['passport'],$data['password']);
        $res=$stmt->execute($params);
        if (!empty($res)){
            
            echo " <script>alert('Success')</script>";
        }

    }
    static public function login($user_email)
    {
        $user_email = strtolower($user_email);
        $sql = "SELECT * from passager where email='$user_email'";
        $stmt = DB::connect()->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetch(pdo::FETCH_OBJ);
        return $user;
        $stmt = null;
    }
    static public function getUser($user_id)
    {
       
            $query = "SELECT * FROM passager   WHERE idClinet =$user_id";
            $stmt=DB::connect()->prepare($query);
            $stmt->execute();
            $user=$stmt->fetch(PDO::FETCH_OBJ);
            return $user;
    }
    static public function logout(){
		session_destroy();
	}

    static public function update($data,$user_id){
        // die(var_dump($data));
         $sql = "UPDATE passager  SET nom =? ,prenom=? ,age =? ,datenaissanc=? ,phonenumber=?,email=?,password=? where idClinet=$user_id "; 
         $stmt =DB::connect()->prepare($sql);
         
         $value=array($data['nom'],$data['prenom'],$data['age'],$data['datenaissanc'],$data['phonenumber'],$data['email'],$data['password']);
         $stmt->execute($value);
         
    }

}

?>