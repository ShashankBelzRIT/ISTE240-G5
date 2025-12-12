<?php
    /* --- Press to Pixel --- Why Page */
    $pageTitle = "Why";
    require_once('assets/inc/header.inc.php');
?>

    <main>
        <h1>Why</h1>

        <div class="content">
            <p>
                The CRAP principles have been a prevalent technique in website design since the 1990s, 
                with Robin Williams in her book, The Non-Designer's Design Book. The CRAP principles, 
                Contrast, Repetition, Alignment, and Proximity, are tactics for building a successful 
                interface across all types of online media. These principles are crucial for news displaying 
                information, especially to ensure their visual presentation is clear, professional, and engaging, 
                using contrast to highlight key elements, repetition for unity, alignment for organization, 
                and proximity to group-related information.
            </p>

            <section class="interactive-element" aria-labelledby="poll-title">
                <h3 id="poll-title">Quick Poll: Which CRAP principle is most important?</h3>
                <p>Pick one and see the results update instantly.</p>

                <form id="crapPoll">
                    <label>
                        <input type="radio" name="poll" value="contrast">
                        Contrast
                    </label><br>

                    <label>
                        <input type="radio" name="poll" value="repetition">
                        Repetition
                    </label><br>

                    <label>
                        <input type="radio" name="poll" value="alignment">
                        Alignment
                    </label><br>

                    <label>
                        <input type="radio" name="poll" value="proximity">
                        Proximity
                    </label><br><br>

                        <button type="button" id="voteBtn">Submit Vote</button>
                    </form>

                    <p id="pollMessage" role="status" aria-live="polite"></p>

                    <ul id="pollResults" hidden>
                        <li>Contrast: <span id="contrastCount">0</span></li>
                        <li>Repetition: <span id="repetitionCount">0</span></li>
                        <li>Alignment: <span id="alignmentCount">0</span></li>
                        <li>Proximity: <span id="proximityCount">0</span></li>
                    </ul>
                </section>

            <br>

            <p>
                Digital news networks have a stronger grasp on 
                these principles than print media, but there are still arguments for each medium. To learn 
                more about these arguments, visit the <a href="press.php">Press</a> and <a href="pixel.php">Pixel</a> 
                pages on our website. News media have had a shift in their display of information over the years, 
                but all coverage still followed the techniques described in the principles. Overall, the CRAP 
                principles allow users to interact with media easily, and without them, news media would be more 
                confusing and less beneficial for all parties. 
            </p>
        </div>
    </main>

<?php
    require_once('assets/inc/footer.inc.php');
?>