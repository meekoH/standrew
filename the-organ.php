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
                    <h1>The Organ</h1>

                    <img src="img/organ-img1.jpg" style="width:100%;border:2px solid #149371;margin-bottom:10px;">

                    <p>The organ of the Church of St. Andrew and St. Paul was built in 1931 by the renowned Casavant Fr&egrave;res of Ste.  Hyacinthe, as that firm's opus #1457.  It is one of the largest instruments on the island of Montreal, containing nearly 7,000 pipes. About 70% of the pipes are located in the chancel; the other pipes speak from the rear gallery.  Only the Trompette en chamade (installed in 1992) is visible, mounted prominently below the Black Watch window.</p>

                    <p>The instrument was cleaned and overhauled by Casavant in 1976-77, and several stops and a new console were added by Caron, Gagnon, Baumgarten in 1992. This console was replaced by Casavant in 2001. In 2011 two "new" old stops were added from a 1921 Casavant organ formerly located in Richelieu Valley United Church: the Main Great's Harmonic Flute 4' and the Tower Swell's Vox Humana 8'. In 2012, the Chimes and Celesta were duplexed to the Great from the Choir (as they were originally); at the same time the Great Double Diapason 16' was duplexed to the Pedal, and Tower Swell and Tower Great to Choir couplers were added.  In 2013, an 1890s Warren Violina was added to the Choir, imparting a more authentic orchestral character to the division. Like all of the Casavant instruments built between ca. 1890 and 1960, op. 1457 is built in the late-Romantic Anglo-American style.</p>

                    <p>The tonal design of the instrument was conceived for the playing of orchestral transcriptions and orchestrally-inspired solo repertoire and accompaniments; the Wagnerian orchestra, with its kaleidoscopic yet seamless colour changes, was the aesthetic ideal for many organists of the period.  <a href="stop-list.php">Click here to view the stoplist</a>.</p>
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#music').addClass('selected');
        $('#music-responsive').addClass('selected');
        $('#theOrgan').addClass('selected');
    </script>
</html>