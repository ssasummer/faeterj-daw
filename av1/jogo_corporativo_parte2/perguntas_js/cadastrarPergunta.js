document.getElementById("formPergunta").addEventListener("submit", e => {
    e.preventDefault()

    const pergunta = document.getElementById("pergunta").value
    const tipo = document.getElementById("tipo").value
    const respostas = document.getElementById("respostas").value

    fetch("../perguntas/salvarPergunta.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ pergunta, tipo, respostas })
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("mensagem").textContent = data.mensagem
        document.getElementById("formPergunta").reset()
    })
})
