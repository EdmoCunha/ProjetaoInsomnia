<?php

namespace App\Http\Controllers;

use App\Responses\ApiResponse;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function salvar(){

    }
    public function editar(int $id){

    }
    public function listar(){
        return ApiResponse::sucess(data:["nome" => "lucas"]);

    }
    public function excluir(int $id){

    }
}
