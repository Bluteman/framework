<?php

namespace Repositories;

use Attributes\TargetEntity;
use Entity\Atelier;

#[TargetEntity(entityName: Atelier::class)]
class AtelierRepository extends AbstractRepository
{
    public function insert(Atelier $atelier){

        $query = $this->pdo->prepare("INSERT INTO {$this->tableName} SET  name = :name, content = :content, price = :price, time = :time, url = :url, dispo = :dispo ");

        $query->execute([
            "name"=>$atelier->getName(),
            "content"=>$atelier->getContent(),
            "price"=>$atelier->getPrice(),
            "time"=>$atelier->getTime(),
            "url"=>$atelier->getUrl(),
            "dispo"=>$atelier->getDispo(),
        ]);
        return $this->pdo->lastInsertId();
    }
}