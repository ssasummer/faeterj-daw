document.getElementById("formUsuario").addEventListener("submit", function(e) {
    e.preventDefault()

    const usuario = {
        nome: document.getElementById("nome").value,
        email: document.getElementById("email").value,
        senha: document.getElementById("senha").value
    }

    fetch("../usuarios/salvarUsuario.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(usuario)
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("mensagem").textContent = data.mensagem
        document.getElementById("formUsuario").reset()
    })
    .catch(() => {
        document.getElementById("mensagem").textContent = "Erro ao cadastrar usuario."
    })
})
