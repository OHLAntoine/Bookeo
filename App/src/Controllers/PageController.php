<?php

namespace src\Controllers;

class PageController extends Controller
{
    public function route() : void 
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'about':
                    $this->about();
                    break;
                case 'home':
                    // charge la méthode home
                    break;
                default:
                    // Erreur
                    break;
            }
        } else {
            //charger home
        }
    }

    protected function about() 
    {

        $this->render('page/about', [
            'test' => 'Premier test about',
            'test2' => 'Deuxième test about'
        ]);
    }
}