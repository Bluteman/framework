<?php

namespace Controllers;

use Attributes\UsesEntity;
use Entity\Expert;


#[UsesEntity(value: false)]
class AdminController extends AbstractController
{
    function index() {
        $this->render("admin/index",[
            "pageTitle"=>"Index Administrateur",
            "experts"=> $this->getRepository(entityName: Expert::class)->findAll(),
        ]);
    }


    function register() {
        $this->render("users/signup",[
            "pageTitle"=>"Inscription Administrateur",
            "css" => "form"
        ]);
    }

    function login() {
        $this->render("users/signin",[
            "pageTitle"=>"Connection Administrateur",
            "css" => "form"
        ]);
    }
}