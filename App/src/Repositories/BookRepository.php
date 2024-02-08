<?php

namespace src\Repositories;

use src\Entities\Book;

class BookRepository
{
    public function findOneById(int $id)
    {
        // appel bdd
        $book = [
            'id' => 1,
            'title' => 'titre test',
            'description' => 'description test'
        ];

        $bookEntity = new Book();
        $bookEntity->setId($book['id']);
        $bookEntity->setTitle($book['title']);
        $bookEntity->setDescription($book['description']);

        return $bookEntity;
    }
}