<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website with Popup Modal</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
  .modal-content {
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  }

  .modal-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 10px 10px 0 0;
  }

  .modal-body {
    padding: 30px;
  }

  .form-group label {
    font-weight: 600;
    color: #333;
  }

  .form-control {
    border-radius: 5px;
    border: 2px solid #e9ecef;
    padding: 10px;
    transition: border-color 0.3s ease;
  }

  .form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
  }

  .btn-submit {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    border-radius: 5px;
    padding: 12px 30px;
    font-weight: 600;
    transition: transform 0.3s ease;
  }

  .btn-submit:hover {
    transform: translateY(-2px);
  }

  /* Contact button hover fix */
  .navbar-nav li a.btn.btn-primary:hover {
    background-color: #337ab7 !important;
    border-color: #2e6da4 !important;
    color: #fff !important;
  }
  </style>
</head>

<body>

  <div class="header header-1">
    <!-- TOPBAR -->
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 col-md-7">
            <div class="info">
              <div class="info-item">
                <span class="fa fa-phone"></span> 9129134553
              </div>
              <div class="info-item">
                <span class="fa fa-clock-o"></span> Mon-Sat: 10.00 AM - 06.00 PM
              </div>
              <div class="info-item">
                <span class="fa fa-envelope-o"></span> <a href="mailto:info@incorplusventure.com"
                  title="">steel plant virtual tour</a>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-5">
            <div class="request-quote pull-right">
              <a href="contact.php" title="">GET A QUOTE</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- NAVBAR SECTION -->
    <div class="navbar navbar-main">
      <div class="container container-nav">
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
              <img src="images/pic1.png" alt="Finanzi Logo" style="height: 60px; width: auto;" />
            </a>
          </div>

          <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown"
            data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
            <ul class="nav navbar-nav navbar-right">
  <li><a href="index.php">Home</a></li>
  <li><a href="about.php">About Us</a></li>
  <li><a href="department.php">Department</a></li>
  <li><a href="safety-guideline.php">Safety Guideline</a></li>
  <li><a href="virtual-gallery.php">Virtual Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="feedback.php">Feedback</a></li>
</ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- First Visit Modal -->
  <div class="modal fade" id="firstVisitModal" tabindex="-1" role="dialog" aria-labelledby="firstVisitModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="firstVisitModalLabel">
            <i class="fa fa-handshake-o"></i> Welcome to BHilai STEEL PLANT
          </h4>
        </div>
        <div class="modal-body">
          <p class="text-center" style="margin-bottom: 20px; color: #666;">
            We're excited to have you here! Please share your details so we can serve you better.
          </p>
          <form action="mail.php" method="POST">
            <div class="form-group">
              <label for="userName">Name *</label>
              <input type="text" class="form-control" id="userName" name="name" required>
            </div>
            <div class="form-group">
              <label for="userPhone">Phone Number *</label>
              <input type="tel" class="form-control" id="userPhone" name="phone" required>
            </div>
            <div class="form-group">
              <label for="userMessage">Message</label>
              <textarea class="form-control" id="userMessage" name="message" rows="3"
                placeholder="How can we help you?"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-submit">
                <i class="fa fa-paper-plane"></i> Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
  // Mobile dropdown toggle functionality
  $(document).ready(function() {
    // Handle mobile submenu clicks
    $('.dropdown-submenu > a').on('click', function(e) {
      if ($(window).width() < 768) {
        e.preventDefault();
        e.stopPropagation();

        var $parent = $(this).parent();
        var $submenu = $(this).next('.dropdown-menu');

        // Toggle the current submenu
        if ($parent.hasClass('open')) {
          $submenu.slideUp(300);
          $parent.removeClass('open');
        } else {
          // Close other open submenus
          $('.dropdown-submenu').removeClass('open');
          $('.dropdown-submenu .dropdown-menu').slideUp(300);

          // Open current submenu
          $submenu.slideDown(300);
          $parent.addClass('open');
        }
      }
    });

    // Prevent dropdown from closing when clicking on submenu items
    $('.dropdown-menu').on('click', function(e) {
      if ($(window).width() < 768) {
        e.stopPropagation();
      }
    });

    // Close submenus when main dropdown is closed
    $('.dropdown').on('hidden.bs.dropdown', function() {
      $('.dropdown-submenu .dropdown-menu').hide();
      $('.dropdown-submenu').removeClass('open');
    });

    // Reset on window resize
    $(window).resize(function() {
      if ($(window).width() >= 768) {
        $('.dropdown-submenu .dropdown-menu').removeAttr('style');
        $('.dropdown-submenu').removeClass('open');
      }
    });

    // Modified modal functionality - show after 10 seconds
    function showFirstVisitModal() {
      const hasVisited = localStorage.getItem('hasVisited');
      if (!hasVisited) {
        // Show modal after 10 seconds
        setTimeout(function() {
          $('#firstVisitModal').modal('show');
          localStorage.setItem('hasVisited', 'true');
          localStorage.setItem('visitTime', Date.now());
        }, 10000); // 10 seconds delay
      }
    }

    // Clear localStorage every 15 minutes
    function clearStorageAfter15Min() {
      const visitTime = localStorage.getItem('visitTime');
      if (visitTime) {
        const currentTime = Date.now();
        const timeDiff = currentTime - parseInt(visitTime);
        const fifteenMinutes = 15 * 60 * 1000; // 15 minutes in milliseconds

        if (timeDiff >= fifteenMinutes) {
          localStorage.removeItem('hasVisited');
          localStorage.removeItem('visitTime');
        }
      }
    }

    // Handle form submission
    $('#contactForm').on('submit', function(e) {
      e.preventDefault();

      const formData = {
        name: $('#userName').val(),
        phone: $('#userPhone').val(),
        message: $('#userMessage').val()
      };

      // Here you can add your form submission logic
      console.log('Form submitted:', formData);

      // Show success message
      alert('Thank you for your message! We will get back to you soon.');

      // Close modal
      $('#firstVisitModal').modal('hide');

      // Reset form
      $('#contactForm')[0].reset();
    });

    // Initialize modal check
    clearStorageAfter15Min();
    showFirstVisitModal();

    // Set interval to check and clear storage every minute
    setInterval(clearStorageAfter15Min, 60000);
  });
  </script>

</body>

</html>