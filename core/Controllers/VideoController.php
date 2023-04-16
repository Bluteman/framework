<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Entity\Video;

#[DefaultEntity(entityName: Video::class)]
class VideoController extends AbstractController
{
    public function create(){

        $url = null;

        if(!empty($_POST['url'])){
            $url = htmlspecialchars($_POST['url']);
        }

        if($url){

            $video = new Video();
            $video->setUrl($url);


            $idVideo = $this->repository->insert($video);

            return $this->redirect([
                "type"=>"admin",
                "action"=>"index",
                "locomotive"=>false
            ]);
        }

        return $this->render("admin/create", [
            "pageTitle"=>"nouveau experts",
            "selecteur"=>"video",
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