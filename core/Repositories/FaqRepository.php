<?php

namespace Repositories;

use Attributes\TargetEntity;
use Entity\Faq;

#[TargetEntity(entityName: Faq::class)]
class FaqRepository extends AbstractRepository
{
    public function insert(Faq $faq){

        $query = $this->pdo->prepare("INSERT INTO {$this->tableName} SET question = :question, reponse = :reponse, number = :number ");

        $query->execute([
            "question"=>$faq->getQuestion(),
            "reponse"=>$faq->getReponse(),
            "number"=>$faq->getNumber(),
        ]);
        return $this->pdo->lastInsertId();
    }
}