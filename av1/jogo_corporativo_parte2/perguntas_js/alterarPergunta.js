const params = new URLSearchParams(window.location.search)
const id = params.get("id")

fetch("../perguntas/listarUmaPergunta.php?id=" + id)
    .then(res => res.json())
    .then(p => {
        document.getElementById("pergunta").value = p.pergunta
        document.getElementById("tipo").value = p.tipo
        document.getElementById("respostas").value = p.respostas
    })

document.getElementById("formAlterar").addEventListener("submit", e => {
    e.preventDefault()

    const pergunta = document.getElementById("pergunta").value
    const tipo = document.getElementById("tipo").value
    const respostas = document.getElementById("respostas").value

    fetch("../perguntas/alterarPergunta.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ id, pergunta, tipo, respostas })
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("mensagem").textContent = data.mensagem
    })
})
