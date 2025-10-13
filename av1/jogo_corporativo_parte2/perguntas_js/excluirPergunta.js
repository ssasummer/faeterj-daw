const params = new URLSearchParams(window.location.search)
const id = params.get("id")

fetch("../perguntas/excluirPergunta.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ id })
})
.then(res => res.json())
.then(data => {
    document.getElementById("mensagem").textContent = data.mensagem
})
