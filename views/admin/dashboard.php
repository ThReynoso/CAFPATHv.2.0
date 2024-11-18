<?php session_start(); ?>
<script src="../../assets/js/main.js" defer></script>
<link rel="stylesheet" href="../../assets/css/style.css">
<div class="layout">
    <header>
        <?php include '../partials/header.php'; ?>
    </header>
    <nav>
        <ul style="list-style-type: none;">
            <br><br><br>
            <li><a id="link-stock" style="text-decoration: none; color: var(--white);">Stock</a></li>
            <br>
            <li><a id="link-newEmployee" style="text-decoration: none; color: var(--white);">Register Employee</a></li>
            <br>
            <li><a id="link-preparePackage" style="text-decoration: none; color: var(--white);">Packages</a></li>
            <br>
            <li><a id="link-createPath" style="text-decoration: none; color: var(--white);">Routes</a></li>
            <br>
            <li><a id="link-users" style="text-decoration: none; color: var(--white);">Assign Package</a></li>
            <br>
            <li><a href="#" id="link-assignVehicle" style="text-decoration: none; color: var(--white);">Assign Vehicles</a></li>
        </ul>
    </nav>
    <main id="main-content">
        <h2>Bienvenido, 
            <?php 
            if (isset($_SESSION['username'])) {
                echo $_SESSION['username']; 
            } else {
                echo "supervisor"; 
            }
            ?>
        </h2>
    </main>
    <article class="widget">Info</article>
    <article class="stats">Stats</article>
    <footer>
        <?php include '../partials/footer.php'; ?>
    </footer> 
</div>

<script>
    function loadContent(url) {
        fetch(url)
            .then(response => response.text())
            .then(data => {
                document.getElementById('main-content').innerHTML = data;
            })
            .catch(error => console.error('Error fetching content:', error));
    }

    document.getElementById('link-stock').addEventListener('click', function() {
        loadContent('stock.php');
    });

    document.getElementById('link-newEmployee').addEventListener('click', function() {
        loadContent('newEmployee.php');
    });

    document.getElementById('link-preparePackage').addEventListener('click', function() {
        loadContent('preparePackage.php');
    });

    document.getElementById('link-createPath').addEventListener('click', function() {
        loadContent('createPath.php');
    });

    document.getElementById('link-users').addEventListener('click', function(event) {
        event.preventDefault();
        loadContent('assignPackage.php');
    });

    document.getElementById('link-assignVehicle').addEventListener('click', function(event) {
        event.preventDefault();
        loadContent('assignVehicle.php');
    });
</script>
