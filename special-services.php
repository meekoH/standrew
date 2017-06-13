<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Worship</title>
        <style>
            .worship-sub {
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
                    Worship
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>Special Services</h1>

                    <img src="img/service-img1.jpg" class="quiet-garden-img">
                    <p>The Church Calendar unfolds through the year, from the joy of Christ's birth at Christmas through the sorrow of Good Friday and the triumphant Easter resurrection. The Calendar also reflects the tempo of modern city life with its recurring opportunities for reflection and service. Plan to attend. You will always find a welcome.</p>

                    <h3>Holy Communion</h3>
                    <p>Six times a year, we celebrate Holy Communion in the sanctuary of our church. These are World Communion Sunday, Advent I, Lent I, Easter, the Last Sunday in May and Maundy Thursday. The weeks following our Sunday morning communion services we hold a smaller celebration of Holy Communion in the chapel of the sanctuary following the regular 11:00 a.m. service.<br>
                        <a href="holy-communion.php">Click here for more details.</a></p>

                    <h3>Christmas Services</h3>
                    <p>Christmas is the most joyous time of the year, and The Church of St. Andrew and St. Paul invites you to share in the worship, music and anticipation of the great gift of Christ's birth.  Services and dates will be published on this websiite prior to the Christmas Season.<br>
                        <a href="christmas-services.php">Click here for more details.</a></p>

                    <h3>Easter and Lent</h3>
                    <p>The season of Lent is a time for reflection and meditation on the sacrifice that Jesus Christ, the Son of God, made for the world. His death for our sins and His rising again for our new life shape this season, which begins with sober reflection and culminates in the joyous celebration of the Resurrection. We invite you to share the observance of Lent and Easter with us at The Church of St. Andrew and St. Paul.  Please click on the tab EVENTS on our Home Page to check the Holy Week and Easter Services.<br>
                        <a href="easter-lent.php">Click here for more details.</a></p>

                    <h3>Family Milestones</h3>
                    <p>The members of our church family are families of all ages who witness God’s grace at those important moments of life – the celebration of weddings and baptisms and the search for strength at times of grieving. If you would like more information about your family milestones, please contact us at <a href="mailto:info@standrewstpaul.com">info@standrewstpaul.com</a>.</p>

                    <div id="service-slider">
                        <ul class="slides">
                            <li>
                                <img src="img/Gallery/Special_Services/service-img1.jpg">
                                <p class="flex-caption">A Baptism in the Chancel</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Special_Services/service-img2.jpg">
                                <p class="flex-caption">A Baptism in the Chancel</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Special_Services/service-img3.jpg">
                                <p class="flex-caption">Family marks child's Baptism</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Special_Services/service-img4.jpg">
                                <p class="flex-caption">Wedding Rehearsal</p>
                            </li>
                        </ul>
                    </div>
                    <div id="service-carousel" style="margin-bottom:15px;">
                        <ul class="slides">
                            <li><img src="img/Gallery/Special_Services/service-img1-thumb.jpg"></li>
                            <li><img src="img/Gallery/Special_Services/service-img2-thumb.jpg"></li>
                            <li><img src="img/Gallery/Special_Services/service-img3-thumb.jpg"></li>
                            <li><img src="img/Gallery/Special_Services/service-img4-thumb.jpg"></li>
                        </ul>
                    </div>

                    <h3>Other Special Occasions</h3>
                    <p>Woman's Missionary Sunday, Stewardship Sunday, Week of Prayer for Christian Unity, Church School Opening and Closing, the reception of new members, and Friendship Sunday are among other special services that take place during the Church year.<br>
                        <span style="font-style:italic;">Details will be added as they become available.</span></p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#worship').addClass('selected');
        $('#worship-responsive').addClass('selected');
        $('#specialServices').addClass('selected');
    </script>
</html>