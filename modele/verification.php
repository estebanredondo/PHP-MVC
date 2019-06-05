<?php

//Méthpde qui permet de vérifier l'adresse mail

class Verification
{

    public function verifierAdresseMail($adresse)
    {
        $expression="/^([a-zA-Z0-9]+(([\.\-\_]?[a-zA-Z0-9]+)+)?)\@(([a-zA-Z0-9]+[\.\-\_])*[a-zA-Z0-9]+\.[a-zA-Z]{2,})$/";

        if(preg_match($expression, $adresse))
        {
            // Adresse  valide
            return true;  
        }
        else
        {
            // Adresse erronée
            return false;  
        }
    }

    //Méthode qui permet de vérifier le code postal

    public function verifierCp($cp)
    {
        $expression="/^([0-9]{5})$/";

        if(preg_match($expression, $cp))
        {
            // Code postal  valide
            return true;  
        }
        else
        {
            // Code postal erronée
            return false;  
        }
    }

    //Méthode qui permet de vérifier un nombre, ainsi que le nombre de chiffres qui le constituent

    public function verifierEntier($nb, $qte=5)
    {
        $expression="/^([0-9]{" . $qte .  "})$/";

        if(preg_match($expression, $nb))
        {
            // Entier valide
            return true;  
        }
        else
        {
            // Entier erroné
            return false;  
        }
    }

}

?>
