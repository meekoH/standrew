<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - About</title>
        <style>
            .about-sub {
                display: block;
            }
            iframe { min-height:500px;margin-bottom:15px; }
            @media screen and (max-width: 959px) and (min-width: 565px) {
                iframe { min-height:350px; }
            }
            @media screen and (max-width: 564px) {
                iframe { min-height:250px; }
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
                    <h1>About Us</h1>

                    <img src="img/about-img1.jpg" style="width:100%;margin-bottom:10px;border:2px solid #149371;">

                    <h3>The congregation of The Church of St. Andrew and St. Paul is a thriving intercultural Christian family in the dynamic city of Montreal.</h3>

                    <p style="font-style:italic;">We worship God in an atmosphere of beauty and reverence. We seek excellence in traditional church music and ministry to all ages, in service of Jesus Christ. We strive in joy and wisdom to share our resources with our neighbours. Rooted in the Presbyterian Heritage, we welcome everyone to share in the fellowship and mission of our congregation.</p>

                    <p>Presbyterians, like all Christians, are part of the body of Christ and as such are members of the ecumenical community that accepts Jesus Christ as Lord and Saviour. Within this broader community we have traditions, doctrines, beliefs and teachings unique to the Presbyterian Church in Canada and to the Reformed Tradition, of which it is part.</p>

                    <p>Teaching elders are Ministers of the congregation, and ruling elders share with them the work of pastoral care, oversight and leadership. Together, they form a Kirk Session that directs affairs in each local church.</p>

                    <p>An equal number of teaching and ruling elders govern the <a href="http://presbyterian.ca" target="_blank">Presbyterian Church in Canada</a> in a series of presbyteries, synods and assemblies, not that different from those established in Scotland almost 450 years ago. An elder, usually but not always a minister, is elected Moderator at the annual General Assembly and represents the national church for the following year.</p>

                    <p>The national office of The Presbyterian Church in Canada in Toronto houses about 75 staff members in three main areas: The Life and Mission Agency, Assembly Office and Support Services.</p>

                    <h1>A Year in the Life of...</h1>

                    <h2 id="heading2015">2015</h2>

                    <iframe src="http://livestream.com/accounts/2740376/events/5038866/videos/116651310/player?width=480&height=270&autoPlay=false&mute=false" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>

                    <h2 id="heading2014">2014</h2>

                    <iframe src="http://livestream.com/accounts/2740376/events/3934250/videos/82703793/player?autoPlay=false&height=360&mute=false&width=640" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#about').addClass('selected');
        $('#about-responsive').addClass('selected');
    </script>
</html>