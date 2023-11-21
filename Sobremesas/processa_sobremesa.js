function salvarSobremesa(event) {
    event.preventDefault();
    let form = document.getElementById("form");
    let tbody = document.getElementById("sobremesas");
    let sobremesa = Object.fromEntries(new FormData(form).entries());

    if (sobremesa.id_sobremesa == "") { //inserir sobremesa
        fetch("salvar_sobremesa.php", {
            method: "POST", //forma de envio
            body: JSON.stringify(sobremesa), //informações a serem enviadas
            headers: { 'Content-type': "application/json; charset=UTF-8" }
        })
            .then(response => response.json())//converte para json
            .then(sobremesa => inserirSobremesa(sobremesa))
            .catch(error => console.log(error));
    } else { //editar sobremesa
        fetch("salvar_sobremesa.php", {
            method: "PUT",
            body: JSON.stringify(sobremesa),
            headers: { 'Content-type': "application/json; charset=UTF-8" }
        })
            .then(response => response.json())
            .then(sobremesa => alterarSobremesa(sobremesa))
            .catch(error => console.log(error));
    }
    form.reset();
    return false;
}

function inserirSobremesa(sobremesa) {
    let tr = document.createElement("tr");
    let tdId_sobremesa = document.createElement("td");
    tdId_sobremesa.innerText = sobremesa.id_sobremesa;
    let tdNome_sobremesa = document.createElement("td");
    tdNome_sobremesa.innerText = sobremesa.nome_sobremesa;
    let tdTipo_sobremesa = document.createElement("td");
    tdTipo_sobremesa.innerText = sobremesa.tipo_sobremesa;
    let tdValor_sobremesa = document.createElement("td");
    tdValor_sobremesa.innerText = sobremesa.valor_sobremesa;

    let tdEditar = document.createElement("td");
    let btnEditar = document.createElement("button");
    btnEditar.addEventListener("click", editar, false);
    btnEditar.paramId_sobremesa = sobremesa.id_sobremesa;
    btnEditar.innerHTML = "Editar";
    tdEditar.appendChild(btnEditar);

    let tdExcluir = document.createElement("td");
    let btnExcluir = document.createElement("button");
    btnExcluir.addEventListener("click", excluir, false);
    btnExcluir.paramId_sobremesa = sobremesa.id_sobremesa;
    btnExcluir.innerHTML = "Excluir";
    tdExcluir.appendChild(btnExcluir);

    tr.appendChild(tdId_sobremesa);
    tr.appendChild(tdNome_sobremesa);
    tr.appendChild(tdTipo_sobremesa);
    tr.appendChild(tdValor_sobremesa);
    tr.appendChild(tdEditar);
    tr.appendChild(tdExcluir);
    let tBody = document.getElementById("sobremesas");
    tBody.appendChild(tr);
}
function alterarSobremesa(sobremesa) {
    let tbody = document.getElementById("sobremesas");
    for (const tr of tbody.children) {
        if (tr.children[0].innerHTML == sobremesa.id_sobremesa) {
            tr.children[1].innerHTML = sobremesa.nome_sobremesa;
            tr.children[2].innerHTML = sobremesa.tipo_sobremesa;
            tr.children[3].innerHTML = sobremesa.valor_sobremesa;
        }
    }
}
function excluirSobremesa(sobremesa) {
    let tbody = document.getElementById("sobremesas");
    for (const tr of tbody.children) {
        if (tr.children[0].innerHTML == sobremesa.ID) {
            tbody.removeChild(tr);
        }
    }
}
