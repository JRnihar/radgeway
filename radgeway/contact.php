<?php

$currentPage = 'contact';

$title = "Contact";

$keywords = "";

$description = "";

include("head.php");

?>

<?php include("header.php"); ?>
<?php
// Save as contact.php
// Add error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $name = $_POST['name'] ?? 'Not provided';
    $email = $_POST['email'] ?? 'Not provided';
    $message = $_POST['message'] ?? 'Not provided';
    
    // For localhost testing (simulates email sending without actually sending)
    $success = false;
    
    // Email details
    $to = "info@radgewayservice.com";
    $subject = "New Visa Journey Request from $name";
    
    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Headers
    $headers = "From: website@radgewayservice.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Check if we're on localhost (development) or live server
    if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '127.0.0.1') {
        // On localhost: log the email instead of sending it
        $log_file = 'email_log.txt';
        $log_content = date('Y-m-d H:i:s') . " - TO: $to - SUBJECT: $subject - CONTENT: $email_content\n\n";
        file_put_contents($log_file, $log_content, FILE_APPEND);
        $success = true; // Simulate success for testing
    } else {
        // On live server: actually send the email
        $success = mail($to, $subject, $email_content, $headers);
    }
    
    // Store result in session rather than redirecting
    session_start();
    if ($success) {
        $_SESSION['form_status'] = 'success';
        $_SESSION['form_message'] = 'Thank you! Your message has been sent successfully.';
    } else {
        $_SESSION['form_status'] = 'error';
        $_SESSION['form_message'] = 'Sorry, there was an error sending your message. Please try again later.';
    }
    
    // Redirect back to the same page without status parameter
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}

// Get status from session if exists
session_start();
$status = isset($_SESSION['form_status']) ? $_SESSION['form_status'] : '';
$message = isset($_SESSION['form_message']) ? $_SESSION['form_message'] : '';

// Clear session variables after reading them
if (isset($_SESSION['form_status'])) {
    unset($_SESSION['form_status']);
    unset($_SESSION['form_message']);
}
?>


<style>
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            display: <?php echo ($status == 'success') ? 'block' : 'none'; ?>;
        }
        
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            display: <?php echo ($status == 'error') ? 'block' : 'none'; ?>;
        }
    </style>

     <!-- Status Messages -->
    <div class="success-message"><?php echo $message; ?></div>
    <div class="error-message"><?php echo $message; ?></div>


<!--=====pages hero start=======-->

      <div class="page-hero-area _relative" style="background-image: url(assets/img/bg/page-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>Contact</h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="index.php">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="page-hero-element1 aniamtion-key-2" src="assets/img/shapes/page-header-element1.svg" alt="">
        <img class="page-hero-element2 aniamtion-key-3" src="assets/img/shapes/page-header-element2.svg" alt="">
        <img class="page-hero-element3 aniamtion-key-1" src="assets/img/shapes/page-header-element1.svg" alt="">
        <img class="page-hero-element4 aniamtion-key-2" src="assets/img/shapes/page-header-element2.svg" alt="">
      </div>

      <!--=====pages hero end=======-->

      
            <div class="contact7" style="background-color: #F3F6F6;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="hadding2 contact7-hadding">
                                <span class="span">Contact Us</span>
                                <div class="space16"></div>
                                <h1>Write Message to Our Radgeway Service</h1>
                                <div class="space16"></div>
                                <p>Whether you have questions about our services, want to book a consultation, or need visa application, </p>
                                <div class="space8"></div>
                               
<form action="send_email.php" method="post">
    <div class="contact7-form">
        <div class="contact7-input">
            <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div class="contact7-input">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="contact7-input">
            <textarea name="message" cols="30" rows="3" placeholder="Write a Message*" required></textarea>
        </div>
        <div class="space32"></div>
        <button type="submit" class="theme-btn5 font-f-7">Claim Your Visa Journey!</button>
    </div>
</form>

                            </div>
                        </div>
        
                        <div class="col-lg-6">
                            <div class="contact-map contact-map2">
                                <div class="img100 img5" style="z-index: 9; position: relative;">
                                    <img src="assets/img/image/contact-page.png" alt="">
                                </div>
                              </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact7-icon-box contact7-icon-box2">
                                <div class="contact7-icon">
                                    <img src="assets/img/icons/page-contact-icon1.svg" alt="">
                                </div>
                                <div class="contact7-iocn-hadding">
                                    <h4><a href="#">Office Address</a></h4>
                                    <div class="space6"></div>
                                    <a href="#">Xavire Business Center, Floor M2, Block 21 </a>
                                    <a href="#">Office no 07,Al Muteena, Dubai, UAE</a>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-4">
                            <div class="contact7-icon-box contact7-icon-box2">
                                <div class="contact7-icon">
                                    
                                      <img src="assets/img/icons/page-contact-icon3.svg" alt="">
                                </div>
                                <div class="contact7-iocn-hadding">
                                    <h4><a href="#">Contact Number</a></h4>
                                    <div class="space6"></div>
                                    <a href="tel:+921-888-0022">+971 56 578 7431</a><br>
                                    <a href="tel:+921-777-0044">+971 55 149 2260 </a>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-4">
                            <div class="contact7-icon-box contact7-icon-box2">
                                <div class="contact7-icon">
                                  <img src="assets/img/icons/page-contact-icon2.svg" alt="">
                                </div>
                                <div class="contact7-iocn-hadding">
                                    <h4><a href="#">Email Address</a></h4>
                                    <div class="space6"></div>
                                    <a href="mailto:hello@visafast.com">Info@radgewayservice.com</a> <br>
                                    <a href="mailto:support@visafast.com">Admin@radgewayservice.com </a>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
              </div>



<?php include("footer.php"); ?>

<!--=====contact end=======-->
<!--=====JS=======-->

<script>
document.querySelector("form").addEventListener("submit", function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("send_email.php", {
        method: "POST",
        body: formData,
    })
    .then(response => response.text())
    .then(data => {
        if (data.trim() === "success") {
            alert("Your message has been sent successfully!");
        } else {
            alert("Failed to send message. Please try again.");
        }
    });
});
</script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/fontawesome.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/mobile-menu.js"></script>
<script src="assets/js/tilt.jquery.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script src="assets/js/jquery.nice-select.js"></script>
<script src="assets/js/jquery.lineProgressbar.js"></script>
<script src="assets/js/mobile-meanmenu.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- <script src="assets/js/modal-video.min.js"></script> -->
<!-- <script src="assets/js/jquery.fittext.js"></script>
        <script src="assets/js/jquery.lettering.js"></script>
        <script src="assets/js/jquery.textillate.js"></script> -->
<script src="assets/js/main.js"></script>