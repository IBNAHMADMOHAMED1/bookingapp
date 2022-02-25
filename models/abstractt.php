<?php

class abstractt {

    static public function insert($data)
    {
        $nomber=(intval($data['numberpassger'])+1);

        $sql = "INSERT INTO abstract(nom,peron,prix,numberpassger) VALUES (?,?,?,?)";
        $stmt=DB::connect()->prepare($sql);

        $value =array($data['nom0'],$data['prenom0'],$data['prix'],$nomber);
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

}
?>