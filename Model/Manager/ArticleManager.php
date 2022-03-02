<?php

namespace App\Model\Manager;

use App\Model\DB;
use App\Model\Entity\Article;
use DateTime;

class ArticleManager
{
    public function findAll(): array
    {
        $articles = [];
        $query = DB::getPDO()->query("SELECT * FROM article");
        if ($query){
            $userManager = new UserManager();
            $format = 'T-m-d H:i:s';

            foreach ($query->fetchAll() as $articleData){
                $articles[] = (new Article())
                    ->setId($articleData['id'])
                    ->setAuthor($userManager->getUserById($articleData['author']))
                    ->setContent($articleData['content'])
                    ->setDataAdd(DateTime::createFromFormat($format, $articleData['date_add']))
                    ->setDataAdd(DateTime::createFromFormat($format, $articleData['date_update']))
                    ->setId($articleData['title']);
            }
        }

        return $articles;
    }
}