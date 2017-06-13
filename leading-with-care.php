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
                    <h1>Leading with Care</h1>
                    <img src="img/leading-with-care-img1.jpg" class="quiet-garden-img">
                    <p><span style="color:#149371;">A Policy for Ensuring a Climate of Safety for Children, Youth and Vulnerable Adults in the Presbyterian Church in Canada</p>

                    <p>We are committed to providing safe and compassionate environments for all people, in particular all children, youth, and vulnerable adults who participate in the church's programs and ministries and/or use the church's facilities.</p>

                    <div class="clear"></div>

                    <h3 style="margin:15px 0 5px;">This policy is titled Leading with Care because:</h3>

                    <ul class="church-list" style="margin-bottom:15px;">
                        <li>Our Lord modeled for us how to lead with care as he healed the sick and infirm, and welcomed the young, the weak, and the vulnerable.</li>
                        <li>It is our awareness that some people in our church need special protection.</li>
                        <li>It affirms our commitment to training and supporting teachers and leaders in our church so they can effectively and compassionately support this policy.</li>
                    </ul>

                    <a href="http://presbyterian.ca/leading-with-care/" target="_blank">
                        <div class="calendar-btn">
                            Learn More
                        </div>
                    </a>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#about').addClass('selected');
        $('#about-responsive').addClass('selected');
        $('#leadingCare').addClass('selected');
    </script>
</html>