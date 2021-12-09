<?php
include('header.php')
?>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30161.87583376211!2d72.84454663261376!3d19.097366726757738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b42151fed3%3A0xac3b84f7db9d9318!2sVile%20Parle%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1639050874576!5m2!1sen!2sin" class="w-100" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<div class="d-lg-flex  flex-lg-row  justify-content-lg-evenly align-items-lg-center d-sm-flex flex-sm-column ">

    <div class="col-lg-4">
        <div>
            <div>
                <h1 class="contact-title">
                    Get in touch with us &<br>
                    send us message today!
                </h1>

                <h4>Location:</h4>
                <p>198 West 21th Street, Suite 721<br>
                    New York, NY 10010</p>
            </div>

            <div>

                <h4>Information:</h4>
                <p>Email: Dynamiclayers.Net<br>
                    Phone: +88 (0) 101 0000 000</p>
            </div>

        </div>

    </div>
    <br><br>
    <div class="">

        <form action="" method="post">
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
            </div>
            <div class=""><button type="button" class="btn btn-dark">Send Message</button></div>
        </form>

    </div>

</div>


<?php
include('footer.php')
?>