<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p>Copyright © 2026 <a href="#">Abe Travel</a> Company. All rights reserved.
          <br>Design: <a href="#" target="_blank" title="free CSS templates">Design and Hosted by</a> : <a href="#">Abe</a>
        </p>
      </div>
    </div>
  </div>
</footer>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<!-- <script src="assets/js/wow.js"></script> -->
<script src="assets/js/tabs.js"></script>
<script src="assets/js/popup.js"></script>
<script src="assets/js/custom.js"></script>

<script>
  $(".option").click(function() {
    $(".option").removeClass("active");
    $(this).addClass("active");
  });
</script>


<script>
  document.getElementById("reservation-form").addEventListener("submit", function(event) {

    event.preventDefault();


    // Get form values

    const name = document.getElementById("name").value.trim();

    const phone = document.getElementById("phone").value.trim();

    const email = document.getElementById("email").value.trim();

    const guests = document.getElementById("guests").value;

    const tourDate = document.getElementById("tour_date").value;

    const pickup = document.getElementById("pickup").value.trim();

    const message = document.getElementById("message").value.trim();


    // Your WhatsApp number
    // Use international format WITHOUT +
    // Example Tanzania: 255772816595

    const whatsappNumber = "255772816595";


    // Create WhatsApp message

    const whatsappMessage = `

*NEW TOUR BOOKING*

*Tour:* Stone Town City Tour

━━━━━━━━━━━━━━━━━━

*Customer Details*

*Name:* ${name}

*Phone:* ${phone}

*Email:* ${email || "Not provided"}

*Number of Guests:* ${guests}

*Tour Date:* ${tourDate}

*Pickup Location:* ${pickup || "Not provided"}

━━━━━━━━━━━━━━━━━━

*Special Request:*

${message || "No special request"}

━━━━━━━━━━━━━━━━━━

Thank you.
Abe Tours & Safaris

`;


    // Encode message for URL

    const encodedMessage =
      encodeURIComponent(whatsappMessage);


    // Create WhatsApp URL

    const whatsappURL =
      `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;


    // Open WhatsApp

    window.open(whatsappURL, "_blank");

  });
</script>

<script>
  (function() {
    function loadTailorTalkWhatsAppWidget(callback) {
      var script = document.createElement('script');
      script.src = "https://plugins.tailortalk.ai/widget_whatsapp.js";
      script.onload = callback;
      document.head.appendChild(script);
    }

    loadTailorTalkWhatsAppWidget(function() {
      window.TailorTalkWhatsApp && window.TailorTalkWhatsApp.init({
        "agentId": "public",
        "whatsappConfig": {
          "businessInfo": {
            "phoneNumber": "255772816595"
          },
          "buttonText": "Talk with us",
          "welcomeMessage": "Hello 👋\\nHow can we help you today?"
        },
        "position": "right"
      });
    });
  })();
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {

    const preloader = document.getElementById("zan-preloader");

    if (preloader) {

      setTimeout(function() {
        preloader.classList.add("hide");
      }, 500);

    }

  });
</script>


<script>
  // Disable page inspection

document.addEventListener('keydown', function (e) {

    // Disable Ctrl + U
    if (e.ctrlKey && e.key.toLowerCase() === 'u') {
        e.preventDefault();
        return false;
    }

    // Disable Ctrl + Shift + I
    if (e.ctrlKey && e.shiftKey && e.key.toLowerCase() === 'i') {
        e.preventDefault();
        return false;
    }

    // Disable Ctrl + Shift + J
    if (e.ctrlKey && e.shiftKey && e.key.toLowerCase() === 'j') {
        e.preventDefault();
        return false;
    }

    // Disable Ctrl + Shift + C
    if (e.ctrlKey && e.shiftKey && e.key.toLowerCase() === 'c') {
        e.preventDefault();
        return false;
    }

    // Disable F12
    if (e.key === 'F12') {
        e.preventDefault();
        return false;
    }
});

// Disable right-click
document.addEventListener('contextmenu', function (e) {
    e.preventDefault();
});
</script>