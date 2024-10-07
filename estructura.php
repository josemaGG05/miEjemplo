<?php

class Post
{
    private $titulo;
    private $contenido;
    private $hastag;
    private $like;

    public function __construct($titulo, $contenido, $hastag, $like)
    {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->hastag = $hastag;
        $this->like = $like;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getContenido()
    {
        return $this->contenido;
    }
    public function getHastag()
    {
        return $this->hastag;
    }
    public function getLike()
    {
        return $this->like;
    }

}

function obtenerPostPorSeccion($id) {
    $post = [
        new Post("Titulo 1", "Texto de ejemplo, Texto de ejemplo, Texto de ejemplo, Texto de ejemplo", "#1, #2, #3", "5"),
        new Post("Titulo 2", "Texto de ejemplo, Texto de ejemplo, Texto de ejemplo, Texto de ejemplo", "#1, #2, #3", "2"),
        new Post("Titulo 3", "Texto de ejemplo, Texto de ejemplo, Texto de ejemplo, Texto de ejemplo", "#1, #2, #3", "1")
    ];
    return $post;
}
