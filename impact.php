<!--From Press to Pixel - Impact-->

<?php
    /* --- Press to Pixel --- Impact Page */
    $pageTitle = "Impact";
    require_once('assets/inc/header.inc.php');
?>

  <main>
    <h1>Impact</h1>

    <div class="content">
      <h2>Press</h2>
      <p>
        Newspapers have been a large industry that spans over 4 centuries. 
        As you would guess, newspapers are made out of paper, shocker, I know. 
        Over those 4 centuries, the industry has depleted a large amount of paper 
        and, in turn, trees as a result of this industry. In 2006, newspapers 
        generated 5.25 million tons more waste than in 1960. The manufacturing 
        process itself consumes vast quantities of water and energy and relies 
        on chemicals and inks that can pollute air and water sources. Overall, 
        the print media industry places a heavy strain on natural resources and 
        ecosystems, making its environmental footprint difficult to ignore.
      </p>

      <section class="interactive-element" aria-labelledby="poll-title">
                <h3 id="poll-title">Quick Poll: Based on the impacts which form are you more likely to use?</h3>
                <p>Pick one and see the results update instantly.</p>
                <form id="crapPoll">
                    <label>
                        <input type="radio" name="poll" value="contrast">
                        Press
                    </label><br>

                    <label>
                        <input type="radio" name="poll" value="repetition">
                        Pixel
                    </label><br>

                        <button type="button" id="voteBtn">Submit Vote</button>
                    </form>

                    <p id="pollMessage" role="status" aria-live="polite"></p>

                    <ul id="pollResults" hidden>
                        <li>Press: <span id="contrastCount">0</span></li>
                        <li>Pixel: <span id="repetitionCount">0</span></li>
                    </ul>
                </section>

      <h2>Pixel</h2>
        <p>Digital media, on the other hand, contributes very little to the waste of natural 
          resources such as paper; however, this switch from print to digital media has led 
          to an increase in electronic waste. In order to access digital media, an electronic 
          device is required. The production of these devices requires mining for rare earth 
          metals, generating pollution and habitat destruction. Overall, while digital media 
          reduces some environmental burdens of print, its global energy demands and electronic 
          waste present serious sustainability challenges if left unchecked.
      </p>

      <img id="impactImage" src="assets/images/impact/waste.jpg" alt="newspaper waste">
    </div>
  </main>

<?php
    require_once('assets/inc/footer.inc.php');
?>
