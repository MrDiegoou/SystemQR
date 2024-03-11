// Obtener todos los elementos de menú desplegable del HTML
const dropdowns = document.querySelectorAll('.dropdown');

// Iterar a través de todos los elementos de menú desplegable
dropdowns.forEach(dropdown => {
    // Obtener los elementos internos de cada menú desplegable
    const select = dropdown.querySelector('.select');
    const caret = dropdown.querySelector('.caret');
    const menu = dropdown.querySelector('.menu');
    const options = dropdown.querySelectorAll('.menu li');
    const selected = dropdown.querySelector('.selected');

    // Abrir el menú al hacer clic en el select
    select.addEventListener('click', () => {
        // Alternar los estilos del select al que se le hizo clic
        select.classList.toggle('select-clicked');
        // Alternar los estilos de rotación en el elemento caret
        caret.classList.toggle('caret-rotate');
        // Alternar los estilos de apertura en el elemento de menú
        menu.classList.toggle('menu-open');
    });

    // Iterar a través de todos los elementos de opción
    options.forEach(option => {
        // Agregar un evento de clic al elemento de opción
        option.addEventListener('click', () => {
            // Cambiar el texto interno seleccionado al texto interno de la opción en la que se hizo clic
            selected.innerText = option.innerText;
            // Eliminar la clase select-clicked del elemento select
            select.classList.remove('select-clicked');
            // Eliminar la clase caret-rotate del elemento caret
            caret.classList.remove('caret-rotate');
            // Eliminar la clase menu-open del elemento de menú
            menu.classList.remove('menu-open');
            // Eliminar la clase activa de todos los elementos de opción
            options.forEach(opt => {
                opt.classList.remove('active');
            });
            // Agregar la clase activa al elemento de opción en el que se hizo clic
            option.classList.add('active');
        });
    });
    
    // Abrir automáticamente el menú al hacer clic en el menú desplegable
    dropdown.addEventListener('click', () => {
        menu.classList.toggle('menu-open');
    });
});
