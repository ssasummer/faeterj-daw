const params = new URLSearchParams(window.location.search)
const id = params.get("id")

fetch("../usuarios/listarUsuarios.php")
    .then(res => res.json())
    .then(usuarios => {
      
        const usuario = usuarios[id]
        document.getElementById("nome").value = usuario.nome
        document.getElementById("email").value = usuario.email
        document.getElementById("senha").value = usuario.senha

        document.getElementById("formAlterar").addEventListener("submit", e => {
            e.preventDefault()
            usuario.nome = document.getElementById("nome").value
            usuario.email = document.getElementById("email").value
            usuario.senha = document.getElementById("senha").value

            fetch("../usuarios/alterarUsuario.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ id, usuario })
            })
            .then(res => res.json())
            .then(data => {
                document.getElementById("mensagem").textContent = data.mensagem
            })
        })
    })
