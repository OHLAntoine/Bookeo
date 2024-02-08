<?php

namespace src\Repositories;

use src\Entities\Book;
use configs\database\Mysql;
use PDO;
use configs\Tools\StringTools;

class BookRepository
{
    public function findOneById(int $id)
    {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM book WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $book = $query->fetch(PDO::FETCH_ASSOC);

        $bookEntity = new Book();

        foreach ($book as $key => $value) {
            $bookEntity->{'set'.StringTools::toPascalCase($key)}($value);
        }

        return $bookEntity;
    }
}