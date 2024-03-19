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
                alert(response); // Mostrar respuesta del servidor en una alerta
                if (response.includes('éxito')) {
                    window.location.reload(); // Recargar la página si el registro es exitoso
                }
            } else {
                alert("Error de red al procesar la solicitud. Por favor, inténtelo de nuevo.");
            }
        }
    };
    xhr.send(formData);
});
