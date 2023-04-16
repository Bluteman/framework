<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Entity\Expert;

#[DefaultEntity(entityName: Expert::class)]
class AdvancedController extends AbstractController
{
    public function index() {
        return $this->render("pages/accueil",[
            "pageTitle"=>"Accueil",
            "css" => "accueil",
            "experts"=>$this->getRepository(entityName: Expert::class)->findAll(),
        ]);
    }
}