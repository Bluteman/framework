<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Entity\Atelier;

#[DefaultEntity(entityName: Atelier::class)]
class AtelierController extends AbstractController
{
    public function create(){

        $name = null;
        $content = null;
        $price = null;
        $time = null;
        $url = null;
        $dispo = null;

        if(!empty($_POST['name'])){
            $name = htmlspecialchars($_POST['name']);
        }
        if(!empty($_POST['content'])){
            $content = htmlspecialchars($_POST['content']);
        }
        if(!empty($_POST['price']) && ctype_digit($_POST["price"])){
            $price = $_POST['price'];
        }
        if(!empty($_POST['time']) && ctype_digit($_POST["time"])){
            $time = $_POST['time'];
        }
        if(!empty($_POST['url'])){
            $url = htmlspecialchars($_POST['url']);
        }
        if(!empty($_POST['dispo']) && ctype_digit($_POST["dispo"])){
            $dispo = $_POST['dispo'];
        }


        if($name && $content && $price && $time && $url && $dispo){


            $atelier = new Atelier();
            $atelier->setName($name);
            $atelier->setContent($content);
            $atelier->setPrice($price);
            $atelier->setTime($time);
            $atelier->setUrl($url);
            $atelier->setDispo($dispo);

            $idAtelier = $this->repository->insert($atelier);

            return $this->redirect([
                "type"=>"admin",
                "action"=>"index",
                "locomotive"=>false
            ]);
        }

        return $this->render("admin/create", [
            "pageTitle"=>"nouveau experts",
            "selecteur"=>"atelier",
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