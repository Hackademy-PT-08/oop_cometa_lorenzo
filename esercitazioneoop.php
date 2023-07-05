<?php

    class company {
    public $name;
    public $location;
    public $tot_employes;
    public static $avg_wage =1500;
    public static $total= 0;

    public function __construct ($_name,$_location,$_tot_employes){

        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employes = $_tot_employes;
        


    }

    public function Mostrami(){
        if($this->tot_employes == 0 ) {
        echo "l'ufficio $this->name con sede in $this->location non ha dipenti \n";
        }else{
         echo " l'ufficio $this->name con sede in $this->location ha ben $this->tot_employes dipendenti \n";
        }
       
    }

    public function CalcoloAnnuale(){

        $totale = ($this->tot_employes * self::$avg_wage)*12;
       echo "La spesa annuale di $this->name è di $totale Euro \n ";
       self::$total += $totale;
    }

    public static function total(){
        echo "La somma di tutte le aziende è " .self::$total . " Euro \n";
    }

   
}

$company1 = new Company ("Aulab","Italia",50);
$company2 = new Company ("Boolean","Inghilterra",0);
$company3 = new Company ("Ecpicode","Brasile",30);
$company4 = new Company ("Logix","Giappone",0);
$company5 = new Company ("Lab51","Stati Uniti",80);



$company1->Mostrami();
$company2->Mostrami();
$company3->Mostrami();
$company4->Mostrami();
$company5->Mostrami();

$company1->CalcoloAnnuale();
$company2->CalcoloAnnuale();
$company3->CalcoloAnnuale();
$company4->CalcoloAnnuale();
$company5->CalcoloAnnuale();

$company1::total();



