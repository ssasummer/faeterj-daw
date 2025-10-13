fetch("../usuarios/listarUsuarios.php")
    .then(res => res.json())
  
    .then(usuarios => {
        const lista = document.getElementById("listaUsuarios")
        if (usuarios.length === 0) {
            lista.innerHTML = "<li>Nenhum usuario cadastrado.</li>"
            return
        }
      
        usuarios.forEach((u, index) => {
            const li = document.createElement("li")
            li.innerHTML = `Nome: ${u.nome} | Email: ${u.email}
                [<a href="alterarUsuario.html?id=${index}">Alterar</a>]
                [<a href="excluirUsuario.html?id=${index}">Excluir</a>]`
            lista.appendChild(li)
        })
    })
