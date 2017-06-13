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
                    <h1>Ministry of Music</h1>

                    <img src="img/music-img1.jpg" style="width:100%;border:2px solid #149371;margin-bottom:10px;">

                    <p><span style="font-style:italic;">"Speak to one another with psalms, hymns and spiritual songs. Sing and make music in your heart to the Lord."</span><br>
                        - <span style="color:#149371;">Ephesians 5:19</span></p>

                    <p>Music is an important part of our Ministry. In Sunday services, dignified and sombre Good Friday concerts or joyful Christmas events, music complements scripture and preaching, enabling us to more clearly understand the Word of God. Every Sunday, our award-winning choir leads the congregation in the singing of hymns, and  presents choral introits and anthems a cappella or with organ accompaniment.</p>

                    <p>The Choir also presents special concerts and services throughout the season, often accompanied by an instrumental ensemble. The Church’s monumental pipe organ can be heard in preludes, postludes, hymns and choral accompaniments during church services. Outstanding local and international musicians also perform recitals here throughout the year.</p>

                    <p>Some of the highlights of the Church’s musical season include the annual CBC Christmas Sing-In, a national radio broadcast recorded at The Church early each December; an annual benefit concert for the Maison du Parc, held each November in collaboration with the Montreal Symphony Players’ Association; the major choral service on Good Friday (in the recent past this has included Bach’s St. Matthew and St. John Passions, Handel’s Messiah, and Mozart, Faur&eacute; and Durufl&eacute;’s Requiems); and the Organ Intermezzi and Sinfonica Organo solo organ recital series.</p>

                    <p>
                        <a href="http://www.facebook.com/?ref=tn_tnmn#!/MusiqueStAndrewStPaul" target="_blank"><i class="fa fa-facebook-square"></i> Like us on Facebook</a>
                    </p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#music').addClass('selected');
        $('#music-responsive').addClass('selected');
    </script>
</html>