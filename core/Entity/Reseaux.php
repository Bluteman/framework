<?php

namespace Entity;

use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\ReseauxRepository;

#[Table(name: "reseaux")]
#[TargetRepository(repositoryName: ReseauxRepository::class)]
class Reseaux extends AbstractEntity
{
    private int $id;
    private int $plateform;
    private string $lien;
    private int $expert_id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPlateform(): int
    {
        return $this->plateform;
    }

    /**
     * @param int $plateform
     */
    public function setPlateform(int $plateform): void
    {
        $this->plateform = $plateform;
    }

    /**
     * @return string
     */
    public function getLien(): string
    {
        return $this->lien;
    }

    /**
     * @param string $lien
     */
    public function setLien(string $lien): void
    {
        $this->lien = $lien;
    }

    /**
     * @return int
     */
    public function getExpertId(): int
    {
        return $this->expert_id;
    }

    /**
     * @param int $expert_id
     */
    public function setExpertId(int $expert_id): void
    {
        $this->expert_id = $expert_id;
    }
}