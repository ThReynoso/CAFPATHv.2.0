<script src="../cafpath/assets/js/main.js" defer></script>
<nav id="main-nav">
    
    <ul> <div class="logo-container">
        <img class="logo" src="assets/img/logo.png" alt="logo-cafpath">
    </div>
        <li><a href="#" data-translate="home">Home</a></li>
        <li><a href="#services" onclick="scrollToSection('services'); return false;" data-translate="services">Services</a></li>
        <li><a href="app/Controllers/tracking.php" data-translate="tracking">Tracking</a></li>
        <li><a href="#testimonials" onclick="scrollToSection('testimonials'); return false;" data-translate="testimonials">Testimonials</a></li>
        <li><a href="views/public/FAQ.php" data-translate="FAQ">FAQ</a></li>
        <li><a href="views/public/contactForm.php" data-translate="contact">Contact</a></li>
        <li>
            <button aria-haspopup="true" aria-expanded="false" aria-label="User Menu" aria-controls="user-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="42" height="42" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                    <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                </svg>
            </button>
            <ul id="user-menu">
                <li><a href="views/auth/LoginViewUser.php" data-translate="clientLogin">Client</a></li>
                <li><a href="views/auth/LoginViewEmployee.php" data-translate="employeeLogin">Employee</a></li>
            </ul>
        </li>
        <li>
            <button aria-haspopup="true" aria-expanded="false" aria-label="Language Menu" aria-controls="language-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="42" height="42" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                    <path d="M3.6 9h16.8" />
                    <path d="M3.6 15h16.8" />
                    <path d="M11.5 3a17 17 0 0 0 0 18" />
                    <path d="M12.5 3a17 17 0 0 1 0 18" />
                </svg>
            </button>
            <ul id="language-menu">
                <li><a href="#" onclick="changeLanguage('en'); return false;">English</a></li>
                <li><a href="#" onclick="changeLanguage('es'); return false;">Español</a></li>
            </ul>
        </li>
    </ul>
</nav>
