<?php

class post {

    public $id, $date, $net,
            $pos, $negs,
            $neut, $link, $asunto, $actores, $resume, $medio, $img;

    public function __construct($id, $date, $net, $medio, $resume, $pos, $negs, $neut, $link, $asunto, $actores, $img) {
        $this->id = $id;
        $this->date = $date;
        $this->net = $net;
        $this->medio = $medio;
        $this->resume = $resume;
        $this->pos = $pos;
        $this->negs = $negs;
        $this->neut = $neut;
        $this->link = $link;
        $this->asunto = $asunto;
        $this->actores = $actores;
        $this->img = $img;
    }

}

class fbpost extends post {

    public $reacts, $shares;

    public function __construct($id, $date, $net, $medio, $resume, $pos, $negs, $neut, $link, $asunto, $actores, $reacts, $shares, $img) {

        parent::__construct($id, $date, $net, $medio, $resume, $pos, $negs, $neut, $link, $asunto, $actores, $img);

        $this->reacts = $reacts;
        $this->shares = $shares;
    }

}

class twpost extends post {

    public $likes, $retweets;

    public function __construct($id, $date, $net, $resume, $pos, $negs, $neut, $link, $asunto, $actores, $likes, $retweets) {

        parent::__construct($id, $date, $net, $resume, $pos, $negs, $neut, $link, $asunto, $actores);

        $this->likes = $likes;
        $this->retweets = $retweets;
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

