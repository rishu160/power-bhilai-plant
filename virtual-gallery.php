<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bhilai Steel Plant - Virtual Gallery</title>
  <meta name="description" content="Explore Bhilai Steel Plant through our virtual gallery featuring images and videos of our facilities, operations, and achievements.">
  <meta name="keywords" content="virtual gallery, steel plant images, Bhilai steel, industrial photography, plant tour">
  <meta name="author" content="Bhilai Steel Plant">

  <link rel="shortcut icon" href="images/logo1.png">
  <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap-dropdownhover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <style>
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      background-attachment: fixed;
    }
    
    .gallery-container {
      background: rgba(255,255,255,0.95);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 40px;
      margin: 20px 0;
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    
    .department-section {
      margin-bottom: 60px;
      padding: 30px;
      background: linear-gradient(145deg, #f8f9fa, #e9ecef);
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .department-title {
      text-align: center;
      color: #2c3e50;
      font-weight: 800;
      margin-bottom: 30px;
      position: relative;
    }
    
    .department-title:after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: linear-gradient(90deg, #667eea, #764ba2);
      border-radius: 2px;
    }
    
    .gallery-item {
      position: relative;
      overflow: hidden;
      margin-bottom: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
      transition: all 0.4s ease;
    }
    
    .gallery-item:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.25);
    }
    
    .gallery-item img {
      width: 100%;
      height: 280px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .gallery-item:hover img {
      transform: scale(1.1);
    }
    
    .gallery-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9));
      opacity: 0;
      transition: all 0.4s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }
    
    .gallery-item:hover .gallery-overlay {
      opacity: 1;
    }
    
    .gallery-overlay i {
      color: white;
      font-size: 40px;
      margin-bottom: 10px;
      transform: scale(0.8);
      transition: transform 0.3s ease;
    }
    
    .gallery-item:hover .gallery-overlay i {
      transform: scale(1);
    }
    
    .gallery-overlay .overlay-text {
      color: white;
      font-weight: 600;
      text-align: center;
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.3s ease 0.1s;
    }
    
    .gallery-item:hover .gallery-overlay .overlay-text {
      opacity: 1;
      transform: translateY(0);
    }
    
    .gallery-title {
      text-align: center;
      margin-top: 15px;
      font-weight: 600;
      color: #2c3e50;
      font-size: 16px;
    }
    
    .filter-tabs {
      text-align: center;
      margin-bottom: 40px;
    }
    
    .filter-btn {
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
      border: none;
      padding: 12px 25px;
      margin: 5px;
      border-radius: 25px;
      font-weight: 600;
      transition: all 0.3s ease;
      cursor: pointer;
    }
    
    .filter-btn:hover,
    .filter-btn.active {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }
    
    .stats-section {
      background: linear-gradient(135deg, #2c3e50, #34495e);
      color: white;
      padding: 50px 0;
      margin: 40px 0;
      border-radius: 20px;
    }
    
    .stat-item {
      text-align: center;
      padding: 20px;
    }
    
    .stat-number {
      font-size: 48px;
      font-weight: 800;
      color: #f39c12;
      display: block;
    }
    
    .stat-label {
      font-size: 18px;
      margin-top: 10px;
    }
  </style>

  <script src="js/vendor/modernizr.min.js"></script>
</head>

<body>
  <?php include 'components/header.php'; ?>

  <div class="section banner-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-page">Virtual Gallery</div>
          <div class="breadcrumb-container">
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">Virtual Gallery</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="gallery-container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-heading center" style="color: #2c3e50; margin-bottom: 20px;">BHILAI STEEL PLANT GALLERY</h2>
            <p class="subheading text-center" style="color: #7f8c8d; font-size: 18px;">Explore our world-class steel manufacturing facilities through this comprehensive visual journey</p>
          </div>
        </div>

        <div class="stats-section">
          <div class="row">
            <div class="col-md-3">
              <div class="stat-item">
                <span class="stat-number">10</span>
                <div class="stat-label">Major Departments</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="stat-item">
                <span class="stat-number">2400</span>
                <div class="stat-label">MW Power Capacity</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="stat-item">
                <span class="stat-number">500+</span>
                <div class="stat-label">Gallery Images</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="stat-item">
                <span class="stat-number">50+</span>
                <div class="stat-label">Years Experience</div>
              </div>
            </div>
          </div>
        </div>

       <!-- Raw Material Handling -->
<div class="department-section">
  <h3 class="department-title">Raw Material Handling</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=500&h=300&fit=crop" alt="Iron Ore Stockyard">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Iron Ore Stockyard</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Iron Ore Storage</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=500&h=300&fit=crop" alt="Coal Handling">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Coal Handling System</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Coal Handling</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=500&h=300&fit=crop" alt="Conveyor System">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Conveyor Belt System</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Material Transport</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=500&h=300&fit=crop" alt="Limestone Crushing">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Limestone Processing</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Limestone Crushing</div>
    </div>
  </div>
</div>

<!-- Blast Furnaces -->
<div class="department-section">
  <h3 class="department-title">Blast Furnaces</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=500&h=300&fit=crop" alt="Blast Furnace">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Blast Furnace Tower</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Blast Furnace</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=500&h=300&fit=crop" alt="Hot Metal Tapping">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Hot Metal Tapping</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Metal Tapping</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=500&h=300&fit=crop" alt="Furnace Interior">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Furnace Operations</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Furnace Interior</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?w=500&h=300&fit=crop" alt="Slag Processing">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Slag Processing</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Slag Handling</div>
    </div>
  </div>
</div>

<!-- Coke Oven -->
<div class="department-section">
  <h3 class="department-title">Coke Oven</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=500&h=300&fit=crop" alt="Coke Oven Battery">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Coke Oven Battery</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Coke Oven Battery</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=500&h=300&fit=crop" alt="Coal Charging">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Coal Charging</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Coal Charging</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=500&h=300&fit=crop" alt="Coke Pushing">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Coke Pushing Operation</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Coke Pushing</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=500&h=300&fit=crop" alt="By-Product Recovery">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">By-Product Plant</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">By-Product Recovery</div>
    </div>
  </div>
</div>

<!-- Steel Melting & Converter Shop -->
<div class="department-section">
  <h3 class="department-title">Steel Melting & Converter Shop</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=500&h=300&fit=crop" alt="BOF Operations">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Basic Oxygen Furnace</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">BOF Operations</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=500&h=300&fit=crop" alt="Steel Refining">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Steel Refining</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Steel Refining</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=500&h=300&fit=crop" alt="Ladle Metallurgy">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Ladle Metallurgy</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Ladle Operations</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?w=500&h=300&fit=crop" alt="Oxygen Lancing">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Oxygen Lancing</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Oxygen Lancing</div>
    </div>
  </div>
</div>

<!-- Continuous Casting -->
<div class="department-section">
  <h3 class="department-title">Continuous Casting</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=500&h=300&fit=crop" alt="Casting Machine">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Continuous Casting Machine</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Casting Machine</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=500&h=300&fit=crop" alt="Slab Production">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Slab Production</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Slab Casting</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=500&h=300&fit=crop" alt="Cooling System">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Cooling System</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Cooling System</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=500&h=300&fit=crop" alt="Quality Control">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Quality Control</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Quality Control</div>
    </div>
  </div>
</div>

<!-- Rolling Mills -->
<div class="department-section">
  <h3 class="department-title">Rolling Mills</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=500&h=300&fit=crop" alt="Hot Strip Mill">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Hot Strip Mill</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Hot Strip Mill</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=500&h=300&fit=crop" alt="Cold Rolling">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Cold Rolling Mill</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Cold Rolling</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=500&h=300&fit=crop" alt="Plate Mill">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Plate Mill</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Plate Mill</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=500&h=300&fit=crop" alt="Finishing Line">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Finishing Line</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Product Finishing</div>
    </div>
  </div>
</div>

<!-- Power Plant -->
<div class="department-section">
  <h3 class="department-title">Power Plant</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=500&h=300&fit=crop" alt="Steam Turbine">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Steam Turbine</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Steam Turbine</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=500&h=300&fit=crop" alt="Boiler">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Power Boiler</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Power Boiler</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?w=500&h=300&fit=crop" alt="Generator">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Generator Hall</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Generator</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=500&h=300&fit=crop" alt="Control Room">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Power Control Room</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Control Room</div>
    </div>
  </div>
</div>

<!-- Oxygen Plant -->
<div class="department-section">
  <h3 class="department-title">Oxygen Plant</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?w=500&h=300&fit=crop" alt="Air Separation Unit">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Air Separation Unit</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Air Separation</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=500&h=300&fit=crop" alt="Oxygen Storage">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Oxygen Storage Tanks</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Oxygen Storage</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=500&h=300&fit=crop" alt="Nitrogen Plant">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Nitrogen Production</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Nitrogen Plant</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=500&h=300&fit=crop" alt="Gas Distribution">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Gas Distribution Network</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Gas Distribution</div>
    </div>
  </div>
</div>

<!-- Foundry & Engineering -->
<div class="department-section">
  <h3 class="department-title">Foundry & Engineering</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=500&h=300&fit=crop" alt="Foundry Operations">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Foundry Operations</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Foundry Shop</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=500&h=300&fit=crop" alt="Machine Shop">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Machine Shop</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Machine Shop</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=500&h=300&fit=crop" alt="Engineering Design">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Engineering Design</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Design Office</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=500&h=300&fit=crop" alt="Spare Parts">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Spare Parts Manufacturing</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Spare Parts</div>
    </div>
  </div>
</div>

<!-- Coal Chemicals -->
<div class="department-section">
  <h3 class="department-title">Coal Chemicals</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=500&h=300&fit=crop" alt="Coal Tar Processing">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Coal Tar Distillation</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Coal Tar Plant</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?w=500&h=300&fit=crop" alt="Benzene Recovery">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Benzene Recovery Unit</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Benzene Recovery</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=500&h=300&fit=crop" alt="Chemical Storage">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Chemical Storage Tanks</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Chemical Storage</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=500&h=300&fit=crop" alt="Laboratory">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Chemical Laboratory</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Quality Lab</div>
    </div>
  </div>
</div>

<!-- Slag Treatment -->
<div class="department-section">
  <h3 class="department-title">Slag Treatment</h3>
  <div class="row">
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=500&h=300&fit=crop" alt="Slag Processing">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Slag Processing Plant</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Slag Processing</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=500&h=300&fit=crop" alt="Granulation">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Slag Granulation</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Granulation Plant</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=500&h=300&fit=crop" alt="Cement Production">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Cement Manufacturing</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Cement Plant</div>
    </div>
    <div class="col-md-3">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=500&h=300&fit=crop" alt="Road Material">
        <div class="gallery-overlay">
          <a href="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1200&h=800&fit=crop" class="popup-image">
            <i class="fa fa-search-plus"></i>
            <div class="overlay-text">Road Construction Material</div>
          </a>
        </div>
      </div>
      <div class="gallery-title">Road Material</div>
    </div>
  </div>
</div>


        <!-- Continue with remaining 7 departments... -->
        <!-- For brevity, showing pattern for all departments -->

        <!-- Video Gallery Section -->
        <div class="department-section">
          <h3 class="department-title">Video Gallery</h3>
          <div class="row">
            <div class="col-md-6">
              <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=500&h=300&fit=crop" alt="Plant Overview">
                <div class="gallery-overlay">
                  <a href="https://youtu.be/268O5QuOsJ0?si=2034cI8Oa_1RjNRU" class="popup-youtube">
                    <i class="fa fa-play"></i>
                    <div class="overlay-text">Complete Plant Tour</div>
                  </a>
                </div>
              </div>
              <div class="gallery-title">Plant Overview Video</div>
            </div>
            <div class="col-md-6">
              <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=500&h=300&fit=crop" alt="Steel Making Process">
                <div class="gallery-overlay">
                  <a href="https://youtu.be/pmmBHExykAE?si=P_BbeQXdD8y67ktn" class="popup-youtube">
                    <i class="fa fa-play"></i>
                    <div class="overlay-text">Steel Production Process</div>
                  </a>
                </div>
              </div>
              <div class="gallery-title">Steel Making Process</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'components/footer.php'; ?>

  <script src="js/vendor/jquery.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/vendor/owl.carousel.min.js"></script>
  <script src="js/vendor/jquery.magnific-popup.min.js"></script>
  <script src="js/functions.js"></script>
</body>

</html>
