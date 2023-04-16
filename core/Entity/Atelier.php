<?php

namespace Entity;

use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\AtelierRepository;

#[Table(name: "ateliers")]
#[TargetRepository(repositoryName: AtelierRepository::class)]
class Atelier extends AbstractEntity
{
    private int $id;
    private string $name;
    private string $content;
    private int $price;
    private int $time;
    private string $url;
    private int $dispo;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getDispo(): int
    {
        return $this->dispo;
    }

    /**
     * @param int $dispo
     */
    public function setDispo(int $dispo): void
    {
        $this->dispo = $dispo;
    }
}