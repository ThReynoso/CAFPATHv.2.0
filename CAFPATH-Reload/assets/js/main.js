console.log('main.js loaded');
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}
function changeLanguage(lang) {
    // Fetch translations from the JSON file
    fetch('assets/js/translations.json')
        .then(response => response.json())
        .then(translations => {
            // Store the selected language in localStorage
            localStorage.setItem('preferredLanguage', lang);

            // Get all elements that need translation
            const elements = document.querySelectorAll('[data-translate]');

            // Update text content for each element
            elements.forEach(element => {
                const key = element.getAttribute('data-translate');
                if (translations[lang] && translations[lang][key]) {
                    element.textContent = translations[lang][key];
                }
            });

            // Update the HTML lang attribute
            document.documentElement.lang = lang;

            // You might want to reload certain parts of your page or fetch new data here
            // For example: updateContent(lang);
        })
        .catch(error => console.error('Error loading translations:', error));
}

// Function to set initial language
function setInitialLanguage() {
    const lang = localStorage.getItem('preferredLanguage') || 'en';
    changeLanguage(lang);
}

// Call setInitialLanguage when the page loads
document.addEventListener('DOMContentLoaded', () => {
    console.log('main.js loaded');
    setInitialLanguage();
    initializeFAQ();
});

// Modify the FAQ functionality
function initializeFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        if (question) {
            question.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        }
    });
}

function showService(service) {
    // Desactivar todos los botones y contenido
    const buttons = document.querySelectorAll('.service-btn');
    buttons.forEach(button => button.classList.remove('active'));
    
    const contents = document.querySelectorAll('.service-content');
    contents.forEach(content => {
        content.classList.remove('active');
        content.style.opacity = 0;
    });

    // Activar el botón y contenido seleccionados
    document.querySelector(`.service-btn[onclick="showService('${service}')"]`).classList.add('active');
    const activeContent = document.getElementById(service);
    activeContent.classList.add('active');
    setTimeout(() => {
        activeContent.style.opacity = 1;
    }, 10);
}

function toggleService(service) {
    // Obtener el botón y el contenido correspondientes
    const button = document.querySelector(`.service-btn[onclick="toggleService('${service}')"]`);
    const content = document.getElementById(service);

    // Verificar si el contenido ya está visible
    const isActive = content.classList.contains('active');

    // Ocultar todos los contenidos y desactivar todos los botones
    const buttons = document.querySelectorAll('.service-btn');
    buttons.forEach(btn => btn.classList.remove('active'));

    const contents = document.querySelectorAll('.service-content');
    contents.forEach(cont => {
        cont.classList.remove('active');
        cont.style.opacity = 0;
    });

    // Si no estaba activo, mostrar el contenido y activar el botón
    if (!isActive) {
        button.classList.add('active');
        content.classList.add('active');
        setTimeout(() => {
            content.style.opacity = 1;
        }, 10);
    }
}

