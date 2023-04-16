<?php

namespace Repositories;

use Attributes\TargetEntity;
use Entity\Video;

#[TargetEntity(entityName: Video::class)]
class VideoRepository extends AbstractRepository
{
    public function insert(Video $video){

        $query = $this->pdo->prepare("INSERT INTO {$this->tableName} SET url =:url ");

        $query->execute([
            "url"=>$video->getUrl(),
        ]);
        return $this->pdo->lastInsertId();
    }
}