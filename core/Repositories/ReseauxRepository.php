<?php

namespace Repositories;

use Attributes\TargetEntity;
use Entity\Reseaux;

#[TargetEntity(entityName: Reseaux::class)]
class ReseauxRepository extends AbstractRepository
{
    public function findAllByExpertId(int $expertId){

        $query = $this->pdo->prepare("SELECT * FROM {$this->tableName} WHERE expert_id = :expert_id");
        $query->execute([
            "expert_id"=>$expertId
        ]);

        $reseaux = $query->fetchAll(\PDO::FETCH_CLASS,get_class($this->targetEntity));

        return $reseaux;
    }

    public function insert(Reseaux $reseaux){

        $query = $this->pdo->prepare("INSERT INTO {$this->tableName} SET plateform = :plateform, lien = :lien, expert_id =:expert_id ");

        $query->execute([
            "plateform"=>$reseaux->getPlateform(),
            "lien"=>$reseaux->getLien(),
            "expert_id"=>$reseaux->getExpertId(),
        ]);
        return $this->pdo->lastInsertId();
    }
}