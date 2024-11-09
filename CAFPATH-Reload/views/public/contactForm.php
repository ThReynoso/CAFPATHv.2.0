<?php include '../partials/header.php'; ?>
<link rel="stylesheet" href="../../assets/css/style.css">
<main class="contact-form-container">
    <h1 class="form-title">Contact Form</h1>
    <form action="#" method="post" class="centered-form">
        <label for="name" class="form-label" data-translate="contactName">Name:</label>
        <input type="text" id="name" name="name" class="form-input" required><br>

        <label for="email" class="form-label" data-translate="contactEmail">Email:</label>
        <input type="email" id="email" name="email" class="form-input" required><br>

        <label for="message" class="form-label" data-translate="contactMessage">Message:</label>
        <textarea id="message" name="message" class="form-textarea" required></textarea><br>

        <input type="submit" value="Submit" class="form-submit" data-translate="contactSubmit">
    </form>
</main>
<?php include '../partials/footerViews.php'; ?>
