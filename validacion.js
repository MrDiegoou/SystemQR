document.addEventListener('DOMContentLoaded', () => {
    const formElement = document.getElementById('form');
    const nombre = document.getElementById('Nombres');
    const apellidos = document.getElementById('Apellidos');
    const cedula = document.getElementById('Cedula');
    const numeroTelefono = document.getElementById('numeroTelefono');
    const warnings = document.getElementById('warnings');

    formElement.addEventListener('submit', async (event) => {
        event.preventDefault();

        // Validaciones
        if (nombre.value === "" || apellidos.value === "" || cedula.value === "" || numeroTelefono.value === "") {
            warnings.textContent = "Por favor, complete todos los campos.";
            return;
        }

        const cedulaRegex = /^\d{10}$/;
        if (!cedulaRegex.test(cedula.value)) {
            warnings.textContent = "Ingrese una cédula válida (10 dígitos).";
            return;
        }

        const numeroTelefonoRegex = /^\d{10}$/;
        if (!numeroTelefonoRegex.test(numeroTelefono.value)) {
            warnings.textContent = "Ingrese un número de teléfono válido (10 dígitos).";
            return;
        }

        warnings.textContent = "";
    });
});
