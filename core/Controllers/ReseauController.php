<?php

namespace Controllers;

use App\File;
use Attributes\DefaultEntity;
use Entity\Reseaux;

#[DefaultEntity(entityName: Reseaux::class)]
class ReseauController extends AbstractController
{
    public function create(){

        $plateform = null;
        $lien = null;
        $expert_id = null;

        if(!empty($_POST['plateform'])){
            $plateform = htmlspecialchars($_POST['plateform']);
        }
        if(!empty($_POST['lien'])){
            $lien = htmlspecialchars($_POST['lien']);
        }
        if(!empty($_POST['expert_id'])){
            $expert_id = htmlspecialchars($_POST['expert_id']);
        }

        if($plateform && $lien && $expert_id){

            $reseau = new Reseaux();
            $reseau->setPlateform($plateform);
            $reseau->setLien($lien);
            $reseau->setExpertId($expert_id);

            $idReseau = $this->repository->insert($reseau);

            return $this->redirect([
                "type"=>"admin",
                "action"=>"index",
                "locomotive"=>false
            ]);
        }

        return $this->render("admin/create", [
            "pageTitle"=>"nouveau experts",
            "selecteur"=>"reseau",
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