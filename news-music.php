<?php
    $xml = simplexml_load_file("http://www.digitalmarketingbox.com/unoapp/webcalendarevents2.php?rss&assetid=34044");
    $items = $xml->{'channel'}->{'item'};
    for ($i = 0; $i < count($xml->{'channel'}->{'item'}); $i++) {
        $md5hash[$i] = md5($items[$i]->{'title'}.$items[$i]->{'event_type'});
        $title[$i] = $items[$i]->{'title'};
        $image[$i] = $items[$i]->{'images'}->{'image_source'};
        $event[$i] = $items[$i]->{'event_type'};
    }
?>
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
                    <h1>Music News</h1>
                    <div id="articleContainer">
                        <?php
                            for ($i = count($md5hash) - 1; $i >= 0; $i--) {
                                if($event[$i] == 'Music,Events' || $event[$i] == 'Music,News') {
                                    echo '<div class="news-article"><a href="';
                                    echo 'news-article.php?id=' . $md5hash[$i];
                                    echo '" class="article-link">';
                                    echo '<img src="';
                                    echo $image[$i];
                                    echo '"><div class="caption"><p>';
                                    echo $title[$i];
                                    echo '<br>Read More <i class="fa fa-arrow-circle-o-right"></i></p></div></a></div>';
                                }
                            }
                        ?>
                    </div>
                    <!-- <div class="person-section">
                        <h3>Upcoming Events</h3>

                        <p>On <span style="font-weight:700;">Thursday, July 3</span> at <span style="font-weight:700;">12:15pm</span> Berlin-based saxophonist <span style="font-weight:700;">Claudia Tesorino</span> and organist Jonathan Oldengarm join forces in a colourful programme of works by Handel, Derek Healey, Sergei Rachmaninoff and Denis B&eacute;dard. Your freewill donations support the church’s music ministry.</p>

                        <p>Our second 2014 Organ Intermezzi concert features Montreal organist and harpsichordist <span style="font-weight:700;">Robert Sigmund</span>, playing works by Bach, Guilmant, Langlais and others. <span style="font-weight:700;">Thursday, July 10 at 12:15pm</span>. Your freewill donations support the church’s music ministry.</p>

                        <p>Everyone loves a winner! <span style="font-weight:700;">Adrian Foster</span>, first prize winner at the 2014 Lynnwood Farnam Organ Competition, is our guest artist on <span style="font-weight:700;">Thursday, July 17 at 12:15pm</span>. His Francophile programme includes works by Messiaen, Franck, Dubois and others, and a guest appearance by clarinetist Suzu Enns. Your freewill donations support the church’s music ministry.</p>

                        <p>For our fourth Organ Intermezzi concert, we welcome Montreal-based <span style="font-weight:700;">Gabrielle Tessier</span>. On <span style="font-weight:700;">Thursday, July 24 at 12:15pm</span> she performs great German baroque and French symphonic repertoire. Your freewill donations support the church’s music ministry.</p>

                        <p>Our fifth Organ Intermezzi concert on <span style="font-weight:700;">Thursday, July 31, 2014 at 12:15pm</span> features noted improviser <span style="font-weight:700;">Henri-Franck Beaup&eacute;rin</span>, organist of the Cathedral in Angers, France. His programme includes both traditional repertoire and fiery improvisation. Your freewill donations support the church’s music ministry.</p>

                        <p>Our sixth Organ Intermezzi concert on <span style="font-weight:700;">Thursday, August 7 at 12:15pm</span> features series favourite <span style="font-weight:700;">Kurt-Ludwig Forg</span>. Organist of St. Gudula in Rhede, Germany, Mr Forg performs works by de Lange, Bach and Widor. Your freewill donations support the church’s music ministry.</p>

                        <p><span style="font-weight:700;">Thomas Annand</span>, a former Assistant Organist at St Andrew and St Paul who is currently organist of St Andrew’s Presbyterian, Ottawa, is our guest at the seventh Organ Intermezzi concert on <span style="font-weight:700;">Thursday, August 14 at 12:15pm</span>. Mr Annand’s programming is invariably rich and colourful. Your freewill donations support the church’s music ministry.</p>

                        <p>Montrealer <span style="font-weight:700;">Marc-Andr&eacute; Doran</span> is the eighth guest in our Organ Intermezzi 2014 series on <span style="font-weight:700;">Thursday, August 21 at 12:15pm</span>. His programme honours the bicentennial of the birth of Philipp Emmanuel Bach (1714-1788), the second son of J. S. Bach. Your freewill donations support the church’s music ministry.</p>

                        <p>The grand finale of Organ Intermezzi 2014 on <span style="font-weight:700;">Thursday, August 28 at 12:15pm</span> features Jonathan Oldengarm in a programme observing the centennial anniversary of World War I (1914-1918). Your freewill donations support the church’s music ministry.</p>
                    </div>

                    <div class="person-section">
                        <h3>Past Events</h3>

                        <p>Sunday, May 25 at 3:30pm : A gala concert honouring Director of Music Wayne Riddell, C.M., on the occasion of his honorary doctorate from McGill University. The event includes A &amp; P's in-house music staff, guest host Rick Phillips, guest conductor Noel Edison, guest organist Scott Bradford and alumni of the Tudor Singers and Choir of the Church of St Andrew and St Paul.</p>

                        <p>Good Friday, April 18, 2014 at 7:30pm : <span style="font-weight:700;">Choral Service</span> featuring J. S. Bach's St. John Passion. The Choir of the Church of St Andrew and St Paul joins with soloists and Ensemble Caprice in Bach's masterful telling of the Passion story. A rare opportunity to hear this great work in its proper liturgical context. Freewill donation.</p>
                         
                        <p>March 2, 2014 at 11:00am : <span style="font-weight:700;">Choral Celebration Sunday</span>, featuring Benjamin Britten's Rejoice in the Lamb. Freewill donation.</p>

                        <p>March 2, 2014 at 4:00pm : <span style="font-weight:700;">Organ and Trumpet Concert</span>. Organ Scholar Duncan McDonald and trumpeter Alli Budka present Petr Eben's Okna, along with other works. Freewill donation.</p>

                        <p>February 9, 2014 at 4:00pm : MSO violinist <span style="font-weight:700;">Andrew Beer</span> and organist <span style="font-weight:700;">Jonathan Oldengarm</span> play masterworks for violin and organ by Albinoni, Rheinberger, Kreisler and others. Your freewill donations support the church's music ministry.</p>

                        <p>February 16, 2014 at 4:00pm : <span style="font-weight:700;">Franck's Last Testament</span>. Jonathan Oldengarm performs C&eacute;sar Franck's (1822-1890) final works, the epic Trois Chorals. Your freewill donations support the church's music ministry.</p>

                        <p>February 23, 2014 at 4:00pm : <span style="font-weight:700;">Organist Prof. Won Sun Park</span> (Hanil University, South Korea) plays works by Bach, Vierne and Liszt on the church's great Casavant organ. Your freewill donations support the church's music ministry.</p>

                        <p>Sundays in October at 11:00am : <span style="font-weight:700;">Celebration of Contemporary Choral Music</span>. Oct. 6: Music of Canada; Oct. 13: Latin and South America; Oct. 20: Scotland and Ireland; Oct. 27: United States, including Bernstein's Chichester Psalms (with Collin Shay, alto, Michelle Gott, harp, Sandro Valiante, percussion, Jonathan Oldengarm, organ, Jordan de Souza, direction), and voluntaries by Sowerby and Cundick.</p>

                        <p>October 27 at 7:30pm : <span style="font-weight:700;">Organ and Harp</span>. Andrew E. Henderson (Madison Avenue Presbyterian Church, New York City) and Michelle Gott (Juilliard School) present an uncommonly beautiful programme that will include local composer Rachelle Laurin's Fantasy for Organ and Harp. Sponsored by the Canadian International Organ Competition's Rendez-vous des grands festival. Tickets: $25 at the door.</p>

                        <p>November 24 from 3:00 to 10:00pm : <span style="font-weight:700;">Night of the Choirs</span>. Ten of Montreal's best-known amateur choirs sing mini-concerts, accompanied by Jonathan Oldengarm at the Casavant organ. Sponsored by the Montreal Bach Festival. Freewill donation requested.</p>

                        <p>November 29 at 7:30pm : <span style="font-weight:700;">Maison du Parc Benefit Concert</span>. The Choir and soloists of the Church of St Andrew and St Paul join with members of the Montreal Symphony Orchestra Players' Association to present J. S. Bach's Cantata 29 and Magnificat, BWV 243. Directed by Jordan de Souza. Tickets: $25 at the door.</p>

                        <p>December 8 at 3:00pm : <span style="font-weight:700;">CBC Christmas Sing-In</span>. A Montreal tradition now in its 34th year, the Choir of the Church of St Andrew and St Paul, brass ensemble and organist Jonathan Oldengarm perform Christmas carols and music with lots of audience participation. Your freewill donations support Project P.A.L., a programme that helps Montrealers living with mental illness.</p>

                        <p>December 15 at 4:30pm : <span style="font-weight:700;">Carols by Candlelight</span>. The Church's annual service of lessons and carols, featuring a candlelight procession, readings and the beautiful music of the season. Freewill donation.</p>

                        <p>December 24 at 4:00pm : <span style="font-weight:700;">Family Christmas Eve Service</span>. A less formal Christmas Eve celebration that has grown by leaps and bounds in the past few years. With music provided by organist Jonathan Oldengarm and members of the Choir.</p>

                        <p>December 24 at 11:00pm : <span style="font-weight:700;">Candlelight Christmas Eve Service</span>. A traditional service for the day, with plenty of music, candles and joyful celebration of our Lord's nativity.</p>

                        <p>Thursdays from June 27 to August 29, 2013 at 12:15pm : <span style="font-weight:700;">Organ Intermezzi</span>, featuring artists from around the world playing the church's monumental Casavant organ. Freewill donation.</p>

                        <ul class="church-list" style="margin-bottom:15px;">
                            <li><span style="color:#4d4d4d;">June 27 :</span> Jocelyn Lafond - Winner, 2013 Lynnwood Farnam Organ Competition</li>
                            <li><span style="color:#4d4d4d;">July 4 :</span> Hans-Ola Ericsson - McGill University Organist</li>
                            <li><span style="color:#4d4d4d;">July 11 :</span> Vincent Boucher, Montreal</li>
                            <li><span style="color:#4d4d4d;">July 18 :</span> Jonathan Oldengarm - Church of St Andrew and St Paul, Montreal</li>
                            <li><span style="color:#4d4d4d;">July 25 :</span> Jean Ladouceur - Eglise St-Pierre-Ap&ocirc;tre, Montreal</li>
                            <li><span style="color:#4d4d4d;">August 1 :</span> Kurt-Ludwig Forg - Borken, Germany</li>
                            <li><span style="color:#4d4d4d;">August 8 :</span> Gregg Redner - Metropolitan United  Church, London, ON</li>
                            <li><span style="color:#4d4d4d;">August 15 :</span> Andreas Cavelius - City Organist, Krefeld, Germany</li>
                            <li><span style="color:#4d4d4d;">August 22 :</span> M&eacute;lanie Barney - Cath&eacute;drale de St-J&eacute;rome, QC</li>
                            <li><span style="color:#4d4d4d;">August 29 :</span> Jonathan Oldengarm</li>
                        </ul>

                        <p><span style="font-weight:700;">Pipes and Strings!</span> Sunday, March 3, 2013 at 4:00pm MSO violinist Andrew Beer and organist Jonathan Oldengarm team up in a concert of masterworks for violin and organ. Freewill donation.</p>

                        <p><span style="font-weight:700;">Guest Choir</span> : Sunday, March 17 at 11:00am : We welcome the choir of Wellesley College (near Boston, MA) as our guest ensemble in morning worship.</p>

                        <p><span style="font-weight:700;">From Schubert to Sinatra</span> : Wednesday, March 20 at 7:30pm : An evening with rising stars baritone Philippe Sly and pianist Jordan de Souza. For tickets and info, contact <a href="mailto:bailey.madonna@videotron.ca">Madonna Bailey</a>. Proceeds support the music programme of the Church of St. Andrew and St. Paul.</p>

                        <p><span style="font-weight:700;">Maundy Thursday</span>, March 28, 2013 at 6:00pm : the much-loved Service of Tenebrae, with spoken Communion.</p>

                        <p><span style="font-weight:700;">Choral Service</span> : Good Friday, March 29 at 7:30pm. The Choir of the Church of St. Andrew and St. Paul (directed by Andrew Gray, Assistant Conductor) and organist <span style="font-weight:700;">Jonathan Oldengarm</span> present the Passion in music. Programme includes Misere (Allegri); Stabat mater (Rheinberger); Quatre motets (Poulenc), and Bach's towering motet Jesu, meine Freude. Freewill donation.</p>

                        <p><span style="font-weight:700;">Easter Sunday</span>, March 31 at 11:00am : we celebrate our Lord's resurrection in a choral service of Holy Communion, accompanied by brass ensemble and organ.</p>

                        <p>Sunday, April 28 at 4:00pm : <span style="font-weight:700;">Organ Recital</span>, Jonathan Oldengarm. Freewill donation.</p>
                    </div> -->
                </div>
    		</div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#music').addClass('selected');
        $('#music-responsive').addClass('selected');
        $('#musicNews').addClass('selected');
    </script>
</html>