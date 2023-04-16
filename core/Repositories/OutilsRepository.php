<?php

namespace Repositories;

use Attributes\TargetEntity;
use Entity\Outils;

#[TargetEntity(entityName: Outils::class)]
class OutilsRepository extends AbstractRepository
{
    public function insert(Outils $outils){

        $query = $this->pdo->prepare("INSERT INTO {$this->tableName} SET title = :title, content = :content, url =:url, img=:img ");

        $query->execute([
            "title"=>$outils->getTitle(),
            "content"=>$outils->getContent(),
            "url"=>$outils->getUrl(),
            "img"=>$outils->getImg()
        ]);
        return $this->pdo->lastInsertId();
    }
}