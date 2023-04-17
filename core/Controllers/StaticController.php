<?php

namespace Controllers;

use Attributes\UsesEntity;

#[UsesEntity(value: False)]
class StaticController extends AbstractController
{
    public function showMentionsLegales()
    {
        return $this->render("pages/mentions", [
            "pageTitle" => "Mentions Legales",
            "css" => "mentions",
        ]);
    }
    public function erreurPage()
    {
        return $this->render("pages/erreur", [
            "pageTitle" => "erreur",
            "css" => "erreur",
        ]);
    }
}