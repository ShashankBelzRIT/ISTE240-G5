<?php
    $pageTitle = "Home";
    require_once('assets/inc/header.inc.php');
?>
    <h1>From Press to Pixel</h1>

    <div class ="carosel">
        <section>
            <img id="image" src="assets/images/home/newspaper1.jpg" alt="">
        </section>

        <section id="arrows">
            <button id="left" onclick="left()">
                <img id="left_arrow" src="assets/images/home/left_arrow.png" alt="left arrow">
            </button>
            <button id="right" onclick="right()">
                <img id="right_arrow" src="assets/images/home/right_arrow.png" alt="right arrow">
            </button>
        </section>
    </div>
    
    <div class = "content">
        <p>Welcome to From Press to Pixel! If you are someone who wants to learn more about the differences 
            between print news media and digital ones, and specifically how the CRAP principles are applied 
            to each, then you’re in the right place! We aim to educate readers about the contrasts between 
            print and digital news sources, while connecting the learning to CRAP principles and how they 
            can improve sources overall. Through interactive elements such as quizzes and definitions, as 
            well as images and text, From Press to Pixel will become your main source of knowledge about 
            the CRAP principles in news media.
        </p>
    </div>

    <?php
        require_once('assets/inc/footer.inc.php');
    ?>

