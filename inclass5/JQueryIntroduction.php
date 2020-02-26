<!DOCTYPE html>
<html>
    <head>
        <title>Combo JQuery</title>
        <link href="css/site.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" src="css/site.css">
        <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <style>
            h2 {
                background: url(../_images/open.png) no-repeat 0 11px;
                padding: 10px 0 0 25px;
                cursor: pointer;
            }
            h2.close {
                background-image: url(images/close.png);
            }
            .answer {
                margin-left: 25px;	
            }
            .pullquote {
                float: right;
                clear: right;
                width: 200px;
                padding: 10px;
                font-size: 20px;
                background-color: rgba(255, 211, 224, 0.5);
                border-radius: 10px;
                margin: 20px 0 10px 10px;
                font-style: italic;
            }
            #dashboard {
                width: 110px;
                background-color: rgb(255,211,224);
                padding: 20px 20px 0 20px;
                position: absolute;
                left: -92px;
                z-index: 100;
            }
            #dashboard img {
                margin-bottom: 20px;
                border: 1px solid rgb(0,0,0);
            }
        </style>
        
        <script>
            $(document).ready(function () {
                $('span.pq').each(function() {
                    var quote=$(this).clone();
                    quote.removeClass('pq');
                    quote.addClass('pullquote');
                    $(this).before(quote);
                });
                $('.answer').hide();
                $('.main h2').click(function() {
                    var $answer = $(this).next('.answer');
                    if ($answer.is(':hidden')) {
                        $answer.slideDown();
                        $(this).addClass('close');
                    }
                    else{
                        $answer.slideUp();
                        $(this).removeClass('close');
                    }
                });                
            }); // end ready

            $(document).ready(function () {
                $('#dashboard').hover(
                    function() {
                        $(this).stop().animate(
                        {
                        left: '0',
                        backgroundColor: 'rgb(27,45,94)'
                        }, 
                        500, 'easeInSine');
                    },
                    function() {
                        $(this).stop().animate(
                        {
                        left: '-92px',
                        backgroundColor: 'rgb(255,211,224)'
                        },
                        1500,'easeOutBounce');
                    }
                );
            });
        </script>
    </head>
    <body>
        <div class="wrapper">
            <header>
                JQuery Examples 
            </header>
            <div id="dashboard">
                <img src="small/small/blue_h.jpg" width="70" height="70" alt="blue">
                <img src="small/small/green_h.jpg" width="70" height="70" alt="green">
                <img src="small/small/orange_h.jpg" width="70" height="70" alt="orange">
                <img src="small/small/purple_h.jpg" width="70" height="70" alt="purple">
                <img src="small/small/red_h.jpg" width="70" height="70" alt="red">
                <img src="small/small/yellow_h.jpg" width="70" height="70" alt="yellow">
            </div>
            <div class="content">
                <div class="main">
                    <h1>Close Encounters Auto-Pull Quotes</h1>
                    <h2>Close Encounters of the Third Kind</h2>
                    <p> Close Encounters of the Third Kind is a <span class="pq">1977 American science fiction film, written 
                            and directed by Steven Spielberg and featuring Richard Dreyfuss</span>, François Truffaut, Melinda 
                        Dillon, Teri Garr, Bob Balaban, and Cary Guffey. It tells the story of Roy Neary, an everyday blue 
                        collar worker in Indiana, whose life changes after an encounter with an unidentified flying object 
                        (UFO)</p>
                    <h2>More Stuff</h2>
                    <p>Close Encounters was a long-cherished project for Spielberg. In late 1973, he developed a deal with 
                        Columbia Pictures for a science fiction film. Though Spielberg received sole credit for the script, 
                        he was assisted by Paul Schrader, John Hill, David Giler, Hal Barwood, Matthew Robbins, and Jerry Belson,
                        all of whom contributed to the screenplay in varying degrees. <span class="pq">The title is derived from UFO-ologist J. 
                            Allen Hynek's classification of close encounters with aliens,</span> in which the third kind denotes human 
                        observations of aliens or "animate beings." Douglas Trumbull served as the visual effects supervisor, 
                        while Carlo Rambaldi designed the aliens.</p>

                    <p>Made on a production budget of $18 million, Close Encounters was released on December 14, 1977.[2]</p>
                        It was a critical and financial success, eventually grossing over $337 million worldwide.</p>
                    <p>A Special Edition of the film, featuring additional scenes, was issued in 1980. A third cut of the film 
                        was released to home video and laserdisc in 1998 (and later DVD and Blu-ray). <span class="pq">The film received numerous 
                            awards and nominations at the 50th Academy Awards, 32nd British Academy Film Awards, the 35th Golden 
                            Globe Awards, the Saturn Awards and has been widely acclaimed by the American Film Institute.</span> In December
                        2007, it was deemed "culturally, historically, or aesthetically significant" by the United States Library
                        of Congress and selected for preservation in the National Film Registry.[3]</p>
                    <div class="faq">
                        <h2>IT WAS INITIALLY A VERY DIFFERENT FILM.</h2>
                        <div class="answer">
                            Spielberg’s initial story outline involved UFOs and shady government dealings following the 
                            Watergate scandal, which became a script entitled “Watch the Skies.” The idea involved a police or 
                            military officer working on Project Blue Book, the Air Force’s official study into UFOs in the 1950s 
                            and 1960s, who would become the whistleblower on the government cover-up of aliens. There were 
                            numerous rewrites—Taxi Driver scribe Paul Schrader even took a crack at it, penning a political UFO 
                            thriller titled “Kingdom Come” that Spielberg and the movie studio rejected—before the story we know 
                            today emerged.
                        </div>
                    </div>
                    <div class="faq">
                        <h2>THERE’S A CAMEO FROM THE GODFATHER OF UFO RESEARCH.</h2>
                        <div class="answer">
                            Hynek, who also served as a technical advisor on the movie, makes an uncredited cameo in the final 
                            scene of the movie. You can spot him pretty easily—he’s the goateed man smoking a pipe and wearing 
                            a powder blue suit who pushes through the crowd of scientists to get a better look at the aliens.
                        </div>
                    </div>
                    <div class="faq">
                        <h2>NOBODY WANTED THE STARRING ROLE.</h2>
                        <div class="answer">
                            The director first offered the part of Roy Neary to actor Steve McQueen, who turned it down because 
                            he said he couldn’t cry on cue, something he saw as essential to the character. Spielberg then went 
                            to Dustin Hoffman, Al Pacino, Jack Nicholson, Gene Hackman, and James Caan who all turned him down 
                            as well before asking his friend Richard Dreyfuss, who previously worked with Spielberg on Jaws, to 
                            take the part.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>