<?php

namespace src\Controllers;

Class Controller 
{
    public function route() : void 
    {
        try {
            if (isset($_GET['controller'])) {
                switch ($_GET['controller']) {
                    case 'page':
                        // charge controlleur page
                        $pageController = new PageController();
                        $pageController->route();
                        break;
                    case 'book':
                        $bookController = new BookController();
                        $bookController->route();
                        break;
                    default:
                        throw new \Exception("Ce controller n'existe pas : ".$_GET['controller']);
                        break;
                }
            } else {
                // si pas de controller dans l'url -> home
                $pageController = new PageController();
                $pageController->home();
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
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
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }

    }
}