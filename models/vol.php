<?php 
//   require_once '../database/BD.php' ;

class Vol
{

    static public function getAll()
    {
        $stmt=DB::Connect()->prepare('SELECT * FROM vols where numberPlac >0');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        // $stmt=null;
    }





    static public function addvol($data)
    {
        // $dateDr=date("y-m-d h:i:s", strtotime($data['HeurDarrivée']));
        // $date=date("y-m-d h:i:s", strtotime($data['HeurDepart']));   
       
        // $sql =  "INSERT INTO vols(airlines, numvol, depart, destination, HeurDepart, HeurDarrivée, numberPlac, prix, class)
        // VALUES ( '', '$data[numvol]', '$data[depart]', '$data['HeurDepart']','$data['HeurDarrivée']','$data[numberPlac]', '$data[prix]', '$data[class]')";
        
        $date=date("y-m-d h:i:s", strtotime($data['HeurDarrivée']));

        $stmt = DB::connect()->prepare("INSERT INTO vols(airlines, numvol, depart, destination, HeurDepart, HeurDarrivée, numberPlac, prix, class) 
        VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$data['airlines']);
        $stmt->bindParam(2,$data['numvol']);
        $stmt->bindParam(3,$data['depart']);
        $stmt->bindParam(4,$data['destination']);
        $stmt->bindParam(5,$data['HeurDepart']);
        $stmt->bindParam(6,$date);
        $stmt->bindParam(7,$data['numberPlac']);
        $stmt->bindParam(8,$data['prix']);
        $stmt->bindParam(9,$data['class']);
        
        
        if($stmt->execute())
        {
			return 'ok';
		}
        
        else{
			return 'error';
		}
        
        // $stmt = null;
    }

    static public function delete($idVol)
    {
        // echo $idVol;
        $sql="DELETE FROM vols WHERE idVol=$idVol";
        $stmt=DB::Connect()->prepare($sql);
        // $stmt->execute();
        // $stmt->execute(array(":idVol" => $idVol));
     
       if($stmt->execute()){
          return 'ok';
        }
       else{
           return  'Error';
       } 
    //    $stmt = null;
     }

     static public function getVol($data)
     {
            $id=$data['idVol'];
			$query = "SELECT * FROM vols WHERE idVol=?";
            
			$stmt = DB::connect()->prepare('SELECT * FROM vols WHERE idVol=?');
            $stmt->bindParam(1,$data['idVol']);
			$stmt->execute();
			$vol = $stmt->fetch(PDO::FETCH_OBJ);

            
			return $vol;
        // die(print_r($vol));
	}

    static public function update($data)
    {
        
       
        // $date=date("y-m-d h:i:s", strtotime($data['HeurDarrivée']));
        $date=date("y-m-d h:i:s", strtotime($data['HeurDarrivée']));
        $stmt = DB::connect()->prepare
                ('UPDATE vols SET 
                            airlines=?,
                            numvol=?,
                            depart=?,
                            destination=?,
                            HeurDepart=?,
                            HeurDarrivée=?,
                            numberPlac=?,
                            prix=?,
                            class=? WHERE idVol=?'
                );
            // $stmt->bindParam(1,$data['idVol']);
            // $stmt->bindParam(2,$data['airlines']);
            // $stmt->bindParam(3,$data['numvol']);
            // $stmt->bindParam(4,$data[' ']);
            // $stmt->bindParam(5,$data['destination']);
            // $stmt->bindParam(6,$data['HeurDepart']);
            // $stmt->bindParam(7,$date);
            // $stmt->bindParam(8,$data['numberPlac']);
            // $stmt->bindParam(9,$data['prix']);
            // $stmt->bindParam(10,$data['class']);
            $params = array($data['airlines'],$data['numvol'],$data['depart'],$data['destination'],$data['HeurDepart'],$data['HeurDarrivée'],$data['numberPlac'],$data['prix'],$data['class'],$data['idVol']);

            $stmt->execute($params);
        


     }

     static function searchVol($data)
     {
        $find = $data['find'];
        var_dump($find);    

		try{
			$query = "SELECT * FROM vols WHERE airlines = ? ";
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array($find));
			$vols = $stmt->fetchAll();
        
			return $vols;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

    static function search($data)
    {
        $depart=$data['depar'];
        $arriv=$data['arrive'];
        $day=$data['day'];
        $month=$data['month'];
        // $date=$month.'-'.$day;
        // die(var_dump($date));
		try{
			$query = "SELECT * FROM vols WHERE depart = ? and destination=? or  HeurDepart=? ";
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array( $depart,$arriv, $month));
			$vols = $stmt->fetchAll();
            if (empty( $vols ))
            {
                redirect::to('eror');
            }
            else return $vols;
        
			
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}

    }
    static public function updateOn($numberPlac,$idVol,$max)

    {
        // die(var_export($numberPlac));
        $new =$max - intval($numberPlac)-1;
        $sql="UPDATE vols  SET numberPlac=$new  where idVol=$idVol";

        $stmt = DB::connect()->prepare($sql);
       if($stmt->execute()){
        //    die(var_dump('yes'));
        return 'ok';
       };

    }
     
            

}


?>