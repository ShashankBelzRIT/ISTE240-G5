<?php
    $pageTitle = "Pixel";
    require_once('assets/inc/header.inc.php');
?>

    <main>
        <h1>Pixel</h1>
        <div class="content">
        <section class="pixelImages">
            <img src="assets/images/pixel/AllSides.png" alt="Layout of AllSides 'Balanced News & Perspectives' page.">
            <img src="assets/images/pixel/NewYorkTimes.png" alt="Layout of The New York Times homepage.">
        </section>
            <h2>Good Crap</h2>
            <p>
                AllSides demonstrates a great use of the CRAP principle, allowing for a thorough, friendly user experience. News 
                political ideologies are color-coded to ensure the user can find exactly what they are looking for. Each of the
                 article headings beneath the various color codings hvae a uniform format and alignment repeated across the page.
                  Even when purely observing the header, we can see a concise set of tabs and a nav bar that grabs the reader's
                   attention while also not being too detailed to the point that the actual articles seem dull and boring to read.
            </p>

            <section class="crap">
                <h3>CRAP Principle</h3>
                <p>In AllSides, which of the following is not a CRAP principle excellently 
                    demonstrated by that site?</p>
                <br>
                <div id="crap_trigger">
                    <ul>
                        <li>Repetition</li>
                        <li>Alignment</li>
                        <li>Contrast</li>
                    </ul>
                    <p id="crap_answer">Hover over me to see!<br>
                        Repetition! AllSides utilizied good repeitiion to ensure the user was seeing a page 
                        with organized and coherant information. 
                    </p>
                </div>
            </section>

            <br>
            
            <h2>Bad Crap</h2>
            <p>
                The New York Times follows a more original newspaper format, which many readers flocked to once newspapers began to
                dwindle in relevance. While this page utilizes mainly black and white for its color scheme, the contrasts of its
                 text directly paired with their advertisements, is too low. Beyond that, the overall content's structure fulfills the
                  alignment, proximity, and repetition portion of the CRAP principles. The user, while scanning the page, can comprehend
                exactly what they are seeing without the need to take a pause.
            </p>
        </div>
    </main>

<?php
    require_once('assets/inc/footer.inc.php');
?>
