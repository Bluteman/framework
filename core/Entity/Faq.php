<?php

namespace Entity;

use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\FaqRepository;

#[Table(name: "faq")]
#[TargetRepository(repositoryName: FaqRepository::class)]
class Faq extends AbstractEntity
{
    private int $id;
    private string $question;
    private string $reponse;
    private string $number;

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
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @param string $question
     */
    public function setQuestion(string $question): void
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getReponse(): string
    {
        return $this->reponse;
    }

    /**
     * @param string $reponse
     */
    public function setReponse(string $reponse): void
    {
        $this->reponse = $reponse;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }
}