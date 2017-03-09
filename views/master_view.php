<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>The Groove Garage</title>
    <meta name="description" content="Leathan Lund music grooves" />
    <meta name="keywords" content="Leathan Lund guitar electric guitar music grooves jazz improv" />

    <link rel="stylesheet" type="text/css" href="views/css/grooves_style.css" />

    <!--    FOR LESS 
    <link rel="stylesheet/less" type="text/css" href="views/css/g_style.less" />
    <script src="scripts/less.js" type="text/javascript"></script>
   -->
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript" src="controllers/cntrl.js"></script>

</head>
<body>
    <!--Header-->
    <div id="header">

        <div id="header_table" class="tbl global_width">
            <div class="rw">

                <!--Logo-->
                <div id="logo" class="cl">
                <!--Leath's Groove Garage-->
                  The Groove Garage
                </div>

                <!--Header Title-->
                <div id="header_title" class="cl">

                    <div id="now_playing">
                        Now Playing:
                    </div>

                    <div id="now_playing_title">
                        this tune
                    </div>

                </div>

                <!--header center-->
                <div id="header_center" class="cl">

                  <div id="player_table">
                    <div class="rw">
                        <div class="cl" id="player_cell">
                            <span id="play_pause" class="audio_cntrl">play</span>
                            <span id="rewind" class="audio_cntrl">&lt;&lt;</span>
                            <span id="forward" class="audio_cntrl">&gt;&gt;</span>
                            <span id="tune_time" class="audio_cntrl">0:00</span>
                            <span id="vol_down" class="audio_cntrl">-</span>
                            <span id="vol_up" class="audio_cntrl">+</span>
                        </div>
                    </div>
                 </div>

                </div>

                <!--Header right-->
                <div id="header_right" class="cl">

                    <span id="contact" class="header_link">contact</span>
                    <span id="interface" class="header_link">interface</span>
                    <span id="gear" class="header_link">gear</span>
                    <span id="recording" class="header_link">recording</span>

                </div>

            </div>
        </div>

    </div>

    <div class="global_width">



        <div id="main_table" class="global_width">
            <div style="display: table-row">

                <!--Left Nav Column-->
                <div id="left_col" class="main_three">
                     <div class="g_header">grooves</div>

                    <div class="left_nav" id="16">Miles of Traffic</div>
                    <div class="left_nav" id="16_guit">MOT with Guit.</div>
                    <div class="left_nav" id="4kind">Four of a Kind</div>
                    <div class="left_nav" id="14">G Sequence</div>
                    <div class="left_nav" id="9">Dorian Chimes</div>
                    <div class="left_nav" id="chimes_guit">Chimes with Guit.</div>
                    <div class="left_nav" id="13">C# Stomp</div>
                    <div class="left_nav" id="stomp_guit">Stomp with Guit.</div>
                    <div class="left_nav" id="15">Big Intro</div>
                    <div class="left_nav" id="8">Sax Section</div>
                    <div class="left_nav" id="10">Lawrence of AML</div>
                    <div class="left_nav" id="12">When the Cocker Crowes</div>

					<?php echo $groove_list; ?>

                </div>

                <!--Center Cell-->
                <div id="center_cell" class="main_three">


                    <div id="song_name" class="g_header">Welcome...</div>

                   
                    

                    <!--welcome view-->
                    <div id="welcome">
                        <p>
                            ...to the Groove Garage!
                        </p>
                        <p>
                            Thanks for stopping by. Everything you'll find here is a work in (very sporadic) progress. Nothing here is "finished".
                        </p>
                        <p>
                            The "band" you'll be listening to is just me playing into a Keyboard Workstation (Yamaha MOX8) I purchased a few years ago. The grooves here are just ideas that occured to me on a weekend here, an afternoon there, kind of as the mood arose over the last year or so.
                        </p>


                    </div>


                    <!--MOT-->
                    <div class="link_list" id="16_links">
                        <p>So I spent a day or two coming up with the main 16 bars of this.</p>
                        I was about to pat myself on the back for a seemingly "original" set of chords, when I started to think. 
                            It occured to me I was almost certainly thinking, deep down, of Miles Davis' "<a href="http://www.youtube.com/watch?v=MMINC9EOZME&t=4m55s" target="blank">In a Silent Way/It's About that Time</a>", or perhaps Traffic's tune "<a href="https://www.youtube.com/watch?v=4v8YQ6sU6I4" target="_blank">Glad</a>".
                    </div>
                    <!--MOT GUit-->
                    <div class="link_list" id="16_guit_links">
                        <p>1/16/2016</p>
                        <p>First pass at a guitar track for this one.</p>
                        <p>
                            Rough mix to be sure. Wasn't quite sure what to do with the opening section, but something like a melody begins to take shape eventually. A few rough spots but some cool highlights as well.
                        </p>
                        Could use another soloist or two.
                    </div>
                    <!--Chimes-->
                    <div class="link_list" id="chimes_guit_links">
                        <p>2/25/2016</p>
                        <p>
                            Like the original, sans-guitar groove, this one is all about texture, or maybe <i>timbre</i>, that is, <i>tones</i>.
                        </p>
                        <p>FWIW, I tried to reference some of the sweetest, most gentle tones I know an electric guitar can make. I was thinking tones like C. Cross's "<i>Sailing</i>" and/or C. Isaak's (that is, James Calvin Wilsey's!) "<i>Wicked Game</i>", perhaps M.Knopfler "<i>Why Worry</i>".</p>
                        Not a lot of riffing going on here. This one's all about the "mood".
                    </div>
                    <!--G Sequence-->
                    <div class="link_list" id="14_links">
                        <p>This is the result of my fiddling around with synthesizer <i>sequences</i>.</p>
                        <p>There are two in this groove which play alternately or overlap. Everything's in the key of G-blues (all white keys), perfect for my keyboard skills (four bars at a time, one hand at a time).</p>
                        At the end of the day, it reminded me of Billy Preston's "<a href="https://www.youtube.com/watch?v=UuJVleNkJj0" target="_blank">Outta Space</a>", though <i>he wasn't using any sequencers</i>!
                    </div>
                    <!--Chimes-->
                    <div class="link_list" id="9_links">
                        <p>Kind of a "composition by omission" type thing.</p>
                        Not a lot going on harmonically, but some nice flute, chime, rhodes and string timbres which fade in and out.
                    </div>
                    <!--end link list-->
                    <div class="link_list" id="10_links">
                        <p>Just fiddling around with that "egyptian" scale.</p>
                        You know the one: play around with it for five minutes and you'll end up playing "Hava Nagila". Just parts A and B; B needs about 6 more bars of thought.
                    </div>
                    <!--end link list-->
                    <div class="link_list" id="12_links">
                        Joe Cocker meets black Crowes.
                    </div>
                    <!--end link list-->
                    <div class="link_list" id="13_links">
                        <p>A 4-on-the-floor stomp in C#. Big organ chords for part B.</p>

                        <p>Part C floats through three modes of C#. Great excuse to solo!</p>

                        <p>Suddenly becomes a surf tune at the end (?).</p>
                    </div>
                    <!--end link list-->
                    <div class="link_list" id="stomp_guit_links">
                        <p>Had an hour or so left in the "Chimes" guitar session and decided to make a quick pass at some rhythm parts for C# Stomp</p>

                        <p>To my ears it sounds a bit like Andy Summers jamming with Nile Rodgers</p>

                    </div>
                    <!--end link list-->
                    <div class="link_list" id="15_links">
                        <p>Another one of those "I'm sure this is original" things until you ponder where the ideas came from.</p>
                        <p>I'm sure I was thinking of Jean Luc Ponty here. Enigmatic Ocean.</p>

                        Big intro --> a suggestion of a violin melody--> some neat chords to jam over. Some fun ideas, but needs a few <i>more</i> fun ideas.
                    </div>
                    <!--end link list-->
                    <div class="link_list" id="4kind_links">
                       <p>So, here's the train of thought with this one:</p>
                        <ol>
                            <li>For the umpteenth time over the last, what, five decades(?), I caught the Doors "Light my Fire" on the radio.</li>
                            <li>For the umpteenth time, it occured to me what a missed musical opportunity it was that no one took a solo over the spooky-sounding verse chords. Y'know, the A minor --> F# minor motif.</li>
                            <li>With that in mind, I came up with a passage that quoted the original and just kept going down in minor thirds (D# minor --> C minor). Four of a kind!</li>
                            <li>For the heck of it, I turned the original's bossa-nova-type rhythm into a waltz.</li>
                        </ol>
                    <p>Heh, well it seemed like a good idea at the time...</p>
                    </div>
                    <!--end link list-->
                    <div class="link_list" id="8_links">

                        <p>For some stange reason, I felt like:</p>
                        <p>
                            1. Writing 3-part sax harmony.<br />
                            2. Giving myself an excuse to jam.<br />
                        </p>
                        FWIW, mission accomplished (sorta).
                    </div>
                     <div class="link_list" id="contact_links">
                         <p>
                             Thanks for stopping by "The Garage".
                         </p>
                         <p>
                             Hear anything you liked? Hear anything you <i>didn't</i> like?
                         </p>
                         <p>
                             Either way, it would be fun to hear from you.
                         </p>
                       <a href="mailto:leathanlund@leathanlund.com?Subject=Grooves" target="_top">Shoot Me a Note</a>
                    </div>
                     <div class="link_list" id="recording_links">
                         <p>All tracks by Leathan Lund.</p>
                         <p>
                             All tracks recorded and mixed by Jim Hill at:<br />
                             
                             Amplified Wax, Spokane WA.
                         </p>
                    </div>
                    <div class="link_list" id="gear_links">
                        <p>Guitars:</p>
                             <ol>
                                 <li>2012 Paul Read Smith Bernie Marsden</li>
                                 <li>2006 Fender Deluxe Stratocaster HSS</li>
                             </ol>
                         <p>Amp:<br />
                             Mesa Boogie Express 5:50
                         </p>
                    </div>

                    <div id="screen_data">


                    </div>

                </div>

                <!--Right Cell-->
                <div id="cell_three" class="main_three">

                    <div class="g_header">
                        Files
                    </div>
                    <p id="audio_files">
                        <a id="down_link" href="#">Download Track</a>
                    </p>
                    

                    <div id="charts_header" class="g_header">
                        Charts
                    </div>
                    <p>
                        Note:<br />
                        <p>
                        The "charts" in this section are nothing like comprehensive scores, or even complete fakebook-style charts.
                        </p>
                         <p>
                        Treat them as "sketches", or "suggestions", intended to acquaint various instrumentalists (usually a keyboardist) with the basic ideas for the various grooves.
                         </p>
                    </p>
                    <div id="16_charts" class="chart">

                         <a class="chart_link" href="charts/16/16.pdf" download="charts/16/16.pdf">Miles of Traffic</a>

                    </div>
                     <div id="8_charts" class="chart">

                         <a href="#">Miles of Traffic</a>
                    </div>
                    <div id="4kind_charts" class="chart">

                         <a href="charts/4_kind/4K_Keys_bs.pdf" class="chart_link" download="charts/4_kind/4K_Keys_bs.pdf">Four of a Kind - Keys, Bass</a>
                    </div>

                    <!--autoplay="autoplay"-->
                    <audio id="turntable" controls="controls" hidden="hidden" src="9.mp3" type="audio/mp3">j;alskjdf;lkasjfd;lkasjf</audio>



                </div>


            </div>
        </div>

    </div>


</body>
</html>