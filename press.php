<?php
    /* --- Press to Pixel--- Press Page */
    $pageTitle = "Press";
    require_once('assets/inc/header.inc.php');
?>

<body>
    <main>
        <h1>Press</h1>
            <div class = "content">
            <img id="pressImage" src="assets/images/press/goodCrap.jpg" alt="The Guardian press image">
            <h2>Good Crap</h2>
            <p>
                This example of an old Guardian newspaper shows a strategic design in press layout. 
                The headline image is in the center, and its relative text resides wrapped around it. 
                This follows both the alignment and proximity parts of the CRAP principles. The 
                sidebars within the text and to the side of it allow organization of information 
                flow, and their difference in color allows the reader to differentiate them from the
                 rest of the content. This utilizes the contrast CRAP principle as well.
            </p>

            <section class="crap">
                <h3>CRAP Principle</h3>
                <p>Which CRAP principle is the most prominent in press media?</p>
                <br>
                    <ul id="crapList">
                        <li>Proximity</li>
                        <li>Alignment</li>
                        <li>Contrast</li>
                    </ul>
                    <button id="crap_trigger">Click me to see!</button> <br>
                    <p id="crap_answer">
                        Contrast is arguably the correct answer, due to the black and white palletes
                        of newspapers, but others such as alignment and proximity are also good answers 
                        as well! 
                    </p>
            </section>

            <section class="spacer"></section>

            <img id="pressImage" src="assets/images/press/badCrap.jpg" alt="The Virginian Post press image">
            <h2>Bad Crap</h2>
            <p>
                This article from the Virginian Post is one of our more lacking examples of press 
                CRAP principles. To start, the text is very spaced out and is positioned strangely
                 throughout the page. This makes it extremely difficult for the reader to gauge where
                  they are on the page and what information relates to others on the page. This violates 
                  the proximity, alignment, and repetition of the CRAP principles. The page is aligned 
                  in columns, but some are much thinner than others, further making it even more difficult 
                  to read coherently.
            </p>
        </div>
    </main>
<?php
    require_once('assets/inc/footer.inc.php');
?>