<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul</title>
        <style>
            .hidden-heading { visibility:hidden;pointer-events:none; }
            /* Mobile Stylings */
            @media screen and (max-width: 564px) {
                .hidden-heading { display:none; }
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
            <?php require_once('components/banner.html'); ?>
    		<div class="content home-content">
                <div class="home-section half">
                    <h2>Welcome to our growing intercultural community of compassion and hope in the heart of downtown Montreal!</h2>

                    <p>The powerful grace of the Word of God and glorious music fill our sanctuary every Sunday at 11 AM. Whether you seek a few quiet moments of reflection and prayer or an active role in fellowship and mission, you will be warmly greeted.</p>

                    <p><span style="font-style:italic;">"Jesus said to them again, 'Peace be with you. As the Father has sent me, even so I send you.'"</span><br>
                        - <span style="color:#149371;">John 20:21</span></p>
                </div><!--
                --><div class="home-section quarter">
                    <h2>Upcoming Events</h2>

                    <ul id="homeContainer">
                        <li class="home-event-container">
                            <span class="xmas-event-heading">Thursday, March 9</span>
                            <span class="xmas-event-desc">Lenten Chapel Service at 12:30 p.m.</span>
                            <span class="xmas-event-desc">Sermon: The Rev. Dr. Kay Diviney</span>
                        </li><!--
                        --><li class="home-event-container">
                            <span class="xmas-event-heading">Sunday, March 12</span>
                            <span class="xmas-event-desc">Worship Service at 11 a.m.</span>
                            <span class="xmas-event-desc">Sermon: The Rev. Dr. Kay Diviney</span>
                        </li><!--
                        --><li class="home-event-container">
                            <span class="xmas-event-heading">Wednesday, March 15</span>
                            <span class="xmas-event-desc">Evening Prayer &amp; Song (Taizé) at 6 p.m.</span>
                        </li><!--
                        --><li class="home-event-container">
                            <span class="xmas-event-heading">Thursday, March 16</span>
                            <span class="xmas-event-desc">Lenten Chapel Service at 12:30 p.m.</span>
                            <span class="xmas-event-desc">Sermon: The Rev. Dr. J.S.S. Armour</span>
                        </li>
                    </ul>
                </div><!--
                --><div class="home-section quarter">
                    <h2 class="hidden-heading">Upcoming Events</h2>

                    <ul id="homeContainer">
                        <li class="home-event-container">
                            <span class="xmas-event-heading">Sunday, March 19</span>
                            <span class="xmas-event-desc">Worship Service at 11 a.m.</span>
                            <span class="xmas-event-desc">Sermon: The Rev. Dr. Glenn Chestnutt</span>
                        </li><!--
                        --><li class="home-event-container">
                            <span class="xmas-event-heading">Thursday, March 23</span>
                            <span class="xmas-event-desc">Lenten Chapel Service at 12:30 p.m.</span>
                            <span class="xmas-event-desc">Sermon: The Rev. Dr. Lucille Marr</span>
                        </li><!--
                        --><li class="home-event-container">
                            <span class="xmas-event-heading">Sunday, March 26</span>
                            <span class="xmas-event-desc">Worship Service at 11 a.m.</span>
                            <span class="xmas-event-desc">Sermon: The Rev. Dr. Glenn Chestnutt</span>
                            <span class="xmas-event-desc">Annual General Meeting at 12:30p.m.</span>
                        </li><!--
                        --><li class="home-event-container">
                            <span class="xmas-event-heading">Thursday, March 30</span>
                            <span class="xmas-event-desc">Lenten Chapel Service at 12:30 p.m.</span>
                            <span class="xmas-event-desc">Sermon: The Rev. Dr. Dale Woods</span>
                        </li>
                    </ul>
                    <a href="events.php">
                        <div class="site-btn">Learn More <i class="fa fa-angle-right" style="margin-left:5px;" aria-hidden="true"></i></div>
                    </a>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#home').addClass('selected');
        $('#home-responsive').addClass('selected');
    </script>
</html>