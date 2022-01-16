<?php

namespace App\Controllers;
use App\Models\VagasModel;
use App\Models\CategoriasModel;

class Dashboard extends BaseController{

    public function home(){

        $vagasModel = new VagasModel;
        $data['listVagas'] = $vagasModel->where('empresaId', session()->idUser)->join('categorias', 'vagas.categoriaId = categorias.idCategoria')->findAll();
        
        return view('moduloRecrutador/vagas/listagem', $data);
    }

    public function telaVagasAbertas(){

        return view('moduloRecrutador/vagas/processosAbertos');
    }

    public function telaCadastrarVagas(){

        $categoriasModel = new CategoriasModel;
        $data['listagemCategorias'] = $categoriasModel->where('status', 'Ativo')->findAll();

        return view('moduloRecrutador/vagas/cadastrarVaga', $data);
    }

    public function telaPesquisarCandidatos(){

        $categoriasModel = new CategoriasModel;
        $data['listagemCategorias'] = $categoriasModel->where('status', 'Ativo')->findAll();

        return view('moduloRecrutador/candidatos/pesquisarPerfil', $data);
    }
}