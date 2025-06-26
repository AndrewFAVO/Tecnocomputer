function iniciarSesion() {
    const usuario = document.getElementById('usuario').value;
    const contrasena = document.getElementById('password').value;

    fetch('../api/sesion.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `usuario=${encodeURIComponent(usuario)}&contrasena=${encodeURIComponent(contrasena)}`
    })
    .then(res => res.text())
    .then(data => {
        if (data === "ok") {
            window.location.reload();
        } else {
            alert(data);
        }
    });
}

function cerrarSesion() {
    fetch('../api/sesion.php', { method: 'DELETE' })
        .then(() => location.reload());
}

window.onload = function () {
    fetch('../api/sesion.php')
        .then(res => res.text())
        .then(nombre => {
            if (nombre) {
                document.getElementById('user-info').innerHTML = `
                    <li class="li_estilos">Bienvenido, ${nombre}</li>
                    <li class="li_estilos"><a href="#" onclick="cerrarSesion()">Cerrar sesión</a></li>
                `;
            }
        });
}
