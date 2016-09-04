<?php include_once"include/header.php";
?>
<section id="contact-info">
<div class="center">
</div>
</section>
<section id="contact-page">
<div class="container">
<div class="center">
<h2>Contact Us</h2>
<p class="lead">Drop Your Message</p>
</div>
    <form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">
        <div id="sendmessage">
            Your message has been sent. Thank you!
        </div>
        <div class="row">
            <div class="col-lg-4">
                <input type="text" class="form-control" name="name" placeholder="* Enter your full name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation">
                </div>
            </div>
            <div class="col-lg-4">
                <input type="text" class="form-control" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation">
                </div>
            </div>
            <div class="col-lg-4">
                <input type="text" class="form-control" name="subject" placeholder="Enter your subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation">
                </div>
            </div>
            <div class="col-lg-12" style="margin-top: 10px;">
                <textarea rows="12" name="message" class="input-block-level form-control" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
                <div class="validation">
                </div>
                <p>
                    <button class="btn btn-theme margintop10 pull-left" style="margin-top: 10px;" type="submit">Submit message</button>
                    <span class="pull-right">* Please fill all required form field, thanks!</span>
                </p>
            </div>
        </div>
    </form>
</div>
</section>
<?php
include_once"include/footer.php";
?>
<script src="js/validate.js"></script>