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
                    <h1>The Black Watch</h1>
                    <div style="overflow:hidden;margin-bottom:15px;">
                        <img src="img/black-watch-img1.jpg" style="float:left;width:49%;border:2px solid #149371;">
                        <img src="img/black-watch-img2.jpg" style="float:right;width:49%;border:2px solid #149371;">
                    </div>
                    
                    <p>On the first Sunday each May, The Black Watch of Canada (Royal Highland Regiment) marches in its annual Church Parade along Sherbrooke Street from the Bleury Street Armoury to the Church of St. Andrew and St. Paul and back again. All are welcome to share this testament to peace.</p>

                    <p>This historic regiment has a long association with our church. Their presence honours the many members of our congregation who have given their lives in our defence. Their names are inscribed on our walls. The Colours (flags) of the Regiment hang in our Sanctuary to represent their sacrifice in defending the peace we cherish and our freedom to worship in liberty.</p>

                    <p>You can also see other instances of symbolism in the Church Parade. Soldiers march to the church - the army comes humbly to God's house. They lay down their Colours, which are a record of history, on the Lord's Table and worship in peace. The Commanding Officer reads the Lesson, acknowledgement of the dominion of God's word. The haunting bagpipe lament during the service mourns those who have died in honour, its sound fading as a reminder to never forget their sacrifice. The Sermon by the Regiment's Chaplain reminds us of the supremacy of Christ's message to the world. As the service ends, the regiment carries its Colours, furled as they depart from the Sanctuary, ready once again - as in our national anthem's call to duty - to stand on guard for us.</p>

                    <p>You will find more information about The Black Watch at their <a href="http://www.blackwatchcanada.com/" target="_blank">website</a>.</p>

                    <div style="overflow:hidden;margin-top:15px;">
                        <img src="img/black-watch-img3.jpg" style="float:left;width:49%;border:2px solid #149371;">
                        <img src="img/black-watch-img4.jpg" style="float:right;width:49%;border:2px solid #149371;">
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
        $('#blackWatch').addClass('selected');
    </script>
</html>