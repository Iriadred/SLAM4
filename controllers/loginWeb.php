<?php

namespace controllers;
use utils\Template;
use models\LoginModel;
use controllers\base\Web;

class LoginWeb extends Web
{
    private $LoginModel;

    function __construct()
    {
        $this->LoginModel = new LoginModel();
    }
    
    function login()
    {
        Template::render("views/connexion/authentification.php");
    }

    function inscript()
    {
        Template::render("views/connexion/inscription.php");
    }

    function lol($nom,$mdp)
    {
        if($nom !="" && $mdp != "")
        $con = $this->LoginModel->connexion($nom,$mdp);
        if($con != ""){

            $_SESSION["id"]=$con["idUsers"];
            error_log(print_r($con["idUsers"],true));
            $_SESSION["login"]=$nom;
            $_SESSION["verifAut"]=true;
            $this->redirect("/todo/liste");
        }
        
        
            $_SESSION["verifAut"]=false;
            error_log(print_r($_SESSION["verifAut"],true)); 
            $this->redirect("/authentification"); 
        

    }
    function deco(){
        Session_destroy();
        $this->redirect("/");
    }

    function newInscript($nom,$mdp)
    {
        if($nom !="" && $mdp != "")
        {
            $verif = $this->LoginModel->verifLogin($nom);
                if($verif == "")
                {
                    $verif = $this->LoginModel->verifMDP($mdp);

                    if($verif == ""){
                        $con = $this->LoginModel->New($nom,$mdp);
                        $_SESSION["verif"]=true;
                        $this->redirect("/authentification"); 
                    }
                }
        }


            $_SESSION["verif"]=false;
            error_log(print_r($_SESSION["verifAut"],true)); 
            $this->redirect("/inscription"); 
        

    }

}   