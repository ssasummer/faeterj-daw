const params = new URLSearchParams(window.location.search)
const id = params.get("id")

fetch("../usuarios/excluirUsuario.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ id })
})

.then(res => res.json())
.then(data => {
    document.getElementById("mensagem").textContent = data.mensagem
})
