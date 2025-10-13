fetch("../perguntas/listarPerguntas.php")
    .then(res => res.json())
    .then(perguntas => {
        const lista = document.getElementById("listaPerguntas")
        if (perguntas.length === 0) {
            lista.innerHTML = "<li>Nenhuma pergunta cadastrada.</li>"
            return
        }
        perguntas.forEach((p, index) => {
            const li = document.createElement("li")
            li.innerHTML = `Pergunta: ${p.pergunta} | Tipo: ${p.tipo}
                [<a href="listarUmaPergunta.html?id=${index}">Ver</a>]
                [<a href="alterarPergunta.html?id=${index}">Alterar</a>]
                [<a href="excluirPergunta.html?id=${index}">Excluir</a>]`
            lista.appendChild(li)
        })
    })
