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
    class Test extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/TestDB.php';
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
            $tdb = new TestDB();
			
            $data['tests'] = $tdb->listeTest();
			
            return $this->view->load("test/get_liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $tdb = new TestDB();
			//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                if(!empty($valeur1) && !empty($valeur2)) {
                    $ok = $tdb->addTest($valeur1, $valeur2);
                    $data['ok'] = $ok;
                }
            }
            
            return $this->view->load("test/add", $data);
        }
		public function update(){
			//Instanciation du model
            $tdb = new TestDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($idTest) && !empty($valeur1) && !empty($valeur2)) {
                    $ok = $tdb->updateTest($idTest, $valeur1, $valeur2);
                }
            }
            $data['tests'] = $tdb->listeTest();
            return $this->view->load("test/get_liste", $data);
        }
        
    }
?>