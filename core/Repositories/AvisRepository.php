<?php

namespace Repositories;

use Attributes\TargetEntity;
use Entity\Avis;

#[TargetEntity(entityName: Avis::class)]
class AvisRepository extends AbstractRepository
{
    public function findAllByIdPage(int $page_id) {
        $query = $this->pdo->prepare("SELECT * FROM {$this->tableName} WHERE page_id = :page_id");
        $query->execute([
            "page_id"=> $page_id
        ]);

        $reseaux = $query->fetchAll(\PDO::FETCH_CLASS,get_class($this->targetEntity));

        return $reseaux;
    }
    public function insert(Avis $avis){

        $query = $this->pdo->prepare("INSERT INTO {$this->tableName} SET  page_id = :page_id, name = :name, content = :content, profession =:profession, img=:img ");

        $query->execute([
            "page_id"=>$avis->getPageId(),
            "name"=>$avis->getName(),
            "content"=>$avis->getContent(),
            "profession"=>$avis->getProfession(),
            "img"=>$avis->getImg()
        ]);
        return $this->pdo->lastInsertId();
    }

}