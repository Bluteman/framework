<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Entity\User;

#[DefaultEntity(entityName: User::class)]
class UserController extends AbstractController
{
    /*
    public function register(){

        $username = null;
        $password = null;

        if(!empty($_POST['username'])){
            $username = htmlspecialchars($_POST['username']);
        }
        if(!empty($_POST['password'])){
            $password = htmlspecialchars($_POST['password']);
        }

        if($username && $password){

            $user = new User();
            $user->setUsername($username);
            $user->setPassword($password);

            $this->repository->insert($user);

            // changer destination
            return $this->redirect([
                "type"=>"admin",
                "action"=>"index",
                "info"=>"votre compte à bien été créé",
                "locomotive"=>false
            ]);
        }

        return $this->render("admin/register",[
            "pageTitle"=>"Inscription Administrateur",
            "locomotive"=>false,
            "css" => "form"
        ]);
    }*/

    public function signIn(){
        $username = null;
        $password = null;

        if(!empty($_POST['username'])){
            $username = htmlspecialchars($_POST['username']);

        }
        if(!empty($_POST['password'])){
            $password = htmlspecialchars($_POST['password']);

        }

        if($username && $password){

            // user exists ?

            $user = $this->repository->findByUsername($username);

            if(!$user){
                return $this->redirect([
                   "type"=>"user",
                   "action"=>"signin",
                    "locomotive"=>false,
                    "info"=>"username inconnu déso"
                ]);
            }

            if($user->passwordMatches($password)){

                $user->logIn();

                return $this->redirect([
                    "type"=>"admin",
                    "action"=>"index",
                    "locomotive"=>false,
                    "info"=> "bienvenue ".$user->getUsername()
                ]);

            }
            return $this->redirect([
                "type"=>"user",
                "action"=>"signin",
                "info"=> "mauvais mot de passe",
                "locomotive"=>false
            ]);
        }

        return $this->render("admin/connect",[
            "pageTitle"=>"Connection Administrateur",
            "locomotive"=>false,
            "css" => "form"
        ]);
    }

    public function signOut()
    {
        $user = \App\Session::getUser();
        if($user){
            $user->logOut();
        }
        return $this->redirect();
    }
}