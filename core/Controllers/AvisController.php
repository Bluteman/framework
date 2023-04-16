<?php

namespace Controllers;

use App\File;
use Attributes\DefaultEntity;
use Entity\Avis;


#[DefaultEntity(entityName: Avis::class)]
class AvisController extends AbstractController
{
    public function create(){

        $page_id = null;
        $name = null;
        $content = null;
        $profession = null;

        if(!empty($_POST['page_id'])){
            $page_id = htmlspecialchars($_POST['page_id']);
        }
        if(!empty($_POST['name'])){
            $name = htmlspecialchars($_POST['name']);
        }
        if(!empty($_POST['content'])){
            $content = htmlspecialchars($_POST['content']);
        }
        if(!empty($_POST['profession'])){
            $profession = htmlspecialchars($_POST['profession']);
        }

        if($page_id && $name && $content && $profession){

            $images = new File("img");
            if($images->isImage()){
                $images->upload();
            }

            $avis = new Avis();
            $avis->setPageId($page_id);
            $avis->setName($name);
            $avis->setContent($content);
            $avis->setProfession($profession);
            $avis->setImg($images->getName());

            $idAvis = $this->repository->insert($avis);

            return $this->redirect([
                "type"=>"admin",
                "action"=>"index",
                "locomotive"=>false
            ]);
        }

        return $this->render("admin/create", [
            "pageTitle"=>"nouveau experts",
            "selecteur"=>"avis",
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