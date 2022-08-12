<?php

namespace Alura\Solid\Interface;

use Alura\Solid\Interface\Pontuavel;

class Assistidor
{
    public function assisteVideo(Pontuavel $conteudo)
    {
        $conteudo->assisteVideo();
    }
   
}
