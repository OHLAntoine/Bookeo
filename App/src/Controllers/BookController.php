<?php

namespace src\Controllers;

use src\Repositories\BookRepository;

class BookController extends Controller
{
    public function route() : void 
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'show':
                        $this->show();
                        break;
                    case 'list':
                        // $this->list();
                        break;
                    case 'edit':
                        // $this->edit();
                        break;
                    case 'add':
                        // $this->add();
                        break;
                    case 'delete':
                        // $this->delete();
                        break;
                    default:
                        throw new \Exception("Cette action n'existe pas : ".$_GET['action']);
                        break;
                }
            } else {
                throw new \Exception("Aucune action détectée");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
        
    }

    protected function show() 
    {
        try {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $bookRepository = new BookRepository();
                $book = $bookRepository->findOneById($id);

                $this->render('book/show', [
                    'book' => $book
                ]);
            } else {
                throw new \Exception("L'ID est manquant en paramètre");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }

}