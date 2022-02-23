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
}

?>