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
                    <h1>Christmas Services</h1>

                    <p>Christmas is the most joyous time of the year, and The Church of St. Andrew and St. Paul invites you to share in the worship, music and anticipation of the great gift of Christ's birth.</p>

                    <p style="font-style:italic;">It should be noted that there is no reserved seating and no admission price for any of these services and concerts. You are encouraged to contribute when the offering plates are passed. Thank you.</p>

                    <p><span style="color:#149371;">Advent Chapel Services</span> - <span style="color:#149371;">12:30pm followed by lunch. On the 1st, 2nd &amp; 3rd Thursdays of December</span><br>
                        Amid the hurry and bustle of preparations for Christmas, these services of meditation offer respite and an opportunity for quiet reflection on the significance of Christmas.</p>

                    <p><span style="color:#149371;">First Sunday of Advent</span> - <span style="color:#149371;">11:00am</span><br>
                        We celebrate the Sacrament of Holy Communion. Ours is an open communion to which all Christians are welcome.</p>

                    <p><span style="color:#149371;">Children's Christmas Pageant</span> - <span style="color:#149371;">4:00 pm on the First Sunday in December</span><br>
                        The children of our congregation make the old story new once again with their performance of the Christmas Pageant.</p>

                    <p><span style="color:#149371;">CBC Christmas Sing-In</span> - <span style="color:#149371;">3:00 pm on the second Sunday in December</span><br>
                        The award-winning "CBC Christmas Sing-In" has been broadcast coast-to-coast from St. Andrew and St. Paul every Christmas for more than two decades.</p>

                    <p><span style="color:#149371;">Carols by Candlelight</span> - <span style="color:#149371;">7:00 pm on the third Sunday in December</span><br>
                        "Carols By Candlelight" is our Choir's special gift: music with a special sense of serenity and reverence. Following the choir's candle-lit procession, the air is filled with well-known carols sung by all, special music from the great organ, choral music, readings and meditation surrounded by the spectacular seasonal decorations in the sanctuary. For many, this is the highlight of our Christmas celebrations. Come and share this with us.</p>

                    <p><span style="color:#149371;">Family Christmas Services</span><br>
                        The Sunday before Christmas is Christmas Family Sunday. This service is designed for all ages and includes a special Christmas message for the children. On Christmas Eve, there's an early service especially for families with young children.</p>

                    <p><span style="color:#149371;">Christmas Eve Candlelight Service</span> - <span style="color:#149371;">11:00 pm, December 24</span><br>
                        Our Christmas Eve Candlelight Service with music, Christmas message, the lighting of the Christ Candle and Westminster chimes is where many members and friends start their Veill&eacute;e de No&euml;l.</p>

                    <div id="christmas-slider">
                        <ul class="slides">
                            <li>
                                <img src="img/Gallery/Christmas/christmas-img1.jpg">
                                <p class="flex-caption">Christmas Pageant</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Christmas/christmas-img2.jpg">
                                <p class="flex-caption">Christmas Pageant</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Christmas/christmas-img3.jpg">
                                <p class="flex-caption">Christmas Pageant</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Christmas/christmas-img4.jpg">
                                <p class="flex-caption">Christmas Pageant</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Christmas/christmas-img5.jpg">
                                <p class="flex-caption">Christmas Pageant</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Christmas/christmas-img6.jpg">
                                <p class="flex-caption">Christmas Pageant</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Christmas/christmas-img7.jpg">
                                <p class="flex-caption">Church During the Christmas Season</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Christmas/christmas-img8.jpg">
                                <p class="flex-caption">Church During the Christmas Season</p>
                            </li>
                        </ul>
                    </div>
                    <div id="christmas-carousel" style="margin-bottom:15px;">
                        <ul class="slides">
                            <li><img src="img/Gallery/Christmas/christmas-img1-thumb.jpg"></li>
                            <li><img src="img/Gallery/Christmas/christmas-img2-thumb.jpg"></li>
                            <li><img src="img/Gallery/Christmas/christmas-img3-thumb.jpg"></li>
                            <li><img src="img/Gallery/Christmas/christmas-img4-thumb.jpg"></li>
                            <li><img src="img/Gallery/Christmas/christmas-img5-thumb.jpg"></li>
                            <li><img src="img/Gallery/Christmas/christmas-img6-thumb.jpg"></li>
                            <li><img src="img/Gallery/Christmas/christmas-img7-thumb.jpg"></li>
                            <li><img src="img/Gallery/Christmas/christmas-img8-thumb.jpg"></li>
                        </ul>
                    </div>

                    <p><a href="special-services.php"><i class="fa fa-arrow-circle-o-left"></i> Back to Special Services</a></p>
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