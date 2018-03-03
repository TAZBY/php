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
    class Client extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/ClientDB.php';
        }

		//A noter que toutes les views doivent être créées dans le dossier view/test
        //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("test/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("test/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $tdb = new TestDB();

            $data['test'] = $tdb->getTestRef($id);
            return $this->view->load("test/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $tdb = new ClientDB();
            $data['village'] = $tdb->liste_village();
            $data['tests'] = $tdb->listeClient();
            return $this->view->load("client/client",$data);


        }
        public function edit(){
            //Instanciation du model
            $tdb = new ClientDB();

                $data['modif']=$tdb->getClientRef($_GET['id']);
                $data['village'] = $tdb->liste_village();
                return $this->view->load("client/edit",$data);

        }
        public function delete(){
            //Instanciation du model
            $tdb = new ClientDB();

            $okkk=$tdb->deleteClient($_GET['id']);
            $data['okkk'] = $okkk;
            $data['tests'] = $tdb->listeClient();

            return $this->view->load("client/client",$data);

        }


        public function add(){
			//Instanciation du model
            $tdb = new ClientDB();
			//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                if(!empty($nc) && !empty($pc) &&  !empty($adresse) &&  !empty($tel) &&  !empty($idvillage) ) {
                    $ok = $tdb->addClient($nc,$pc,$adresse,$tel,$idvillage);
                    $data['ok'] = $ok;
                }
            }
            $data['tests'] = $tdb->listeClient();
            $data['village'] = $tdb->liste_village();
            return $this->view->load("client/client", $data);
        }
		public function update(){
			//Instanciation du model
            $tdb = new ClientDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($nc) && !empty($pc) &&  !empty($adresse) &&  !empty($tel) &&  !empty($idvillage) ) {
                    $okk = $tdb->updateClient($id,$nc,$pc,$adresse,$tel,$idvillage);
                    $data['okk'] = $okk;
                }
            }
            $data['tests'] = $tdb->listeClient();
            return $this->view->load("client/client",$data);
        }
        
    }
?>