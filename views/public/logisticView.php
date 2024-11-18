<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics - CAFPATH</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php include '../partials/header.php'; ?>
    
    <div class="container-fluid p-0">
        <!-- Banner Section -->
        <div class="banner position-relative">
            <img src="../../assets/img/logistics-banner.png" class="w-100" style="height: 400px; object-fit: cover;" alt="Logistics Operations Banner">
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
                <h1 class="display-4 fw-bold" data-translate="logisticsBannerTitle">Logistics Operations</h1>
                <p class="lead" data-translate="logisticsBannerDesc">Optimizing supply chain operations through advanced logistics solutions</p>
            </div>
        </div>

        <!-- Main Content Container -->
        <div class="container my-5">
            <!-- Introduction Section -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center mb-4" style="color: var(--blue);" data-translate="logisticsSystemTitle">CAFPATH Logistics Network: Excellence in Operations</h2>
                    <p class="lead text-center" data-translate="logisticsIntro">
                        At CAFPATH, our logistics network represents the backbone of our operations...
                    </p>
                </div>
            </div>

            <!-- Warehouse Section -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <h3 style="color: var(--darkgrey);" data-translate="warehouseNetworkTitle">Strategic Warehouse Network</h3>
                    <p data-translate="warehouseNetworkDesc">Our warehouse network is strategically positioned to optimize distribution:</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="warehouseList1">Automated storage and retrieval systems (AS/RS)</span></li>
                        <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="warehouseList2">Climate-controlled facilities for sensitive goods</span></li>
                        <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="warehouseList3">Climate-controlled facilities for sensitive goods</span></li>
                        <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="warehouseList4">Cross-docking capabilities for efficient transit</span></li>
                        <!-- ... otros elementos de la lista ... -->
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="../../assets/img/warehouse-operations.jpg" class="img-fluid rounded hover-scale" alt="Warehouse operations">
                </div>
            </div>

            <!-- Fleet Management Cards -->
            <div class="row mb-5">
                <h3 class="text-center mb-4" style="color: var(--blue);" data-translate="fleetManagementTitle">Advanced Fleet Management</h3>
                
                <!-- Primera tarjeta -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 hover-scale">
                        <div class="card-body">
                            <h5 class="card-title" style="color: var(--darkgrey);"><i class="fas fa-truck-loading"></i> <span data-translate="fleetType1Title">Heavy-Duty Fleet</span></h5>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="fleetType1List1">Long-haul trucks for interstate transport</span></li>
                                <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="fleetType1List2">Specialized containers for sensitive cargo</span></li>
                                <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="fleetType1List3">GPS tracking and route optimization</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Segunda tarjeta -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 hover-scale">
                        <div class="card-body">
                            <h5 class="card-title" style="color: var(--darkgrey);"><i class="fas fa-shuttle-van"></i> <span data-translate="fleetType2Title">Local Distribution Fleet</span></h5>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="fleetType2List1">Efficient last-mile delivery vehicles</span></li>
                                <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="fleetType2List2">Eco-friendly electric vehicles</span></li>
                                <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="fleetType2List3">Real-time delivery tracking</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technology Integration Cards -->
            <div class="row mb-5">
                <h3 class="text-center mb-4" style="color: var(--blue);" data-translate="techIntegrationTitle">Technology Integration</h3>
                
                <!-- Primera tarjeta de tecnología -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 hover-scale">
                        <div class="card-body">
                            <h5 class="card-title" style="color: var(--darkgrey);"><i class="fas fa-satellite"></i> <span data-translate="techType1Title">GPS Tracking</span></h5>
                            <p class="card-text" data-translate="techType1Desc">Real-time fleet monitoring and route optimization for maximum efficiency</p>
                        </div>
                    </div>
                </div>

                <!-- Segunda tarjeta de tecnología -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 hover-scale">
                        <div class="card-body">
                            <h5 class="card-title" style="color: var(--darkgrey);"><i class="fas fa-warehouse"></i> <span data-translate="techType2Title">Warehouse Automation</span></h5>
                            <p class="card-text" data-translate="techType2Desc">Advanced robotics and automated systems for inventory management</p>
                        </div>
                    </div>
                </div>

                <!-- Tercera tarjeta de tecnología -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 hover-scale">
                        <div class="card-body">
                            <h5 class="card-title" style="color: var(--darkgrey);"><i class="fas fa-chart-line"></i> <span data-translate="techType3Title">Analytics Platform</span></h5>
                            <p class="card-text" data-translate="techType3Desc">Data-driven insights for continuous operational improvement</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quality Control Section -->
<div class="row align-items-center mb-5">
    <h3 class="text-center mb-4" style="color: var(--blue);" data-translate="qualityControlTitle">Quality Control Measures</h3>
    
    <div class="col-lg-6">
        <div class="card h-100 hover-scale">
            <div class="card-body">
                <p class="card-text" data-translate="qualityControlDesc">
                    Our comprehensive quality control system ensures operational excellence:
                </p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="qualityControlList1">Regular audits and inspections</span></li>
                    <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="qualityControlList2">Standard Operating Procedures (SOPs)</span></li>
                    <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="qualityControlList3">Performance metrics monitoring</span></li>
                    <li><i class="bi bi-check-circle-fill me-2" style="color: var(--skyblue);"></i> <span data-translate="qualityControlList4">Continuous improvement programs</span></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6">
        <img src="../../assets/img/quality-control.jpeg" class="img-fluid rounded hover-scale" alt="Quality control operations">
    </div>
</div>

<!-- Sustainability Section -->
<div class="row mb-5">
    <h3 class="text-center mb-4" style="color: var(--blue);" data-translate="sustainabilityTitle">Sustainable Operations</h3>
    
    <div class="col-lg-12">
        <div class="card h-100 hover-scale">
            <div class="card-body">
                <p class="card-text mb-4" data-translate="sustainabilityDesc">
                    Our commitment to sustainability is reflected in our logistics operations:
                </p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-leaf me-3" style="color: var(--skyblue);"></i>
                            <span data-translate="sustainabilityList1">Energy-efficient warehouse facilities</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-gas-pump me-3" style="color: var(--skyblue);"></i>
                            <span data-translate="sustainabilityList2">Alternative fuel vehicle fleet</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-recycle me-3" style="color: var(--skyblue);"></i>
                            <span data-translate="sustainabilityList3">Waste reduction and recycling programs</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-box me-3" style="color: var(--skyblue);"></i>
                            <span data-translate="sustainabilityList4">Green packaging initiatives</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- Call to Action Section -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h3 class="mb-4" style="color: var(--blue);" data-translate="ctaTitle">Ready to Optimize Your Logistics?</h3>
                    <p class="mb-4" data-translate="ctaDesc">Let us help you streamline your supply chain operations with our advanced logistics solutions.</p>
                    <button class="btn btn-primary btn-lg hover-scale" data-translate="ctaButton">Contact Us Today</button>
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
                            <i class="bi bi-geo-alt display-1 text-primary"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" data-translate="relatedTrackingTitle">Tracking Service</h5>
                            <p class="card-text" data-translate="relatedTrackingDesc">With our tracking service, clients can monitor shipments in real-time</p>
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

    <?php include '../partials/footerViews.php'; ?>
</body>
</html>