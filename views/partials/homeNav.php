
<link rel="stylesheet" href="assets/css/style.css">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/theme-switcher.js"></script>
<script src="assets/js/main.js" defer></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" alt="logo-cafpath" height="40">
        </a>

        <!-- Hamburger menu for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-translate="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="app/Controllers/tracking.php" data-translate="homeNavTracking">Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/public/FAQ.php" data-translate="FAQ">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/public/contactForm.php" data-translate="homeNavContact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/public/informationView.php" data-translate="homeNavInformation">Information</a>
                </li>
            </ul>

            <!-- User dropdown -->
            <div class="nav-item dropdown">
                <button class="btn btn-link nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-label="User Menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                    </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="views/auth/LoginViewUser.php" data-translate="clientLogin">Client</a></li>
                    <li><a class="dropdown-item" href="views/auth/LoginViewEmployee.php" data-translate="employeeLogin">Employee</a></li>
                </ul>
            </div>

            <!-- Language dropdown -->
            <div class="nav-item dropdown ms-2">
                <button class="btn btn-link nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Language Menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M3.6 9h16.8" />
                        <path d="M3.6 15h16.8" />
                        <path d="M11.5 3a17 17 0 0 0 0 18" />
                        <path d="M12.5 3a17 17 0 0 1 0 18" />
                    </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('en'); return false;">English</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('es'); return false;">Español</a></li>
                </ul>
            </div>

            <!-- Theme switcher -->
            <button class="btn btn-link nav-link ms-2" id="theme-switcher" aria-label="Toggle Theme">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-sun icon-tabler icon-tabler-sun" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="12" r="4" />
                    <path d="M3 12h1m16 0h1" />
                    <path d="M12 3v1m0 16v1" />
                    <path d="M5.6 5.6l.7 .7m12.1 12.1l.7 .7" />
                    <path d="M18.4 5.6l-.7 .7m-12.1 12.1l-.7 .7" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-moon icon-tabler icon-tabler-moon d-none" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                </svg>
            </button>
        </div>
    </div>
</nav>

