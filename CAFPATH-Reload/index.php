<!DOCTYPE html>
    <title>Homepage</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/main.js" defer></script>

    <header>
        <?php include 'views/partials/homeNav.php'; ?>
    </header>
    <main>
        <div id="banner">
            <div id="banner-text">
                <h1 data-translate="bannerTitle">CAFPATH</h1>
                <p data-translate="bannerDescription">CAFPATH is your trusted partner for seamless logistics and delivery solutions. Our advanced system provides end-to-end tracking, efficient order management, and real-time updates, ensuring that every package reaches its destination safely and on time. Experience optimized logistics that empower your business with transparency and reliability.</p>
            </div>
            <img src="assets/img/banner.jpg" alt="banner">
        </div>
        
        <h2 data-translate="servicesTitle">Services</h2>

        <section id="services">
            <article class="service">
                <button class="service-btn" onclick="showService('logistic')">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-warehouse" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 21v-13l9 -4l9 4v13" />
                    <path d="M13 13h4v8h-10v-6h6" />
                    <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" />
                </svg>
                </button>
                <div id="logistic" class="service-content">
                    <h3 data-translate="logisticTitle">Logistic</h3>
                    <p data-translate="logisticDescription">We provide seamless management of inventory, orders, and shipments. Our logistics service ensures that every product is tracked from the warehouse to its final destination, improving efficiency and reducing delays. We utilize advanced algorithms to optimize stock levels and order processes, minimizing operational costs and maximizing productivity.</p>
                </div>
            </article>
            <article class="service">
                <button class="service-btn" onclick="showService('delivery')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#00abfb" stroke-linecap="round" stroke-linejoin="round" width="48" height="48" stroke-width="1">
                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                    <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                </svg>
                </button>
                <div id="delivery" class="service-content">
                    <h3 data-translate="deliveryTitle">Delivery</h3>
                    <p data-translate="deliveryDescription">Our delivery service is focused on reliability and speed. From order placement to doorstep delivery, we offer full transparency at each stage. Real-time updates and GPS tracking provide customers and businesses with visibility into shipment statuses, ensuring timely and accurate deliveries every time.</p>
                </div>
            </article>
            <article class="service">
                <button class="service-btn" onclick="showService('tracking')">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-current-location" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none " d="M0 0h24v24H0z " fill="none "/>
                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0 " />
                    <path d="M12 12m-8 0a8 8 0 1 0 16 0a8 8 0 1 0 -16 0 " />
                    <path d="M12 2l0 2 " />
                    <path d="M12 20l0 2 " />
                    <path d="M20 12l2 0 " />
                    <path d="M2 12l2 0 " />
                </svg>   
                </button>
                <div id="tracking" class="service-content">
                    <h3 data-translate="trackingTitle">Tracking</h3>
                    <p data-translate="trackingDescription">With our tracking service, clients can monitor shipments in real-time. Our system provides detailed information on each package’s current location, estimated delivery time, and any potential delays. This feature enhances customer satisfaction by providing up-to-date information, ensuring peace of mind throughout the delivery process.</p>
                </div>
            </article>
        </section>
        
        <section id="how-it-works">
            <h2 data-translate="howItWorksTitle">How It Works</h2>
            <p data-translate="howItWorksDescription">Our system provides a robust solution for managing inventory and orders, streamlining both logistical and administrative tasks. Key features include:</p>
            <ul>
                <li data-translate="feature1">Automated Inventory Management: Real-time stock level tracking with alerts to prevent stockouts or overstocking.</li>
                <li data-translate="feature2">Order Tracking and Processing: Efficient management from order placement to delivery, ensuring full traceability.</li>
                <li data-translate="feature3">Reduction of Administrative Errors: Task automation, such as invoicing and inventory checks, to minimize errors.</li>
                <li data-translate="feature4">Optimization of Delivery Times: Identifying delays and reprioritizing tasks to ensure timely deliveries.</li>
                <li data-translate="feature5">Real-time Order Information Access: All users can view order statuses at any time.</li>
                <li data-translate="feature6">Personalized Analysis and Reporting: Detailed reports on inventory, delivery times, and sales for strategic decisions.</li>
            </ul>
            <p data-translate="howItWorksConclusion">This system is designed to enhance efficiency, transparency, and accuracy in inventory and order management.</p>
        </section>

        <h2 data-translate="testimonialsTitle">Testimonials</h2>
        <section id="testimonials">
            
            <article class="testimonial">
                            <svg class="testimonial-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path> <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path> </svg> 
                        <img src="assets/img/2.jpg" alt="User Image" class="testimonial-image">
                <blockquote data-translate="testimonial1">
                    "CAFPATH has revolutionized our logistics process. Their real-time tracking and efficient order management have significantly improved our delivery times."
                </blockquote>
                <p data-translate="testimonial1Author">- Jon Jones, CEO of Logistics Co.</p>
            </article>
            <article class="testimonial">
            <svg class="testimonial-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path> <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path> </svg> 
                <img src="assets/img/6.jpg" alt="User Image" class="testimonial-image">
                <blockquote data-translate="testimonial2">
                    "The transparency and reliability of CAFPATH's services have been a game-changer for our business. We can now focus on growth, knowing our logistics are in good hands."
                </blockquote>
                <p data-translate="testimonial2Author">- Marlon Wayans, Operations Manager at Retail Inc.</p>
            </article>
            <article class="testimonial">
            <svg class="testimonial-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
            <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path> <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path> </svg> 
                <img src="assets/img/8.jpg" alt="User Image" class="testimonial-image">
                <blockquote data-translate="testimonial3">
                    "Thanks to CAFPATH, our inventory management is more efficient than ever. Their system has reduced our operational costs and increased productivity."
                </blockquote>
                <p data-translate="testimonial3Author">- Ángel David Revilla Lenoci, Supply Chain Director at Manufacturing Ltd.</p>
                </article>
            
        </section>
    </main>
    <?php include 'views/partials/footer.php'; ?>
</body>

</html>
