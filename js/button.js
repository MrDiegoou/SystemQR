function selectOption(inputName, value) {
    document.getElementById("selected" + inputName.charAt(0).toUpperCase() + inputName.slice(1)).textContent = value;
    document.getElementById("hidden" + inputName.charAt(0).toUpperCase() + inputName.slice(1)).value = value;
}

document.getElementById("register").addEventListener("click", function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe automáticamente
    
    // Recolectar los datos del formulario
    var formData = new FormData(document.getElementById("form"));
    formData.append('register', 1); // Agregar campo para indicar registro

    // Enviar los datos al script PHP de registro
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "registrar.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = xhr.responseText;
                if (response === '¡Tu registro ha sido todo un éxito! Que tengas un día increíble lleno de logros y oportunidades. ¡Espacio y Mercadeo está aquí para hacer brillar tu día!') {
                    // Si el registro es exitoso, mostrar una alerta y recargar la página
                    alert(response);
                    window.location.reload();
                } else {
                    // Si hay un error, mostrar una alerta al usuario
                    alert(response);
                }
            } else {
                // Si hay un error de red, mostrar una alerta al usuario
                alert("Error de red al procesar la solicitud. Por favor, inténtelo de nuevo.");
            }
        }
    };
    xhr.send(formData);
});
