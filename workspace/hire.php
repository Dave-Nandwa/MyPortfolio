<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Person Mininal Portfolio Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Person Minimal Portfolio Template">
    <meta name="keywords" content="Person HTML Template, Person Portfolio Template">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:600,500,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/animate.css"> <!-- Resource style -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css"> <!-- Resource style -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <div id="loading">
    </div>
    <div class="wrapper">
    <div class="nav-trigger visible-xs visible-sm" role="button" title="sweet hamburger">
      <div class="hamburger">
        <div class="icon"></div>
      </div>
    </div>

    <div id="nav-menu">
          <ul class="navigation">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul> <!-- cd-single-item-wrapper -->

          <div class="nav-social">
            <ul>
              <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
              <li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
              <li><a href="#"><i class="ion-social-github"></i></a></li>
            </ul>
          </div>
      </div>


      <!-- Homepage Main Section-->
      <div class="main">
        <section class="split-home">
          <section class="left-section personal wow fadeIn" data-wow-delay="0.4s">

          </section>
          <section class="right-section">
            <div class="top-nav hidden-xs hidden-sm wow fadeInDown" data-wow-delay="0.4s">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portfolio.html">Work</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
            <div class="contact-section">
              <div class="col-md-12">
                <h1 class="wow fadeInDown" data-wow-delay="0.5s">Hire me.</h1>
                <p class="wow fadeInDown" data-wow-delay="0.6s">
                 I would love to get a chance to work with you! Fill in the details below<br class="hidden-xs"> And I will reply within 24 hours.
                </p>
                <div class="contact-form wow fadeInDown" data-wow-delay="0.7s">
                   <form id="contact-form" method="post" action="hire.php">
                    <div class="messages"></div>
                    <div class="controls">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form_name">Firstname *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form_lastname">Lastname *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="form_message">Project Details *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Project Details..." rows="4" required="required" data-error="Please,leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <input type="submit" class="btn btn-success btn-send" value="Send message">
                         </div>
                       </div>
                     </div>
                   </form>
                 </div>
               </div>
             </div>

            <div class="footer-personal text-center wow fadeInDown" data-wow-delay="0.7s">
           <span class="footer-credits"> David Nandwa 2017 &trade;</span>
          </div>
         </section>
       </section>
      </div><!-- Main-->
    </div><!-- Wrapper -->

    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="assets/js/menu.js"></script>
    <script type="text/javascript" src="assets/js/contact.js"></script>
    <script type="text/javascript" src="assets/js/validator.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
     <script type="text/javascript" src="assets/js/contact_me.js"></script>
      <script type="text/javascript" src="assets/js/jqBootstrapValidation.js"></script>
  </body>
</html>
