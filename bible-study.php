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
                    <h1>Bible Study</h1>

                    <h3>Please join us...</h3>
                    
                    <img src="img/bible-img1.jpg" class="quiet-garden-img">
                    
                    <p><span style="font-weight:700;">Date</span>: Every Thursday</p>

                    <p><span style="font-weight:700;">Time</span>: 11:00 - 12:00</p>
                    
                    <p><span style="font-weight:700;">Where</span>: Church of St Andrew and St Paul</p>

                    <p>You’re invited to join us as we study the Word of God in an informal, relaxed, inquiring atmosphere every Thursday. We are a community formed by the Gospel of Jesus Christ and the shared study of Scripture encourages, comforts, and guides us in our life of faith. Rev Jack Archibald leads us in seeking the loving God revealed in Scripture. No special "expertise" is required - bring your faith, your doubts and your questions <span style="font-weight:700;">Thursdays from 11:00 am to noon</span>. Please enter at 3415 Redpath Street.</p>

                    <!-- <p>Please join us as we gather together to study the Word of God. We are a community formed by the Gospel of Jesus Christ and the shared study of Scripture encourages, comforts, and guides us in our life of faith. Our ministers lead us in Bible Study each week. Bible Study meets <span style="font-weight:700;">Thursdays at 11:00 am</span>.</p>

                    <p>No level of "expertise" is expected! Bring your enthusiasm, insights or questions about the loving God revealed to us in Scripture. Enter by the side door at 3415 Redpath Street.</p> -->

                    <h3>All are Welcome!</h3>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#worship').addClass('selected');
        $('#worship-responsive').addClass('selected');
        $('#bibleStudy').addClass('selected');
    </script>
</html>