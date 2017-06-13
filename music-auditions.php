<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Music</title>
        <style>
            .music-sub {
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
                    Music
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>Auditions 2015/2016</h1>

                    <h3>Professional Choristers</h3>
                    <p>If you are interested in auditioning as a professional chorister at the Church of St. Andrew and St. Paul for the upcoming season, please contact Dr. Jean-Sébastien Vallée at <a href="mailto:info@jsvallee.com">info@jsvallee.com</a>.</p>

                    <h3 style="float:left;margin-top:10px;width:100%;">Volunteer Choristers</h3>
                    <p style="clear:both;">If you wish to audition as a <span style="font-weight:700;">volunteer</span> chorister, please prepare your voice part and the melody of the hymn "Come down, O love divine" and the Mendelssohn chorus "How lovely are the messengers" in the file below, and contact Jean-Sébastien Vallée at the music office at <a href="mailto:info@jsvallee.com">info@jsvallee.com</a> to schedule an audition.</p>

                    <a href="pdf/Choral_Volunteer.pdf" target="_blank">
                        <div class="site-btn">
                            Volunteer Chorister Audition Material
                        </div>
                    </a>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#music').addClass('selected');
        $('#music-responsive').addClass('selected');
        $('#musicAuditions').addClass('selected');
    </script>
</html>