<link rel="stylesheet" href="../../assets/css/style.css">
<title>Employee Login</title>

<head>
    <?php include '../partials/header.php'; ?>
</head>
<body class = "login-body">

    <div class="login-wrapper">
        <div class="login-container">

        <img class="logo" src="../../assets/img/logo.png" alt="logo-cafpath">
        <form action="../../app/Controllers/AuthController.php" method="POST">

        <div class = "tittle">Employee Login</div>

        <div class = "login-form">  


            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            
            <div class="input-group">
    <label for="password">Password</label>
    <div class="password-wrapper">
        <input type="password" id="password" name="password" required>
        <span id="togglePassword" class="eye-icon">
            <!-- Eye off icon (initially visible) -->
            <svg id="eyeOff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                <path d="M3 3l18 18" />
            </svg>
            <!-- Eye on icon (initially hidden) -->
            <svg id="eyeOn" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye" style="display: none;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
            </svg>
        </span>
    </div>
</div>
            
            <div class="checkbox" id="remember">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>

            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit">Login</button>

            </div>
        </div>
    </div>
    <?php include '../partials/footer.php'; ?>

    <style>
    .password-wrapper {
        position: relative;
        display: flex;
        align-items: center;
    }

    .eye-icon {
        position: absolute;
        right: 30px; /* Adjusted to move the icon to the left */
        cursor: pointer;
        user-select: none;
    }
</style>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordField = document.getElementById('password');
        const eyeOff = document.getElementById('eyeOff');
        const eyeOn = document.getElementById('eyeOn');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        
        if (type === 'password') {
            eyeOff.style.display = 'block';
            eyeOn.style.display = 'none';
        } else {
            eyeOff.style.display = 'none';
            eyeOn.style.display = 'block';
        }
    });
</script>