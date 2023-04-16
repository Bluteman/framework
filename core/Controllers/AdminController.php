<?php

namespace Controllers;

use Attributes\UsesEntity;
use Entity\Atelier;
use Entity\Avis;
use Entity\Expert;
use Entity\Faq;
use Entity\Outils;
use Entity\Reseaux;
use Entity\Video;

#[UsesEntity(value: false)]
class AdminController extends AbstractController
{
    function index() {
        $this->render("admin/index",[
            "pageTitle"=>"Index Administrateur",
            "reseaux"=> $this->getRepository(entityName: Reseaux::class)->findAll(),
            "ateliers"=> $this->getRepository(entityName: Atelier::class)->findAll(),
            "experts"=> $this->getRepository(entityName: Expert::class)->findAll(),
            "outils"=> $this->getRepository(entityName: Outils::class)->findAll(),
            "avis"=>$this->getRepository(entityName: Avis::class)->findAll(),
            "faqs"=> $this->getRepository(entityName: Faq::class)->findAll(),
            "videos"=> $this->getRepository(entityName: Video::class)->findAll(),
            "locomotive"=>false,
        ]);
    }

    /*
    function register() {
        $this->render("admin/register",[
            "pageTitle"=>"Inscription Administrateur",
            "locomotive"=>true,
            "css" => "form"
        ]);
    }
    */

    function login() {
        $this->render("admin/connect",[
            "pageTitle"=>"Connection Administrateur",
            "locomotive"=>false,
            "css" => "form"
        ]);
    }

}