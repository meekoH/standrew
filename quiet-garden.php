<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - About</title>
        <style>
            .about-sub {
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
                    About Us
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>The Quiet Garden</h1>
                    <img src="img/garden-img1.jpg" class="quiet-garden-img">
                    <p><span style="color:#149371;">Lord, thy call we answer.<br>
                        Take us in thy care.<br>
                        Train us in thy garden.<br>
                        In thy work to share.</span></p>

                    <p>Between the church and the Mus&eacute;e des beaux arts to the east, is the Quiet Garden, a bicentennial project that opened in 2003. It provides a haven for reflection in the busy downtown neighbourhood. During the summer, it is often the site for Bible Study and post-service receptions. The entrance off Sherbrooke Street is open seasonally from 9 a.m. to 4 p.m. Our Quiet Garden is a spiritual oasis in the city; a place for busy people to find a quiet interlude for prayer and meditation. Everyone is welcome to enter into this beautiful and secure space. It is filled with life and growth and colour, reminders of God's reassuring work in our world. We hope that in our garden, visitors, friends and neighbours will find solace, serenity and the radiant presence of our risen Lord, who first came to his followers in a garden.</p>

                    <div id="garden-slider">
                        <ul class="slides">
                            <li>
                                <img src="img/Gallery/Quiet_Garden/garden-img1.jpg">
                                <p class="flex-caption">This vacant space between the and the Musée des beaux arts before 2003</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Quiet_Garden/garden-img2.jpg">
                                <p class="flex-caption">A lot of hard work transformed it into a peaceful garden</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Quiet_Garden/garden-img3.jpg">
                                <p class="flex-caption">A place to reflect</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Quiet_Garden/garden-img4.jpg">
                                <p class="flex-caption">Our gardening committee works with joy</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Quiet_Garden/garden-img5.jpg">
                                <p class="flex-caption">Looking toward Sherbrooke Street, the Mus&eacute;e des beaux arts on the left</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Quiet_Garden/garden-img6.jpg">
                                <p class="flex-caption">A popular spot for family gatherings</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Quiet_Garden/garden-img7.jpg">
                                <p class="flex-caption">Intercultural Coffee &amp; Conversation in the garden...</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Quiet_Garden/garden-img8.jpg">
                                <p class="flex-caption">...always a popular event after the Sunday service.</p>
                            </li>
                        </ul>
                    </div>
                    <div id="garden-carousel">
                        <ul class="slides">
                            <li><img src="img/Gallery/Quiet_Garden/garden-img1-thumb.jpg"></li>
                            <li><img src="img/Gallery/Quiet_Garden/garden-img2-thumb.jpg"></li>
                            <li><img src="img/Gallery/Quiet_Garden/garden-img3-thumb.jpg"></li>
                            <li><img src="img/Gallery/Quiet_Garden/garden-img4-thumb.jpg"></li>
                            <li><img src="img/Gallery/Quiet_Garden/garden-img5-thumb.jpg"></li>
                            <li><img src="img/Gallery/Quiet_Garden/garden-img6-thumb.jpg"></li>
                            <li><img src="img/Gallery/Quiet_Garden/garden-img7-thumb.jpg"></li>
                            <li><img src="img/Gallery/Quiet_Garden/garden-img8-thumb.jpg"></li>
                        </ul>
                    </div>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#about').addClass('selected');
        $('#about-responsive').addClass('selected');
        $('#quietGarden').addClass('selected');
    </script>
</html>