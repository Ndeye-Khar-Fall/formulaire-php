<?php
    function db_connect()
    {
        //connexion à la table bdd
            try{
                
                $bdd=new PDO('mysql:host=localhost;dbname=tp_base','root','');
                 //connexion à phpmyadmin
            }catch(Exeption $e)
            {
                die('Erreur :' .$e->getmessage());
                //$e->getmessage() : impossible de se connecter à la bdd
            }

            return $bdd;

       
    }


?> 