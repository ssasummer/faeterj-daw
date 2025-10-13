const params = new URLSearchParams(window.location.search)
const id = params.get("id")

fetch("../perguntas/listarUmaPergunta.php?id=" + id)
    .then(res => res.json())
    .then(p => {
        const d = document.getElementById("detalhes")
        d.innerHTML = `<p><b>Pergunta:</b> ${p.pergunta}</p>
                       <p><b>Tipo:</b> ${p.tipo}</p>
                       <p><b>Respostas:</b> ${p.respostas}</p>`
    })
