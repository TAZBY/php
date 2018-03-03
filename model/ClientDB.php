<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    class ClientDB extends Model{
		
		//La base de données samane_test est dans view/test
		//Pour tester importer la 
        public function __construct(){
            parent::__construct();
        }

        function getClientRef($id)
        {
            $sql = "SELECT *
                     FROM client
                     WHERE id = $id";
            
			return $this->db->query($sql)->fetchAll();
        }
		
		function addClient($nom, $prenom,$adresse,$telephone,$idvillage){
			$sql = "INSERT INTO client VALUES(null, '$nom', '$prenom','$adresse','$telephone','$idvillage')";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		function deleteClient($id){
			$sql = "DELETE FROM client WHERE id = $id";

			return $this->db->exec($sql);
		}
		
		function updateClient($id,$nom, $prenom,$adresse,$telephone,$idvillage){
			$sql = "UPDATE client SET nom_client = '$nom',prenom_client='$prenom',
                    adresse='$adresse',num_telephone='$telephone',idvillage='$idvillage'
                    WHERE id = $id";

			return $this->db->exec($sql);
		}
		
		function listeClient(){
			$sql = "SELECT id,nom_client,prenom_client,adresse,num_telephone,nom_village,CONCAT(nom_chefVillage,' ',prenom_chefvillage) as np
			       FROM client,village
			       WHERE client.idvillage=village.id_village";
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
        function liste_village(){
            $sql = "SELECT id_village,nom_village
                   FROM village";
            if($this->db != null)
                return $this->db->query($sql)->fetchAll();
            else
                return null;
        }
	}