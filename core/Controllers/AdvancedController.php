<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Entity\Atelier;
use Entity\Avis;
use Entity\Expert;
use Entity\Faq;
use Entity\Outils;
use Entity\Video;

#[DefaultEntity(entityName: Avis::class)]
class AdvancedController extends AbstractController
{

    public function index() {
        return $this->render("pages/accueil",[
            "pageTitle"=>"Accueil - Flore Flipo",
            "locomotive"=>false,
            "css" => "accueil",
            "avis"=>$this->getRepository(entityName: Avis::class)->findAllByIdPage(1),
        ]);
    }

    public function showAPropos() {
        return $this->render("pages/aPropos",[
            "pageTitle"=>"A Propos - Flore Flipo",
            "locomotive"=>true,
            "css" => "aPropos",
            "avis"=>$this->getRepository(entityName: Avis::class)->findAllByIdPage(2),
        ]);
    }

    public function showMonCoaching() {


        return $this->render("pages/monCoaching",[
            "pageTitle"=>"Mon coaching - Flore Flipo",
            "locomotive"=>false,
            "css" => "monCoaching",
            "avis"=> $this->getRepository(entityName: Avis::class)->findAllByIdPage(3),
            "faqs"=> $this->getRepository(entityName: Faq::class)->findAll(),
        ]);
    }

    public function showAteliers() {
        return $this->render("pages/ateliers",[
            "pageTitle"=>"Mes ateliers - Flore Flipo",
            "locomotive"=>false,
            "css" => "ateliers",
            "ateliers"=> $this->getRepository(entityName: Atelier::class)->findAll(),
            //"videos"=> $this->getRepository(entityName: Video::class)->findAll(),
        ]);
    }

    public function showRessources() {

        return $this->render("pages/ressources",[
            "pageTitle"=>"Ressources - Flore Flipo",
            "css" => "ressources",
            "locomotive"=>false,
            "experts"=> $this->getRepository(entityName: Expert::class)->findAll(),
            "outils"=> $this->getRepository(entityName: Outils::class)->findAll(),
        ]);
    }

}