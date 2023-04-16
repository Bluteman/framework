<?php

namespace Controllers;

use Attributes\UsesEntity;

#[UsesEntity(value: False)]
class StaticController extends AbstractController
{

    public function showContact() {
        return $this->render("pages/contact",[
            "pageTitle"=>"Contact - Flore Flipo",
            "css" => "contact",
            "locomotive"=>false
        ]);
    }

    public function showMentionsLegales()
    {
        return $this->render("pages/mentions", [
            "pageTitle" => "Mentions Legales",
            "css" => "mentions",
            "locomotive"=>false
        ]);
    }
}