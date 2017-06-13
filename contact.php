<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Contact</title>
        <style>
            .contact-sub {
                display: block;
            }
            select {
                margin-top: 5px;
                border: 1px solid #000;
                width: 100%;
            }
        </style>
    </head>
    <body>
    	<div class="wrapper">
            <?php require_once('components/header.html'); ?>
            <?php require_once('components/navigation.html'); ?>
            <div class="nav-toggle-container">
                <a href="#nav" class="nav-toggle"></a>
            </div>
            <?php require_once('components/responsive-nav.html'); ?>
            <div class="secondary-banner-container">
                <div class="secondary-banner">
                    Contact Us
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>Contact Us</h1>

                    <h3>Please send us your Suggestions and/or Comments</h3>

                    <form class="contact-form" name="contactForm" id="contactForm" method="post" action="javascript:void(0)">
                        <input type="hidden" id="required" name="required" value="Contact_name,Contact_email,Contact_phone">

                        <input type="hidden" id="recipientemail" name="recipientemail">

                        <input type="hidden" id="successmessage" name="successmessage" value="<p>Thank you for your inquiry. We will be in touch with you soon!</p>">
                        <input type="hidden" id="actiontype" name="actiontype" value="submit_request">
                        <input type="hidden" id="formtype" name="formtype" value="Contact Us">

                        <div class="form-section">
                            <label for="Department">Department :</label><br>
                            <select id="Department" name="Department">
                                <option value="" disabled selected>Please Select One...</option>
                                <optgroup label="To reach a Minister">
                                    <option value="secretary@standrewstpaul.com">minister@standrewstpaul.com</option>
                                </optgroup>
                                <optgroup label="To find out more about our Music">
                                    <option value="stapmusic@gmail.com">music@standrewstpaul.com</option>
                                </optgroup>
                                <optgroup label="To know more about or be involved with Outreach">
                                    <option value="brian@merrettimages.ca">outreach@standrewstpaul.com</option>
                                </optgroup>
                                <optgroup label="To learn more about our Children &amp; Youth programmes">
                                    <option value="grammy.shani@sympatico.ca">children@standrewstpaul.com</option>
                                </optgroup>
                                <optgroup label="General inquiries">
                                    <option value="info@standrewstpaul.com">info@standrewstpaul.com</option>
                                </optgroup>
                                <optgroup label="Feedback on our Website">
                                    <option value="dianeellison1@yahoo.com">communications@standrewstpaul.com</option>
                                </optgroup>
                            </select>
                        </div>
                        
                        <div class="form-section">
                            <label for="Full_Name">Name :</label><br>
                            <input type="text" id="Contact_name" name="Contact_name">
                        </div>
                        <div class="form-section">
                            <label for="Email">Email Address :</label><br>
                            <input type="email" id="Contact_email" name="Contact_email">
                        </div>
                        <div class="form-section">
                            <label for="Phone">Telephone # :</label><br>
                            <input type="text" id="Contact_phone" name="Contact_phone">
                        </div>
                        <div class="form-section">
                            <label for="Mobile">Mobile # :</label><br>
                            <input type="text" id="Mobile" name="Mobile">
                        </div>
                        <div class="form-section">
                            <label for="Comments">Suggestions / Comments</label>
                            <textarea id="Comments" name="Comments"></textarea>
                        </div>
                        <div class="form-section" style="margin:10px 0 0;">
                            <input type="submit" name="submit" class="site-btn" style="cursor:pointer;float:right;text-transform:uppercase;margin-bottom:0;font-size:12px;" onclick="return validateform(contactForm)"> 
                        </div>
                    </form>

                    <h1>How to Find Us</h1>

                    <p><span style="font-weight:700;">The Church of St. Andrew and St. Paul</span> is located on Sherbrooke Street West next door to the Mus&eacute;e des beaux-arts, at the corner of Redpath Street, two blocks east of Guy/Cote des Neiges.</p>

                    <img src="img/findus-map.jpg" style="width:100%;margin-bottom:10px;" class="quiet-garden-img">

                    <p>Public transit users can easily reach us via the Guy-Concordia Metro station or Bus #24, 165 or 166. For bus schedules, enter the bus stop code at <a href="http://www.stm.info/en" target="_blank">STM</a>.</p>

                    <ul class="church-list" style="margin-bottom:15px;">
                        <li>#24 Eastbound: 52167 at Sherbrooke and Bishop</li>
                        <li>#24 Westbound: 52166 at Sherbrooke and Bishop</li>
                        <li>#165 and 166 Southbound: 52096 at Cote des Neiges and St. Mathieu</li>
                        <li>#165 and 166 Northbound: 52113 at Guy and Sherbrooke</li>
                    </ul>

                    <p>If you're driving, parking is available on the street (meters are free until 1:00pm), or you may use the Trafalgar School parking lot on Simpson just below Docteur-Penfield (please place a church bulletin on your dashboard).</p>

                    <p>We invite parents to introduce children to our teachers in the Church School. Our supervised Cr&agrave;che is also open to newborns through to age 2.</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $("#Department").change(function(){
            var department = $("#Department option:selected").val();
            $("#recipientemail").val(department);
        });
    </script>
    <script src="http://www.digitalmarketingbox.com/unoapp/js/webenquiry.js"></script>
</html>