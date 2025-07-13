<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bhilai Steel Plant - Feedback</title>
  <meta name="description" content="Share your feedback and suggestions with Bhilai Steel Plant">
  <meta name="keywords" content="feedback, suggestions, Bhilai steel plant, customer feedback">
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
    .feedback-card {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 15px;
      padding: 40px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      color: white;
      margin-bottom: 30px;
    }
    .feedback-form {
      background: white;
      border-radius: 15px;
      padding: 40px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .rating-stars {
      display: flex;
      justify-content: center;
      margin: 20px 0;
    }
    .rating-stars i {
      font-size: 30px;
      color: #ddd;
      cursor: pointer;
      margin: 0 5px;
      transition: color 0.3s ease;
    }
    .rating-stars i.active,
    .rating-stars i:hover {
      color: #ffc107;
    }
    .form-control {
      border-radius: 10px;
      border: 2px solid #e9ecef;
      padding: 15px;
      margin-bottom: 20px;
    }
    .btn-feedback {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border: none;
      border-radius: 10px;
      padding: 15px 40px;
      color: white;
      font-weight: 600;
      transition: transform 0.3s ease;
    }
    .btn-feedback:hover {
      transform: translateY(-2px);
      color: white;
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
          <div class="title-page">Feedback</div>
          <div class="breadcrumb-container">
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">Feedback</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="feedback-card">
            <div class="text-center">
              <i class="fa fa-comments fa-4x" style="margin-bottom: 20px;"></i>
              <h2>We Value Your Feedback</h2>
              <p style="font-size: 18px; margin-bottom: 30px;">Your opinions help us improve our services and operations. Share your experience with us.</p>
              
              <div class="row text-center">
                <div class="col-md-6">
                  <i class="fa fa-users fa-2x"></i>
                  <h4>1000+</h4>
                  <p>Happy Customers</p>
                </div>
                <div class="col-md-6">
                  <i class="fa fa-star fa-2x"></i>
                  <h4>4.8/5</h4>
                  <p>Average Rating</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="feedback-form">
            <h3 class="text-center" style="margin-bottom: 30px; color: #333;">Share Your Experience</h3>
            
            <form action="mail.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
              </div>
              
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              
              <div class="form-group">
                <select class="form-control" name="category" required>
                  <option value="">Select Feedback Category</option>
                  <option value="service">Service Quality</option>
                  <option value="safety">Safety Measures</option>
                  <option value="environment">Environmental Impact</option>
                  <option value="staff">Staff Behavior</option>
                  <option value="facilities">Plant Facilities</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div class="text-center">
                <label style="color: #333; font-weight: 600;">Rate Your Experience</label>
                <div class="rating-stars">
                  <i class="fa fa-star" data-rating="1"></i>
                  <i class="fa fa-star" data-rating="2"></i>
                  <i class="fa fa-star" data-rating="3"></i>
                  <i class="fa fa-star" data-rating="4"></i>
                  <i class="fa fa-star" data-rating="5"></i>
                </div>
                <input type="hidden" name="rating" id="rating" value="">
              </div>
              
              <div class="form-group">
                <textarea class="form-control" name="feedback" rows="5" placeholder="Share your detailed feedback..." required></textarea>
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-feedback">
                  <i class="fa fa-paper-plane"></i> Submit Feedback
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section bg-grey">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-heading center">Recent Feedback</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="testimonial-1">
                <div class="body">
                  <div class="rating-stars" style="justify-content: flex-start;">
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                  </div>
                  <p>"Excellent safety standards and professional staff. Very impressed with the plant operations."</p>
                  <div class="title">Rajesh Kumar</div>
                  <div class="subtitle">Industrial Consultant</div>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="testimonial-1">
                <div class="body">
                  <div class="rating-stars" style="justify-content: flex-start;">
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <p>"Great environmental initiatives and commitment to sustainable steel production."</p>
                  <div class="title">Priya Sharma</div>
                  <div class="subtitle">Environmental Engineer</div>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="testimonial-1">
                <div class="body">
                  <div class="rating-stars" style="justify-content: flex-start;">
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                  </div>
                  <p>"World-class facilities and cutting-edge technology. Truly impressive steel plant."</p>
                  <div class="title">Amit Patel</div>
                  <div class="subtitle">Steel Industry Expert</div>
                </div>
              </div>
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
  
  <script>
    $(document).ready(function() {
      $('.rating-stars i').click(function() {
        var rating = $(this).data('rating');
        $('#rating').val(rating);
        
        $('.rating-stars i').removeClass('active');
        for(var i = 1; i <= rating; i++) {
          $('.rating-stars i[data-rating="' + i + '"]').addClass('active');
        }
      });
    });
  </script>
</body>

</html>
