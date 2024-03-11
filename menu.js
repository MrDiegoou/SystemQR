// get all dropdowns from the html
const dropdowns = document.querySelectorAll('.dropdown');

// loop through all dropdown elements
dropdowns.forEach(dropdown => {
    // Get inner elements from each dropdown
    const select = dropdown.querySelector('.select');
    const caret = dropdown.querySelector('.caret');
    const menu = dropdown.querySelector('.menu');
    const options = dropdown.querySelectorAll('.menu li');
    const selected = dropdown.querySelector('.selected');

    // add click event to the select element
    select.addEventListener('click', () => {
        // toggle the clicked select styles on the select element
        select.classList.toggle('select-clicked');
        // toggle the rotate styles on the caret element
        caret.classList.toggle('caret-rotate');
        // toggle the open styles on the menu element
        menu.classList.toggle('menu-open');
    });

    // loop through all option elements
    options.forEach(option => {
        // add a click event to the option element
        option.addEventListener('click', () => {
            // change the selected inner text to the clicked option inner text
            selected.innerText = option.innerText;
            // remove select-clicked class from select element
            select.classList.remove('select-clicked');
            // remove caret-rotate class from caret element
            caret.classList.remove('caret-rotate');
            // remove menu-open class from menu element
            menu.classList.remove('menu-open');
            // remove active class from all option elements
            options.forEach(opt => {
                opt.classList.remove('active');
            });
            // add active class to clicked option element
            option.classList.add('active');
        });
    });
});
