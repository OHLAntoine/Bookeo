<?php

namespace src\Controllers;

Class Controller 
{
    public function route() : void 
    {
        if (isset($_GET['controller'])) {
            switch ($_GET['controller']) {
                case 'page':
                    // charge controlleur page
                    break;
                case 'book':
                    // charge controleur book
                    break;
                default:
                    // Erreur
                    break;
            }
        } else {
            //charger home
        }
    }
}