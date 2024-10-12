<?php
// interface travailleur{
//     public function travailler();
// }

// class Employer implements travailleur{

//     public $nom;
//     public $prenom;
//     protected $age;

//     public function __construct($nom, $prenom, $age){
//         $this->nom = $nom;
//         $this->prenom = $prenom;
//         $this->set_age($age);
//     }

//     public function travailler(){
//         return "se suis un emploiyé et je travaille";  
//     }

//     public function set_age($age){
//         if(is_int($age) && $age>1 && $age<110){
//             $this->age = $age;
//         }else{
//             throw New Exception("l'age ne doit pas sup a 120 ni inferieur a 1 ans");
//         }
//     }

//     public function get_age(){
            
//         return $this->age;

//     }

//     public function presentation(){
//         var_dump("hello je m'appel $this->prenom $this->nom et j'ai $this->age ans");
//     }


// }

// class Patron Extends Employer{

//     public $voiture;

//     public function __construct($nom, $prenom, $age,$voiture){
//         parent::__construct($nom, $prenom, $age);
//         $this->voiture= $voiture;
//     }

//     public function presentation(){
//         var_dump("salut je m'appel $this->prenom $this->nom et j'ai $this->age ans");

//     }

//     public function roule(){
    
//         var_dump("je roule avec ma $this->voiture");
//     }

// }

// function faire_travailler(travailleur  $objet){

//     var_dump(" travaille en cour : {$objet->travailler()}");

// }



// $employe1 = New Employer ("Tamba", "daniel",20);

// var_dump(faire_travailler($employe1));

// $patron = New patron ("kenfack", "joanie",10,"mercédes");
// // $employe1->set_age(25);
// $employe1->presentation();
// $patron->presentation();
// $patron->roule();
/**************************************************************************************** */
// class Moteur {
//     public $puissance;
//     public function __construct($puissance){
//         $this->puissance = $puissance;
//     }

// }

// class Voiture {
//     private $moteur = [];

//     public function ajouterMoteur($moteur) {
//         $this->moteur[] = $moteur;
//     }

// }

// // Création des moteur
// $moteur1 = new Moteur("10 cheveaux");
// $moteur2 = new Moteur("14cheveaux");

// // Agrégation : ajout des roues à la voiture
// $voiture = new Voiture();
// $voiture->ajouterMoteur($moteur1);
// $voiture->ajouterMoteur($$moteur2);

// print_r($voiture);
/************************************************************************************************ */
class Moteur {
    public $puissance;

    public function __construct($puissance) {
        $this->puissance = $puissance;
    }
}

class Voiture {
    public $moteurs = [];

    public function ajouterMoteur($moteur) {
        $this->moteurs[] = $moteur;
    }
}

// Création des moteurs
$moteur1 = new Moteur(160);
$moteur2 = new Moteur(180);

// Agrégation : ajout des moteurs à la voiture
$voiture = new Voiture();
$voiture->ajouterMoteur($moteur1);
$voiture->ajouterMoteur($moteur2);

print_r($voiture);