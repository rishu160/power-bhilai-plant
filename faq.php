<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Incorplus Venture - FAQ </title>
  <link rel="shortcut icon" href="images/logo1.png">

  <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="css/vendor/font-awesome.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
  body {
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    margin: 0;
    padding: 0;
    background: #f8f9fa;
    color: #333;
  }

  .hero-section {
    background: #667eea;
    color: white;
    padding: 80px 0;
    text-align: center;
  }

  .content-wrapper {
    padding: 60px 20px;
  }

  .faq-item {
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    margin-bottom: 15px;
    overflow: hidden;
  }

  .faq-question {
    padding: 20px;
    cursor: pointer;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 16px;
    font-weight: 600;
    color: #2d3748;
  }

  .faq-answer {
    padding: 0 20px 20px;
    display: none;
    font-size: 16px;
    color: #718096;
    line-height: 1.6;
  }

  .faq-icon {
    color: #667eea;
    transition: transform 0.3s ease;
  }

  .faq-item.active .faq-icon {
    transform: rotate(45deg);
  }

  .cta-section {
    background: #f8f9fa;
    padding: 60px 0;
    text-align: center;
  }

  .btn-primary-custom {
    background: #667eea;
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    font-size: 16px;
  }

  /* Responsive Enhancements */
  @media (max-width: 768px) {
    .hero-section {
      padding: 50px 10px;
    }

    .hero-section h1 {
      font-size: 2rem;
    }

    .content-wrapper {
      padding: 40px 10px;
    }

    .faq-question {
      font-size: 15px;
      flex-wrap: wrap;
    }

    .faq-answer {
      font-size: 15px;
    }

    .btn-primary-custom {
      padding: 10px 20px;
      font-size: 15px;
    }

    .cta-section h2 {
      font-size: 1.5rem;
    }

    .cta-section p {
      font-size: 14px;
    }
  }

  @media (max-width: 480px) {
    .faq-question {
      font-size: 14px;
    }

    .faq-answer {
      font-size: 14px;
    }

    .btn-primary-custom {
      padding: 10px 16px;
      font-size: 14px;
    }
  }
  </style>
</head>

<body>

  <!-- HEADER -->
  <?php include 'components/header.php'; ?>

  <!-- HERO SECTION -->
  <div class="hero-section">
    <div class="container">
      <h1 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; margin-bottom: 15px;">
        Frequently Asked Questions</h1>
      <p style="font-size: 16px;">Get quick answers to common questions</p>
    </div>
  </div>

  <!-- FAQ SECTION -->
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 col-12 mx-auto">

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              What services does Incorplus provide?
              <i class="fa fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
              We provide company incorporation, ITR filing, GST registration, Startup India certificate, MSME
              registration, trademark registration, and business consulting services.
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              How long does company incorporation take?
              <i class="fa fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
              Company incorporation typically takes 10-15 working days after all documents are submitted and verified.
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              What documents are needed for ITR filing?
              <i class="fa fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
              You need Form 16, bank statements, investment proofs, and any other income-related documents. We'll guide
              you through the complete list based on your specific case.
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              Who is eligible for Startup India certificate?
              <i class="fa fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
              Companies less than 10 years old with annual turnover under ₹100 crores and working on
              innovation/development are eligible for Startup India recognition.
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              What are the benefits of GST registration?
              <i class="fa fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
              GST registration provides legal recognition, input tax credit, easier interstate business, enhanced
              credibility, and compliance with tax laws.
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              How much do your services cost?
              <i class="fa fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
              Our pricing varies by service. We offer transparent pricing with no hidden costs. Contact us for specific
              quotes based on your requirements.
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              Do you provide post-service support?
              <i class="fa fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
              Yes, we provide ongoing support and guidance even after service completion. Our team is available to help
              with any questions or issues.
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              How can I track my application status?
              <i class="fa fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
              You can track your application by calling us at +91 7144 3300 or emailing us. We provide regular updates
              throughout the process.
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- CTA SECTION -->
  <div class="cta-section">
    <div class="container">
      <h2
        style="font-family: 'Montserrat', sans-serif; font-size: 2rem; font-weight: 600; color: #2d3748; margin-bottom: 15px;">
        Need More Help?</h2>
      <p style="color: #718096; margin-bottom: 25px; font-size: 16px;">Contact our expert team for personalized
        assistance</p>
      <a href="contact.php" class="btn-primary-custom">Contact Us</a>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include 'components/footer.php'; ?>

  <script src="js/vendor/jquery.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script>
  function toggleFaq(element) {
    const faqItem = element.parentElement;
    const answer = faqItem.querySelector('.faq-answer');

    if (faqItem.classList.contains('active')) {
      faqItem.classList.remove('active');
      answer.style.display = 'none';
    } else {
      document.querySelectorAll('.faq-item.active').forEach(item => {
        item.classList.remove('active');
        item.querySelector('.faq-answer').style.display = 'none';
      });

      faqItem.classList.add('active');
      answer.style.display = 'block';
    }
  }
  </script>
</body>

</html>