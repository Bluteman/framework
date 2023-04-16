<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Entity\Faq;

#[DefaultEntity(entityName: Faq::class)]
class FaqController extends AbstractController
{
    public function create(){

        $question = null;
        $reponse = null;
        $number = null;

        if(!empty($_POST['question'])){
            $question = htmlspecialchars($_POST['question']);
        }
        if(!empty($_POST['reponse'])){
            $reponse = htmlspecialchars($_POST['reponse']);
        }
        if(!empty($_POST['number'])){
            $number = htmlspecialchars($_POST['number']);
        }

        if($question && $reponse && $number){

            $faq = new Faq();
            $faq->setQuestion($question);
            $faq->setReponse($reponse);
            $faq->setNumber($number);

            $idFaq = $this->repository->insert($faq);

            return $this->redirect([
                "type"=>"admin",
                "action"=>"index",
                "locomotive"=>false
            ]);
        }

        return $this->render("admin/create", [
            "pageTitle"=>"nouveau experts",
            "selecteur"=>"faq",
            "locomotive"=>false
        ]);
    }
    public function remove(){

        // verif existence
        $id = null;
        if(!empty($_GET['id']) && ctype_digit($_GET["id"])){
            $id = $_GET['id'];
        }

        if(!$id){ return $this->redirect([
            "type"=>"admin",
            "action"=>"index",
            "locomotive"=>false
        ]);
        }

        $obj = $this->repository->findById($id);

        if(!$obj){return $this->redirect(); }

        $this->repository->delete($obj);

        return $this->redirect([
            "type"=>"admin",
            "action"=>"index",
            "locomotive"=>false
        ]);
    }
}