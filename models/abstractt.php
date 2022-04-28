<?php

class abstractt {

    static public function insert($data,
    $user_id )
    {
        $nomber=(intval($data['numberpassger'])+1);
        // die(var_dump( $user_id ));

        $sql = "INSERT INTO abstract(nom,peron,prix,numberpassger,idclient) VALUES (?,?,?,?,?)";
        $stmt=DB::connect()->prepare($sql);

        $value =array($data['nom0'],$data['prenom0'],$data['prix'],$nomber,
        $user_id );
        if($stmt->execute($value)){
            return 'ok';
        };


    }
    static public function getall()
    {
        $stmt=DB::connect()->prepare('SELECT * FROM abstract');
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }
    static public function  annuler($idreservation){
        // die(var_dump($idreservation));

        $query =" DELETE FROM abstract WHERE id = $idreservation ";
        $stmt=DB::connect()->prepare($query);
        if ($stmt->execute()){
           return 'OK';
        }
    }

}
?>