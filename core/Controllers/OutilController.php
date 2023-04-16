<?php

namespace Controllers;

use App\File;
use Attributes\DefaultEntity;
use Entity\Outils;

#[DefaultEntity(entityName: Outils::class)]
class OutilController extends AbstractController
{
    public function create(){

        $title = null;
        $content = null;
        $url = null;

        if(!empty($_POST['title'])){
            $title = htmlspecialchars($_POST['title']);
        }
        if(!empty($_POST['content'])){
            $content = htmlspecialchars($_POST['content']);
        }
        if(!empty($_POST['url'])){
            $url = htmlspecialchars($_POST['url']);
        }

        if($title && $content && $url){

            $images = new File("img");
            if($images->isImage()){
                $images->upload();
            }

            $outil = new Outils();
            $outil->setTitle($title);
            $outil->setContent($content);
            $outil->setUrl($url);
            $outil->setImg($images->getName());

            $idOutil = $this->repository->insert($outil);

            return $this->redirect([
                "type"=>"admin",
                "action"=>"index",
                "locomotive"=>false
            ]);
        }

        return $this->render("admin/create", [
            "pageTitle"=>"nouveau experts",
            "selecteur"=>"outil",
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