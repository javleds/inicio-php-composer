<?php

if (! function_exists('elementoAleatorio')) {
    /**
     * @param array $elementos
     *
     * @return mixed
     */
    function elementoAleatorio($elementos)
    {
        $valorMaximo = count($elementos) - 1;
        $indiceAleatorio = rand(0, $valorMaximo);
        return $elementos[$indiceAleatorio];
    }
}
