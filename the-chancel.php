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
                    <h1>The Chancel</h1>
                    <p>At the front of the church are the Chancel gates, a gift of the Allan family. You will notice the ship motif, evident throughout the Nave, repeated in the brass models of the brig "Jean". This was the first Allan ship to transport Scottish immigrants to Canada. The other two emblems on the gates are a sheaf of wheat and a chalice, symbolizing the bread and wine of Holy Communion. Three steps though the ship-motif gates lead to the Chancel, dominated by the pulpit to the left, the lectern to the right and stalls for our 50-voice choir.</p>

                    <p>To your right beyond the choir stalls is the console of Montreal's largest organ, a four-manual 1932 Casavant. There is a second console in the gallery. Most of the organ is hidden from view by the grillwork on both sides of the Chancel and on the west wall of the gallery. The visible pipes overhead are the Trompette en chamade.</p>

                    <p>A total of seven steps - the Biblical number for perfection - ascend to the white stone Communion Table on which are engraved the Cross, the Paschal Lamb, the Dove of the Holy Spirit, and on either end, the Alpha and the Omega. Surrounding the Table are the Elders' Stalls in which the members of the Kirk Session sit for the celebration of Holy Communion. The stalls are surmounted by hand-carved heads whose faces express the commandment of Jesus to his followers to "watch and pray". On the ceiling you may discover the symbols of Holy Communion: the Cross, the Chalice, the Crown and the Dove. The silver cross on the Communion Table was a gift of Wayne Riddell, Director of Music Emeritus.</p>

                    <div id="chancel-slider">
                        <ul class="slides">
                            <li>
                                <img src="img/Gallery/Chancel/chancel-img1.jpg">
                                <p class="flex-caption">Communion table during Christmas time</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Chancel/chancel-img2.jpg">
                                <p class="flex-caption">Music Director Jonathan Oledengarm at the Organ</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Chancel/chancel-img3.jpg">
                                <p class="flex-caption">The Chancel on Remembrance Day</p>
                            </li>
                            <li>
                                <img src="img/Gallery/Chancel/chancel-img4.jpg">
                                <p class="flex-caption">The organ trumpets above the Chancel</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chancel-carousel">
                        <ul class="slides">
                            <li><img src="img/Gallery/Chancel/chancel-img1-thumb.jpg"></li>
                            <li><img src="img/Gallery/Chancel/chancel-img2-thumb.jpg"></li>
                            <li><img src="img/Gallery/Chancel/chancel-img3-thumb.jpg"></li>
                            <li><img src="img/Gallery/Chancel/chancel-img4-thumb.jpg"></li>
                        </ul>
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
        $('#theChancel').addClass('selected');
    </script>
</html>