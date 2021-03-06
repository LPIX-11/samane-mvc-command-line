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

class Model{
        protected $db;
        public function __construct(){
            if(connexion_params()['etat'] == 'on')
                $this->db = $this->getConnexion();
        }

        private function getConnexion(){
            $dsn = "mysql:host=".connexion_params()['host'].";dbname=".connexion_params()['database_name'];
            $user = connexion_params()['user'];
            $password = connexion_params()['password'];
            try{
                $dbconnexion = new PDO($dsn,
                                        $user,
                                        $password,
                                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }catch (PDOException $ex){
                die($ex->getMessage());
            }
            return $dbconnexion;
        }
    }
?>