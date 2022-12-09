function editar(id, txt_tarefa) {
    let form = document.createElement("form");
    form.action = "tarefa_controller.php?acao=editar";
    form.method = "POST";
    form.className = "row";

    let input = document.createElement("input");
    input.type = "text";
    input.name = "tarefa";
    input.className = "col-9 form-control";
    input.value = txt_tarefa;

    //criar um input hidden para guardar o id da tarefa
    let input_id = document.createElement("input");
    input_id.type = "hidden";
    input_id.name = "id";
    input_id.value = id;

    let button = document.createElement("button");
    button.type = "submit";
    button.className = "col-3 btn btn-info";
    button.innerHTML = "Editar";

    form.appendChild(input);
    form.appendChild(input_id);
    form.appendChild(button);

    let tarefa = document.getElementById("tarefa_" + id);
    tarefa.innerHTML = "";
    tarefa.insertBefore(form, tarefa[0]);
}
function remover(id) {
    location.href = "todas_tarefas.php?acao=remover&id=" + id;
}

function statusTarefa(id) {
    location.href = "todas_tarefas.php?acao=realizada&id=" + id;
}
