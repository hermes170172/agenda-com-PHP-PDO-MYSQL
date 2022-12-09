<?php 

require '../../agenda/tarefa.model.php';
require '../../agenda/tarefa.service.php';
require '../../agenda/conexao.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if($acao == 'inserir'){

    $tarefa = new Tarefa();

    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefa_service = new TarefaService($conexao, $tarefa);

    $tarefa_service->inserir();

    header('location: nova_tarefa.php?inclusao=1');

}else if($acao == 'recuperar'){
    
   $tarefa = new Tarefa();

   $conexao = new Conexao();

   $tarefa_service = new TarefaService($conexao, $tarefa);

   $tarefas = $tarefa_service->recuperar();

}else if($acao == 'editar'){
    $tarefa = new Tarefa();

    $tarefa->__set('id', $_POST['id']);

    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefa_service = new TarefaService($conexao, $tarefa);

    if($tarefa_service->autualizar()){
        header('location: todas_tarefas.php');
    }
}else if($acao == 'remover'){
    $tarefa = new Tarefa();

    $tarefa->__set('id', $_GET['id']);

    $conexao = new Conexao();

    $tarefa_service = new TarefaService($conexao, $tarefa);

    $tarefa_service->remover();

    header('location: todas_tarefas.php');

}else if($acao == 'realizada'){
    $tarefa = new Tarefa();

    $tarefa->__set('id', $_GET['id']);

    $tarefa->__set('id_status', 2);

    $conexao = new Conexao();

    $tarefa_service = new TarefaService($conexao, $tarefa);

    $tarefa_service->marcarRealizada();

    header('location: todas_tarefas.php');

}else if($acao == 'pendencias'){
    $tarefa = new Tarefa();

    $tarefa->__set('id_status', 1);

    $conexao = new Conexao();

    $tarefa_service = new TarefaService($conexao, $tarefa);

    $tarefas = $tarefa_service->pendencias();
}
