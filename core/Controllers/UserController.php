<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Entity\User;

#[DefaultEntity(entityName: User::class)]
class UserController extends AbstractController
{

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
                "info"=>"votre compte à bien été créé"
            ]);
        }

        return $this->render("admin/register",[
            "pageTitle"=>"Inscription Administrateur",
            "css" => "form"
        ]);
    }

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
                    "info"=>"username inconnu"
                ]);
            }

            if($user->passwordMatches($password)){

                $user->logIn();

                return $this->redirect([
                    "type"=>"admin",
                    "action"=>"index",
                    "info"=> "bienvenue ".$user->getUsername()
                ]);

            }
            return $this->redirect([
                "type"=>"user",
                "action"=>"signin",
                "info"=> "mauvais mot de passe"
            ]);
        }

        return $this->render("admin/connect",[
            "pageTitle"=>"Connection Administrateur",
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