<?php


class UsuarioServicio implements IUsuarioServicio
{

    private IUsuarioRepository $repository;

    public function __construct()
    {
        $this->repository = new UsuarioRepository();
    }




    /* Get all notes */

    public function listar(): array
    {

        return $this->repository->getUsuarios();
    }

   
}