<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Outreach</title>
        <style>
            .outreach-sub {
                display: block;
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
                    Outreach
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>Tyndale St-Georges Community Centre</h1>

                    <h3>A joint mission of the Presbyterian and Anglican churches in Little Burgundy active with community projects for all ages.</h3>

                    <img src="img/tyndale-img1.jpg" class="quiet-garden-img" style="width:100%;margin:0 0 15px 0;border:none;">

                    <p>In a community populated largely by immigrants, Tyndale helps find accommodation and employment and a warm welcome to a new culture. It provides multiple services for the whole family - English language teaching, social welfare, children's care and sports facilities, all under the direction of trained specialists. Volunteers are always welcome to help out in a wide variety of roles.</p>

                    <p style="padding-left:15px;"><span style="font-style:italic;">870 Richmond Square, Montreal, QC, H3J 1V7</span><br>
                        <i class="fa fa-phone-square"></i> : (514) 931-6265<br>
                        <i class="fa fa-globe"></i> : <a href="http://www.tyndalestgeorges.com/" target="_blank">http://www.tyndalestgeorges.com/</a><br>
                        <i class="fa fa-envelope-square"></i> : <a href="mailto:info@tyndalestgeorges.com">info@tyndalestgeorges.com</a></p>

                    <h3>Volunteer Needs at Tyndale:</h3>

                    <ul class="church-list">
                        <li>Several opportunities such as <span style="color:#4d4d4d;">: Reception replacement during the lunch hour (both at the Employment center and at Tyndale); baking for After School Program; graphic design for helping with brochures, pamphlets; etc.</span></li>
                        <li>Tyndale Treasures <span style="color:#4d4d4d;">: Cashier (11am - 2pm, Monday - Friday); Help with marketing and selling products online (ebay, etc); on call, or by-appointment transportation volunteers to pick up donations.</span></li>
                        <li>Evening Program (High School Students) <span style="color:#4d4d4d;">: Bilingual Tutors -Mondays and Wednesdays, 5:30pm - 7:30pm; Assistant in cooking program, Tuesdays 6:30pm - 8:30pm</span></li>
                        <li>Early Childhood (9am - 12pm) <span style="color:#4d4d4d;">: Assistant for special needs children; Speacial workshop for parents in a craft; Assiting in child stimulation program and free play (not needed now but probably in a couple months).</span></li>
                        <li>After School Program (3pm - 6pm) <span style="color:#4d4d4d;">: Tutoring elementary students with homework (not needed now, but probably will in the next couple months); recreation with elementary students (not needed now, but probably in the next couple months).</span></li>
                    </ul>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#outreach').addClass('selected');
        $('#outreach-responsive').addClass('selected');
        $('#tyndale').addClass('selected');
    </script>
</html>