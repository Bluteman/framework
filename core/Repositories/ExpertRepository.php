<?php

namespace Repositories;

use Attributes\TargetEntity;
use Entity\Expert;

#[TargetEntity(entityName: Expert::class)]
class ExpertRepository extends AbstractRepository
{
    public function insert(Expert $expert) {

        $query = $this->pdo->prepare("INSERT INTO {$this->tableName} SET name = :name, content = :content, profession =:profession, img=:img ");

        $query->execute([
            "name"=>$expert->getName(),
            "content"=>$expert->getContent(),
            "profession"=>$expert->getProfession(),
            "img"=>$expert->getImg()
        ]);
        return $this->pdo->lastInsertId();
    }

    public function update(Expert $expert) {
        $request = $this->pdo->prepare("UPDATE {$this->tableName} SET name = :name, content = :content, profession =:profession, img=:img WHERE id= :id");
        $request->execute([
            "id"=>$expert->getId(),
            "name"=>$expert->getName(),
            "content"=>$expert->getContent(),
            "profession"=>$expert->getProfession(),
            "img"=>$expert->getImg()
        ]);
    }
}