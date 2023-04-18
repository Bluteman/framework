<?php

namespace Controllers;

use App\File;
use Attributes\DefaultEntity;
use Entity\Expert;

#[DefaultEntity(entityName: Expert::class)]
class ExpertController extends AbstractController
{
    public function create() {
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
        /*
        $request = $this->post("form",[
            "idUpdate"=>"number",
            "name"=>"text",
            "content"=>"text",
            "profession"=>"text",
            "ancienneImage"=>"text"
        ]);

        if ($request) {
            if ($request["name"] && $request["content"] && $request["profession"] && $request["ancienneImage"]){


                $image = new File("image");
                if($image->isImage()){
                    $image->upload();
                }

                $expert = new Expert();
                $expert->setName($request["name"]);
                $expert->setContent($request["content"]);
                $expert->setProfession($request["profession"]);
                $expert->setImg($image->getName());

                $this->repository->insert($expert);

                return $this->redirect([
                    "type"=>"admin",
                    "action"=>"index"
                ]);
            }
        }
        return $this->render("admin/index", [
            "pageTitle"=>"Index Administrateur",
            "selecteur"=>"expert",
        ]);
        */
    }
    public function update() {
        $request = $this->get("form",["id"=>"number"]);

        if ($request){
            return $this->render("admin/update",[
                "expert"=>$this->repository->findById($_GET["id"]),
                "pageTitle"=>"update expert",
            ]);
        }

        $request = $this->post("form",[
            "idUpdate"=>"number",
            "name"=>"text",
            "content"=>"text",
            "profession"=>"text",
            "ancienneImage"=>"text"
        ]);

        if ($request){

            $expert = $this->repository->findById($request["idUpdate"]);

            if (!$expert){
                return $this->render("admin/index",[
                    "pageTitle"=>"Index Administrateur"
                ]);
            }

            if ($request["idUpdate"] && $request["name"] && $request["content"] && $request["profession"] && $request["ancienneImage"]){

                $image = new File("image");

                if($image->isImage()){
                    $image->upload();
                    $expert->setImg($image->getName());
                }

                $expert->setName($request["name"]);
                $expert->setContent($request["content"]);
                $expert->setProfession($request["profession"]);

                $this->repository->update($expert);

                return $this->redirect([
                    "type"=>"admin",
                    "action"=>"index"
                ]);
            }
        }

        return $this->render("admin/index", [
            "pageTitle"=>"Index Administrateur",
            "selecteur"=>"expert",
            "expert"=>$this->repository->findById($_GET["id"]),
        ]);
    }
    public function remove() {

        // verif existence
        $id = null;
        if(!empty($_GET['id']) && ctype_digit($_GET["id"])){
            $id = $_GET['id'];
        }

        if(!$id){ return $this->redirect([
            "type"=>"admin",
            "action"=>"index"
        ]);
        }

        $obj = $this->repository->findById($id);

        if(!$obj){return $this->redirect(); }

        $this->repository->delete($obj);

        return $this->redirect([
            "type"=>"admin",
            "action"=>"index"
        ]);
    }
    public function update() {
        $request = $this->get("form",["id"=>"number"]);

        if ($request){
            return $this->render("admin/update",[
                "expert"=>$this->repository->findById($_GET["id"]),
                "pageTitle"=>"update expert",
            ]);
        }

        $request = $this->post("form",[
            "idUpdate"=>"number",
            "name"=>"text",
            "content"=>"text",
            "profession"=>"text",
            "ancienneImage"=>"text"
        ]);

        if ($request){
            $expert = $this->repository->findById($request["idUpdate"]);

            if (!$expert){
                return $this->render("admin/index",[
                    "pageTitle"=>"Index Administrateur"
                ]);
            }

            if ($request["idUpdate"] && $request["name"] && $request["content"] && $request["profession"] && $request["ancienneImage"]){

                $image = new File("image");

                if($image->isImage()){
                    $image->upload();
                    $expert->setImg($image->getName());
                }

                $expert->setName($request["name"]);
                $expert->setContent($request["content"]);
                $expert->setProfession($request["profession"]);

                $this->repository->update($expert);

                return $this->redirect([
                    "type"=>"admin",
                    "action"=>"index"
                ]);
            }
        }

        return $this->render("admin/update", [
            "pageTitle"=>"nouveau experts",
            "selecteur"=>"expert",
            "expert"=>$this->repository->findById($_GET["id"]),
        ]);
    }
}