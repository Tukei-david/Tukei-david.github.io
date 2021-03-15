<?php
    include("includes/header.php")
?>



<div class="donate-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xl-4 col-sm-12 col-12">

            </div>
            <div class="col-lg-8 col-xl-8 col-sm-12 col-12">
                <div class="header">
                    <h2>
                        <span>
                        </span>
                        Build what the world
                    </h2>
                    <h2 class="addPadding">
                        <a>needs next</a>
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
                    <h2>
                        <span>
                        </span>
                       payment details
                    </h2>
    </div>
    <form action="send.php">
        <div class="inline-input">
            <div style="width: 49%; float: left; margin-right: 2%;">
            <label for="">Your Name</label><br>
            <input type="text" name="name" id="name" style="">
            </div>
            <div  style="width: 49%; float: left;">
                <label for="">Email</label><br>
            <input type="email" name="email" id="email"><br><br>
            </div>
            <div  style="width: 49%; float: left;">
                <label for="">Amount</label><br>
            <input type="number" name="number" id="number"><br><br>
            </div>
            <div style="clear: both;">
                <label for="">Account Number</label><br>
            <input type="text" name="subject" id="subject"> <br><br>
            </div>
            

            <label for="">Message</label><br>
            <textarea name="message" id="message" cols="30" rows="8"></textarea>

            <button type="submit">Enquire now</button>
        </div>
    </form>
</div>


<?php
    include("includes/footer.php")
?>