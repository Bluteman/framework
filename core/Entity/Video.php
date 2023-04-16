<?php

namespace Entity;
use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\VideoRepository;

#[Table(name: "videos")]
#[TargetRepository(repositoryName: VideoRepository::class)]
class Video extends AbstractEntity
{
    private int $id;
    private string $url;

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

}