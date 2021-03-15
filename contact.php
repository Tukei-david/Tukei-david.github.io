<?php
    include("includes/header.php")
?>



<div class="contact-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xl-4 col-sm-12 col-12">

            </div>
            <div class="col-lg-8 col-xl-8 col-sm-12 col-12">
                <div class="header">
                    <h2>
                        <span>
                        </span>
                        join us <a>and change the way</a>
                    </h2>
                    <h2 class="addPadding">
                        <a>the world tackles poverty</a>
                    </h2>
                    <!-- <h2 style="padding-left: 103px;">
                        the way the world<br> is tackling poverty
                    </h2> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-sec">
    <div class="header">
                    <h2 class="aos-init aos-animate" data-aos="fade-up">
                        <span>
                        </span>
                        support our work
                    </h2>
    </div>
    <form action="send.php" class="aos-init aos-animate" data-aos="fade-up">
        <div class="inline-input">
            <div style="width: 49%; float: left; margin-right: 2%;">
            <label for="">Your Name</label><br>
            <input type="text" name="name" id="name" style="">
            </div>
            <div  style="width: 49%; float: left;">
                <label for="">Email</label><br>
            <input type="email" name="email" id="email"><br><br>
            </div>
            <label for="">Subject</label><br>
            <input type="text" name="subject" id="subject"> <br><br>

            <label for="">Message</label><br>
            <textarea name="message" id="message" cols="30" rows="8"></textarea>

            <button type="submit">Enquire now</button>
        </div>
    </form>

    <p style="margin-top: 20px;" class="aos-init aos-animate" data-aos="fade-up">
        Stiftung Hilfsverein Nymphenburg Schloss Nymphenburg 11 80638 Munich GERMANY
        Version July 2018 for any inquiries please contact us under info@value-villages.org
    </p>
    <p class="aos-init aos-animate" data-aos="fade-up">
        For Direct Support please donate to Stiftung Hilfsverein Nymphenburg using the
        Keyword “Value Villages
        ”. HypoVereinsbank München Account: 154 088 11 Bank-No.:
        700 202 70 IBAN: DE74 7002 0270 0015 4088 11 BIC/SWIFT: HYVEDEMMXXX
    </p>

    <div id="map" class="aos-init aos-animate" data-aos="fade-up"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBonNIpaKFTE9hteJ3_hSlNjC0OEOQ8Ic&callback=initMap&libraries=&v=weekly"
      async
    ></script>
</div>


<?php
    include("includes/footer.php")
?>