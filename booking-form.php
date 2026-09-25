<?php

// The tour name must be provided by the page that includes this file
$tourName = $tourName ?? "Zanzibar Tour";

?>

<section class="reservation-form" id="booking">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <form id="reservation-form">

                    <div class="row">

                        <!-- ============================= -->
                        <!-- FORM TITLE -->
                        <!-- ============================= -->

                        <div class="col-lg-12">

                            <h4>
                                Book Your
                                <em><?php echo htmlspecialchars($tourName); ?></em>
                            </h4>

                            <p>
                                Fill in the form below and send your booking
                                request directly to us on WhatsApp.
                            </p>

                        </div>


                        <!-- ============================= -->
                        <!-- CUSTOMER NAME -->
                        <!-- ============================= -->

                        <div class="col-lg-6">

                            <fieldset>

                                <label for="booking_name">
                                    Your Name
                                </label>

                                <input
                                    type="text"
                                    id="booking_name"
                                    name="name"
                                    placeholder="Your full name"
                                    autocomplete="name"
                                    required
                                >

                            </fieldset>

                        </div>


                        <!-- ============================= -->
                        <!-- PHONE -->
                        <!-- ============================= -->

                        <div class="col-lg-6">

                            <fieldset>

                                <label for="booking_phone">
                                    Phone Number
                                </label>

                                <input
                                    type="tel"
                                    id="booking_phone"
                                    name="phone"
                                    placeholder="+255 XXX XXX XXX"
                                    autocomplete="tel"
                                    required
                                >

                            </fieldset>

                        </div>


                        <!-- ============================= -->
                        <!-- EMAIL -->
                        <!-- ============================= -->

                        <div class="col-lg-6">

                            <fieldset>

                                <label for="booking_email">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    id="booking_email"
                                    name="email"
                                    placeholder="your@email.com"
                                    autocomplete="email"
                                >

                            </fieldset>

                        </div>


                        <!-- ============================= -->
                        <!-- NUMBER OF GUESTS -->
                        <!-- ============================= -->

                        <div class="col-lg-6">

                            <fieldset>

                                <label for="booking_guests">
                                    Number of Guests
                                </label>

                                <select
                                    name="guests"
                                    id="booking_guests"
                                    class="form-select"
                                    required
                                >

                                    <option value="">
                                        Select guests
                                    </option>

                                    <option value="1">
                                        1 Guest
                                    </option>

                                    <option value="2">
                                        2 Guests
                                    </option>

                                    <option value="3">
                                        3 Guests
                                    </option>

                                    <option value="4">
                                        4 Guests
                                    </option>

                                    <option value="5+">
                                        5+ Guests
                                    </option>

                                </select>

                            </fieldset>

                        </div>


                        <!-- ============================= -->
                        <!-- TOUR DATE -->
                        <!-- ============================= -->

                        <div class="col-lg-6">

                            <fieldset>

                                <label for="booking_date">
                                    Tour Date
                                </label>

                                <input
                                    type="date"
                                    id="booking_date"
                                    name="tour_date"
                                    required
                                >

                            </fieldset>

                        </div>


                        <!-- ============================= -->
                        <!-- PICKUP LOCATION -->
                        <!-- ============================= -->

                        <div class="col-lg-6">

                            <fieldset>

                                <label for="booking_pickup">
                                    Pickup Location
                                </label>

                                <input
                                    type="text"
                                    id="booking_pickup"
                                    name="pickup"
                                    placeholder="Hotel / Location"
                                >

                            </fieldset>

                        </div>


                        <!-- ============================= -->
                        <!-- MESSAGE -->
                        <!-- ============================= -->

                        <div class="col-lg-12">

                            <fieldset class="custom-textarea">

                                <label for="booking_message">
                                    Message
                                </label>

                                <textarea
                                    id="booking_message"
                                    name="message"
                                    rows="5"
                                    placeholder="Any special request?"
                                ></textarea>

                            </fieldset>

                        </div>


                        <!-- ============================= -->
                        <!-- SUBMIT -->
                        <!-- ============================= -->

                        <div class="col-lg-12">

                            <fieldset>

                                <button
                                    type="submit"
                                    class="main-button"
                                >

                                    Send Booking Request
                                    <i class="fa fa-whatsapp"></i>

                                </button>

                            </fieldset>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>


<script>

document.getElementById("reservation-form").addEventListener(
    "submit",
    function(event) {

        event.preventDefault();


        // =====================================
        // GET FORM VALUES
        // =====================================

        const name =
            document.getElementById("booking_name").value.trim();

        const phone =
            document.getElementById("booking_phone").value.trim();

        const email =
            document.getElementById("booking_email").value.trim();

        const guests =
            document.getElementById("booking_guests").value;

        const tourDate =
            document.getElementById("booking_date").value;

        const pickup =
            document.getElementById("booking_pickup").value.trim();

        const message =
            document.getElementById("booking_message").value.trim();


        // =====================================
        // TOUR NAME FROM PHP
        // =====================================

        const tourName =
            <?php echo json_encode($tourName); ?>;


        // =====================================
        // YOUR WHATSAPP NUMBER
        // =====================================

        const whatsappNumber = "255772816595";


        // =====================================
        // CREATE WHATSAPP MESSAGE
        // =====================================

        const whatsappMessage =

`*NEW TOUR BOOKING*

*Tour:* ${tourName}

━━━━━━━━━━━━━━━━━━

*CUSTOMER DETAILS*

*Name:* ${name}

*Phone:* ${phone}

*Email:* ${email || "Not provided"}

*Guests:* ${guests}

*Tour Date:* ${tourDate}

*Pickup Location:* ${pickup || "Not provided"}

━━━━━━━━━━━━━━━━━━

*SPECIAL REQUEST*

${message || "No special request"}

━━━━━━━━━━━━━━━━━━

Abe Tours & Safaris`;


        // =====================================
        // ENCODE MESSAGE
        // =====================================

        const encodedMessage =
            encodeURIComponent(whatsappMessage);


        // =====================================
        // WHATSAPP URL
        // =====================================

        const whatsappURL =
            `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;


        // =====================================
        // OPEN WHATSAPP
        // =====================================

        window.open(
            whatsappURL,
            "_blank"
        );

    }
);

</script>