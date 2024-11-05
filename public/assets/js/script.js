const suggestions = [
    { name: "John Doe", contact: "555-0123", email: 'info@gmail.com' },
    { name: "Jane Smith", contact: "555-0456", email: 'info@gmail.com' },
    { name: "Mike Johnson", contact: "555-0789", email: 'info@gmail.com' },
    { name: "Emily Davis", contact: "555-1234", email: 'info@gmail.com' },
    { name: "Chris Brown", contact: "555-5678", email: 'info@gmail.com' }
];

const input = document.getElementById('autocomplete-input');
const suggestionsContainer = document.getElementById('suggestions');

input.addEventListener('input', () => {
    const query = input.value.toLowerCase();
    suggestionsContainer.innerHTML = '';

    if (!query) {
        suggestionsContainer.style.display = 'none';
        return;
    }

    const filteredSuggestions = suggestions.filter(item => 
        item.name.toLowerCase().includes(query) || 
        item.contact.includes(query) || 
        item.email.toLowerCase().includes(query)
    );

    if (filteredSuggestions.length > 0) {
        filteredSuggestions.forEach(item => {
            const div = document.createElement('div');
            div.classList.add('suggestion-item');
            div.innerHTML = `
                <div class="font-bold">${item.name}</div>
                <div class="">${item.contact}</div>
                <div class="">${item.email}</div>
            `;
            div.addEventListener('click', () => {
                input.value = item.name;
                suggestionsContainer.innerHTML = '';
                suggestionsContainer.style.display = 'none';
            });
            suggestionsContainer.appendChild(div);
        });
        suggestionsContainer.style.display = 'block';
    } else {
        suggestionsContainer.style.display = 'none';
    }
});

document.addEventListener('click', (event) => {
    if (!event.target.closest('.autocomplete-container')) {
        suggestionsContainer.style.display = 'none';
    }
});

$(document).ready(function(){
    $('.nav-menu-link').on('click', function (e) {
        e.preventDefault()
        var id = $(this).attr('href')

        $(id).slideToggle();
    })

    $('.toggle-button').on('click', function(e){
        e.preventDefault()
        var id = $(this).attr('href') 
        $(this).find('.fa-chevron-down').toggleClass('rotate-180')
        $(id).slideToggle('fast');
    })
})