<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Tracking - CAFPATH</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php include '../partials/header.php'; ?>
<div class="container-fluid p-0">
    <!-- Banner Section -->
    <div class="banner position-relative">
        <img src="../../assets/img/tracking-banner.jpg" class="w-100" style="height: 400px; object-fit: cover;" alt="Package Tracking Banner">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="display-4 fw-bold" data-translate="trackingBannerTitle">Package Tracking</h1>
            <p class="lead" data-translate="trackingBannerDesc">Real-time visibility of your shipments at your fingertips</p>
            <a href="../../app/Controllers/tracking.php" class="btn btn-primary btn-lg hover-scale" data-translate="trackNowButton">Track Your Package Now</a>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="container my-5">
        <!-- Introduction Section -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center mb-4" style="color: var(--blue);" data-translate="trackingSystemTitle">CAFPATH Tracking System: Complete Visibility</h2>
                <p class="lead text-center" data-translate="trackingIntro">
                    Our state-of-the-art tracking system provides real-time updates and complete visibility of your shipments throughout their journey. With advanced GPS technology and IoT sensors, you'll always know exactly where your package is and when it will arrive.
                </p>
            </div>
        </div>

        <!-- Key Features Section -->
        <div class="row mb-5">
            <h3 class="text-center mb-4" style="color: var(--blue);" data-translate="trackingFeaturesTitle">Key Tracking Features</h3>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 hover-scale">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--darkgrey);"><i class="fas fa-map-marker-alt me-2"></i> <span data-translate="feature1Title">Real-Time Location</span></h5>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="feature1List1">GPS-based location tracking</span></li>
                            <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="feature1List2">Interactive map visualization</span></li>
                            <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="feature1List3">Route progress indicators</span></li>
                            <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="feature1List4">Estimated arrival times</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card h-100 hover-scale">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--darkgrey);"><i class="fas fa-bell me-2"></i> <span data-translate="feature2Title">Status Updates</span></h5>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="feature2List1">Automated notifications</span></li>
                            <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="feature2List2">SMS and email alerts</span></li>
                            <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="feature2List3">Milestone updates</span></li>
                            <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="feature2List4">Delivery confirmations</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- How to Track Section -->
        <div class="row mb-5">
            <h3 class="text-center mb-4" style="color: var(--blue);" data-translate="howToTrackTitle">How to Track Your Package</h3>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 hover-scale">
                    <div class="card-body text-center">
                        <i class="fas fa-search fa-3x mb-3" style="color: var(--skyblue);"></i>
                        <h5 class="card-title" data-translate="trackingStep1Title">1. Enter Tracking Number</h5>
                        <p class="card-text" data-translate="trackingStep1Desc">Visit our tracking page and enter your tracking number in the search field.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 hover-scale">
                    <div class="card-body text-center">
                        <i class="fas fa-eye fa-3x mb-3" style="color: var(--skyblue);"></i>
                        <h5 class="card-title" data-translate="trackingStep2Title">2. View Status</h5>
                        <p class="card-text" data-translate="trackingStep2Desc">Review detailed package information and current status.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 hover-scale">
                    <div class="card-body text-center">
                        <i class="fas fa-cog fa-3x mb-3" style="color: var(--skyblue);"></i>
                        <h5 class="card-title" data-translate="trackingStep3Title">3. Set Preferences</h5>
                        <p class="card-text" data-translate="trackingStep3Desc">Customize your notification preferences for updates.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Technology Section -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h3 style="color: var(--darkgrey);" data-translate="trackingTechnologyTitle">Technology Behind the Tracking</h3>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="techList1">Advanced GPS and IoT sensors for precise location tracking</span></li>
                    <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="techList2">Machine learning algorithms for accurate ETA predictions</span></li>
                    <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="techList3">Blockchain technology for secure data management</span></li>
                    <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="techList4">Cloud-based infrastructure for real-time updates</span></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="../../assets/img/tracking-technology.jpg" class="img-fluid rounded hover-scale" alt="Tracking technology">
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h3 class="mb-4" style="color: var(--blue);" data-translate="startTrackingTitle">Ready to Track Your Package?</h3>
                <p class="mb-4" data-translate="startTrackingDesc">Enter your tracking number to begin monitoring your shipment.</p>
                <a href="../../app/Controllers/tracking.php" class="btn btn-primary btn-lg hover-scale" data-translate="trackPackageButton">Track Package Now</a>
            </div>
        </div>

        <div class="row">
                <h3 class="text-center mb-4" style="color: var(--blue);" data-translate="relatedTitle">Servicios Relacionados</h3>
                <div class="col-md-4 mb-4">
                    <div class="card hover-scale">
                        <div class="text-center pt-4">
                            <i class="bi bi-headset display-1 text-primary"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" data-translate="relatedSupportTitle">Support Service</h5>
                            <p class="card-text" data-translate="relatedSupportDesc">24/7 customer support to assist you with any queries or concerns</p>
                            <a href="/support" class="btn btn-outline-primary">More Information</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card hover-scale">
                        <div class="text-center pt-4">
                            <i class="bi bi-box-seam display-1 text-primary"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" data-translate="relatedTrackingTitle">Logistic Service</h5>
                            <p class="card-text" data-translate="relatedTrackingDesc">We provide seamless management of inventory, orders, and shipments</p>
                            <a href="/support" class="btn btn-outline-primary">More Information</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card hover-scale">
                        <div class="text-center pt-4">
                            <i class="bi bi-truck display-1 text-primary"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" data-translate="relatedLogisticsTitle">Delivery Service</h5>
                            <p class="card-text" data-translate="relatedLogisticsDesc">Yuka-tan es la mejor waifu de toda la persona saga y el persona verso</p>
                            <a href="/support" class="btn btn-outline-primary">More Information</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php include '../partials/footerViews.php'; ?>
</body>
</html>
