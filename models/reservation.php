<?php 

class reservation{

    static public function getAllRese()
    {
        $stmt=DB::Connect()->prepare('SELECT * FROM reservation');
        $stmt->execute();
        return $stmt->fetchAll();
    }
    static public function addResrvations($params,$nomberBilet)
    {
        // die(var_dump($params));
        $i=0;
        foreach ($params as $param ) :
                // die(var_dump($j));
                // die(var_dump($params[$j]['prenom'.$i]));
                // die(var_dump($params[$j]['prenom'.$i]));
                $sql = "INSERT INTO user( nom, prenom,age,datenaissanc,phonenumber,email,passport)
                VALUES (?,?, ?,?,?,?,?)";

                $stmt = DB::connect()->prepare($sql);
                $valus=array($param['nom'.$i], $param['prenom'.$i], $param['age'.$i], $param['datenaissanc'.$i], $param['phonenumber'.$i], $param['email'.$i], $param['passport'.$i]);
                $stmt->execute($valus); 
                if($stmt->execute($valus))
                {
                    return 'ok';
                }
                // die(var_dump($valus));
                $i++;
        endforeach;

    }
    static public function effectuer($user,$vol)

    {
        // die(var_dump($vol->idVol));
        $sql="INSERT INTO `reservation`(  `idClient`, `idVol`) VALUES (?,?)";
        $stmt=DB::connect()->prepare($sql);
        $valus=array($user->idClinet,$vol->idVol);
        // $stmt->execute($valus);
        if($stmt->execute($valus)){
            // die(var_dump('yes'));
            return 'ok';

        }
        

    }
    static public function getone($idClinet)

    {
        // die(var_export($idClinet));
        $sql = "SELECT * FROM reservation WHERE idClient = $idClinet ORDER  BY idreservation DESC  LIMIT 1";
        $stmt = DB::connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
       return $result;

    }

    static public function insertMultiple($params,$datuser)
    {
        $i=1;
     
        // $datuser['nom0']=$params['nom'.$i];
        $valus=array($datuser['idVol'] ,$datuser['nom0'],$datuser['prenom0'], $datuser['age0'],$datuser['phonenumber0'],$datuser['email0'], $datuser['passport0'],$datuser['datenaissanc0'],$datuser['user_id']);
        $sql = "INSERT INTO ticket (idVol,nom, prenom, age, phonenumber, email, passport,datenaissanc,idClinet)
        VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = DB::connect()->prepare($sql);
        $stmt->execute($valus); 
        
  
        foreach ($params as $param ) :
            // die(var_dump( $params['idVol']));
                // die(var_dump($j));
                // die(var_dump($params['prenom'.$i]));
                // die(var_dump($param['prenom'.$i]));

                $sql = "INSERT INTO ticket (idVol,nom, prenom, age, phonenumber, email, passport,datenaissanc,idClinet)
                VALUES (?,?,?,?,?,?,?,?,?)";
                $stmt = DB::connect()->prepare($sql);
                // var_dump($param['nom'.$i]);
                $valus=array($datuser['idVol'] ,$param['nom'.$i],$param['prenom'.$i], $param['age'.$i],$param['phonenumber'.$i], $param['email'.$i], $param['passport'.$i],$param['datenaissanc'.$i],$datuser['user_id']);
                // echo "---------";
                // die(var_dump($valus));
                $stmt->execute($valus); 
                if($stmt->execute($valus))
                {
                   return 'ok';
                }
                if(!($stmt->execute($valus)))
                {
                   echo  'ok';
                }
                //
                // die(var_dump($valus));
                $i++;
        endforeach;
    }
}

?>