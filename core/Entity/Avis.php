<?php

namespace Entity;

use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\AvisRepository;

#[Table(name:"avis")]
#[TargetRepository(repositoryName: AvisRepository::class)]
class Avis extends AbstractEntity
{
    private int $id;
    private int $page_id;
    private string $name;
    private string $content;
    private string $profession;
    private string $img;

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
     * @return string
     */
    public function getProfession(): string
    {
        return $this->profession;
    }

    /**
     * @param string $profession
     */
    public function setProfession(string $profession): void
    {
        $this->profession = $profession;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img): void
    {
        $this->img = $img;
    }

    /**
     * @return int
     */
    public function getPageId(): int
    {
        return $this->page_id;
    }

    /**
     * @param int $page_id
     */
    public function setPageId(int $page_id): void
    {
        $this->page_id = $page_id;
    }

}