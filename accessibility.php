<?php
    $pageTitle = "Accessibility";
    require_once('assets/inc/header.inc.php');
?>

  <main>
    <h1>Accessibility</h1>

    <div class="content">
      <p>
        Accessibility ensures that everyone, regardless of physical or mental ability, can engage with digital
        experiences.
        It focuses on providing equal access and usability for people with diverse needs, such as visual,
        auditory, motor, or cognitive differences. This is not just a legal requirement in many regions, but
        it’s a moral and design imperative that benefits all users.
      </p>

      
      
      <section class="interactive-element" aria-labelledby="accessibility-tools">
        <h3 id="accessibility-tools">Accessibility Tools</h3>
          <p>Use the buttons below to customize the page for better readability.</p>

          <div class="a11y-controls">
            <button id="textToggleBtn" aria-pressed="false">
              Toggle Large Text
            </button>

            <button id="contrastToggleBtn" aria-pressed="false">
              Toggle High Contrast
            </button>

            <button id="fontToggleBtn" aria-pressed="false">
              Toggle Dyslexia-Friendly Font
            </button>
          </div>
      </section>
      <!-- <section class="interactive-element">
        <h3>Interactive Element</h3>
        <p>In hac habitasse platea dictumst. Proin eget odio consequat.</p>
        <ul>
          <li>In hac habitasse</li>
          <li>Platea dictumst</li>
          <li>Proin eget odio</li>
        </ul>
      </section> -->

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et urna id ex aliquam faucibus.
        Integer efficitur tincidunt justo scelerisque pharetra. Integer commodo, lacus ac ornare dignissim,
        dolor mauris iaculis dolor, eget finibus odio arcu nec lectus. Sed mollis, velit non suscipit rutrum,
        risus nunc pharetra sem, eu suscipit lacus arcu ut tellus.
      </p>

      <p>
        Phasellus mauris tortor, congue vestibulum nunc in, accumsan luctus diam. Sed vehicula ut purus a
        dapibus. Donec auctor lectus justo, et tincidunt tortor pharetra id. Aenean porta pharetra molestie.
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
      </p>

      <p>
        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac
        habitasse platea dictumst. Proin eget odio consequat, hendrerit orci vitae, volutpat quam. Nullam eros
        nibh, scelerisque eget imperdiet quis, mollis eget mauris.
      </p>

      <p>
        Cras interdum lorem sit amet erat fermentum, eget convallis odio posuere. Nunc dapibus, urna in
        suscipit aliquet, est libero facilisis sem, at ultricies eros nisi ut magna.
      </p>
    </div>
  </main>

<?php
    require_once('assets/inc/footer.inc.php');
?>
