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
                    $pageController = new PageController();
                    $pageController->route();
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

    protected function render(string $path, array $params = []) :void
    {
        $filePath = _ROOTPATH_.'/templates/'.$path.'.php';

        try {
            if (!file_exists($filePath)) {
                throw new \Exception("Fichier non trouvé : ".$filePath);
            } else {
                extract($params); // lignes tableau en variables
                require_once $filePath;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }
}