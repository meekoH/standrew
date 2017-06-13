<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>The Church of St-Andrew and St-Paul - Children/Youth</title>
        <style>
            .children-sub {
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
                    Children / Youth
                </div>
            </div>
    		<div class="content responsive-padding">
                <?php require_once('components/sub-navigation.html'); ?>
                <div class="sub-content">
                    <h1>Church School</h1>

                    <img src="img/school-img1.jpg" style="width:49%;border:2px solid #149371;margin-bottom:10px;float:left;">
                    <img src="img/school-img2.jpg" style="width:49%;border:2px solid #149371;margin-bottom:10px;float:right;">

                    <h3>Church School</h3>
                    <p>Our enthusiastic, trained teachers lead classes for children from Nursery through High School.  We offer an age-appropriate curriculum to allow the chilfeen to gain an understanding of Scripture and its relevance to their lives, and equip them to live and share their faith in the community. We even have something for babies... and their parents.</p>

                    <h3>Cr&egrave;che</h3>
                    <p>Our Cr&egrave;che - literally, a "manger" or day-nursery - is a supervised centre for babies and is equipped with a television monitor which broadcasts the church service for parents who wish to stay with their little ones.</p>

                    <p style="font-weight:700;">Contact Sharon Dworzak, Church School Coordinator via <a href="mailto:churchschool@standrewstpaul.com">e-mail</a> or by phone.</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#children').addClass('selected');
        $('#children-responsive').addClass('selected');
        $('#churchSchool').addClass('selected');
    </script>
</html>