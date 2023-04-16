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
}