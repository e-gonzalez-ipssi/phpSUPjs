<?php

class Animals {

    private string $nom;
    private int $age;
    private int $poid;
    private bool $sex;
    private string $image;

    public function __construct(string $nom, int $age, int $poid, bool $sex, string $image){
        $this->nom = $nom;
        $this->age = $age;
        $this->poid = $poid;
        $this->color = $sex;
        $this->image = $image;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getAge(){
        return $this->age;
    }

    public function getPoid(){
        return $this->poid;
    }

    public function getSex(){
        return $this->sex;
    }

    public function getImage(){
        return $this->image;
    }

    public function setNom(string $nom){
        $this->nom = $nom;
    }

    public function setAge(int $age){
        $this->age = $age;
    }

    public function setPoid(int $poid){
        $this->poid = $poid;
    }

    public function setSex(bool $sex){
        $this->sex = $sex;
    }

    public function setImage(string $image){
        $this->image = $image;
    }

    public function adopt(){
        return "oui";
    }
}

?>