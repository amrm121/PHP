<?php

interface Crud{

    public function create();

    public function update();

    public function delete();

    public function insert();


}

class Noticia implements Crud{


    public function create(){

        echo 'Noticias criada';
    }

    public function update(){}

    public function delete(){}

    public function insert(){}



}

$n = new Noticia();

$n->create();