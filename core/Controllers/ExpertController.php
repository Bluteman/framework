<?php

namespace Controllers;

use App\File;
use Attributes\DefaultEntity;
use Entity\Expert;

#[DefaultEntity(entityName: Expert::class)]
class ExpertController extends AbstractController
{
    public function create(){

        $name = null;
        $content = null;
        $profession = null;

        if(!empty($_POST['name'])){
            $name = htmlspecialchars($_POST['name']);
        }
        if(!empty($_POST['content'])){
            $content = htmlspecialchars($_POST['content']);
        }
        if(!empty($_POST['profession'])){
            $profession = htmlspecialchars($_POST['profession']);
        }

        if($name && $content && $profession){

            $images = new File("img");
            if($images->isImage()){
                $images->upload();
            }

            $expert = new Expert();
            $expert->setName($name);
            $expert->setContent($content);
            $expert->setProfession($profession);
            $expert->setImg($images->getName());

            $idExpert = $this->repository->insert($expert);

            return $this->redirect([
                "type"=>"admin",
                "action"=>"index",
                "locomotive"=>false
            ]);
        }

        return $this->render("admin/create", [
            "pageTitle"=>"nouveau experts",
            "selecteur"=>"expert",
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