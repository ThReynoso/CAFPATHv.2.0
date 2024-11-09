<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
</head>
<body>
    <?php include '../partials/header.php'; ?>
    <main>
        <br><br><br><br><br>
        <section class="faq-section">
            <div class="faq-item">
                <div class="faq-question" data-translate="faqQuestion1">How can I track my shipment?</div>
                <div class="faq-answer" data-translate="faqAnswer1">You can track your shipment using the tracking number previously provided.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" data-translate="faqQuestion2">What should I do if my package is delayed?</div>
                <div class="faq-answer" data-translate="faqAnswer2">If your package is delayed, please contact our support team for assistance.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" data-translate="faqQuestion3">Can I change the delivery address after the shipment has been dispatched?</div>
                <div class="faq-answer" data-translate="faqAnswer3">Address changes can be requested within 24 hours of dispatch. Please contact support.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" data-translate="faqQuestion4">What are the shipping options available?</div>
                <div class="faq-answer" data-translate="faqAnswer4">For the moment, we only offer standard shipping.</div>
            </div>
        </section>
    </main>

    <footer>
        <?php include '../partials/footerViews.php'; ?>
    </footer>
</body>
</html>
