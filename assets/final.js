// From Press to Pixel JavaScript File


// Home Page Carosel 
const image_sources = [
  "assets/images/home/newspaper1.jpg",
  "assets/images/home/newspaper2.jpg",
  "assets/images/home/newspaper3.jpg",
  "assets/images/home/newspaper4.jpg",
  "assets/images/home/newspaper5.jpg"
]

//sources:
// newspaper 1 - https://www.neh.gov/divisions/preservation/featured-project/turning-the-page-the-us-newspaper-program-1982-2011
// newspaper2 - https://www.istockphoto.com/search/2/image-film?phrase=digital+news+headlines
// newspaper 3 - https://www.meisterdrucke.us/fine-art-prints/Company-Byron/1059771/A-Newspaper-Stand.html
// newpaper 4 - https://stockcake.com/i/busy-newsroom-activity_1413886_585651
// newspaper 5 - https://www.istockphoto.com/search/2/image-film?phrase=digital+news+headlines


let img_index = 0;
let timerInterval;

function right() {
  img_index++;

  if (img_index >= image_sources.length) {
    img_index = 0;
  }

  const imgElement = document.getElementById("image");

  if (imgElement) {
    imgElement.src = image_sources[img_index];
  }
}

function left() {
  img_index--;

  if (img_index < 0) {
    img_index = image_sources.length - 1;
  }

  const imgElement = document.getElementById("image");

  if (imgElement) {
    imgElement.src = image_sources[img_index];
  }
}

function auto() {
  right();
}

document.addEventListener("DOMContentLoaded", () => {
  timerInterval = setInterval(auto, 4500);
});









//interactive element
document.addEventListener("DOMContentLoaded", function() {

  const textBtn = document.getElementById('textToggleBtn');
  const contrastBtn = document.getElementById('contrastToggleBtn');
  const fontBtn = document.getElementById('fontToggleBtn');

  if (textBtn) {
    textBtn.addEventListener('click', () => {
      document.body.classList.toggle('large-text');
      const isPressed = textBtn.getAttribute('aria-pressed') === 'true';
      textBtn.setAttribute('aria-pressed', !isPressed);
      console.log("Large text toggled");
    });
  }

  if (contrastBtn) {
    contrastBtn.addEventListener('click', () => {
      document.body.classList.toggle('high-contrast');
      const isPressed = contrastBtn.getAttribute('aria-pressed') === 'true';
      contrastBtn.setAttribute('aria-pressed', !isPressed);
      console.log("High contrast toggled");
    });
  }

  if (fontBtn) {
    fontBtn.addEventListener('click', () => {
      document.body.classList.toggle('dyslexia-font');
      const isPressed = fontBtn.getAttribute('aria-pressed') === 'true';
      fontBtn.setAttribute('aria-pressed', !isPressed);
      console.log("Font toggled");
    });
  }

});






//poll
document.addEventListener("DOMContentLoaded", function () {

  const button = document.getElementById("voteBtn");
  const message = document.getElementById("pollMessage");
  const results = document.getElementById("pollResults");

  const contrastCount = document.getElementById("contrastCount");
  const repetitionCount = document.getElementById("repetitionCount");
  const alignmentCount = document.getElementById("alignmentCount");
  const proximityCount = document.getElementById("proximityCount");

  // Check if this user already voted
  let hasVoted = localStorage.getItem("hasVotedCrapPoll") === "true";

  // Load saved votes OR start at 0
  let counts = JSON.parse(localStorage.getItem("crapPollVotes")) || {
    contrast: 0,
    repetition: 0,
    alignment: 0,
    proximity: 0
  };

  function updateDisplay() {

    if (!contrastCount || !repetitionCount || !alignmentCount || !proximityCount) {
      return;
    }

    contrastCount.textContent = counts.contrast;
    repetitionCount.textContent = counts.repetition;
    alignmentCount.textContent = counts.alignment;
    proximityCount.textContent = counts.proximity;

    if (counts.contrast + counts.repetition + counts.alignment + counts.proximity > 0) {
      if (results) {
        results.hidden = false;
      }
    }
  }

  updateDisplay();

  // If user already voted, lock the poll
  if (hasVoted) {
    button.disabled = true;
    message.textContent = "You already voted in this poll.";
  }

  button.addEventListener("click", function () {

    if (hasVoted) {
      message.textContent = "You already voted in this poll.";
      return;
    }

    const selected = document.querySelector('input[name="poll"]:checked');

    if (!selected) {
      message.textContent = "Please choose an option before voting.";
      return;
    }

    const value = selected.value;

    // Increase vote count
    counts[value]++;

    // Save results
    localStorage.setItem("crapPollVotes", JSON.stringify(counts));

    // Mark user as voted (FOREVER)
    localStorage.setItem("hasVotedCrapPoll", "true");
    hasVoted = true;

    updateDisplay();

    results.hidden = false;
    message.textContent = "Thanks for voting! Your response has been saved.";
    button.disabled = true;
  });

});











//Hamburger
function toggleHamburger() {
  const navMenu = document.querySelector(".nav-menu");
  navMenu.classList.toggle("active");
}

function toggleDropdown(event) {
  const dropdown = event.currentTarget.parentElement;

  //ifdropdown is open, allow navigation
  if (dropdown.classList.contains("open")) {
    return;
  }

  event.preventDefault();
  dropdown.classList.add("open");
}

//open the hamburger nav on click for mobile
function initNav() {
  const hamburgerBtn = document.getElementById("hamburgerBtn");
  const dropdownLinks = document.querySelectorAll(".dropdown > a");

  if (hamburgerBtn) {
    hamburgerBtn.addEventListener("click", toggleHamburger);
  }

  dropdownLinks.forEach(link => {
    link.addEventListener("click", toggleDropdown);
  });
}
document.addEventListener("DOMContentLoaded", initNav);





//show crap answer on click
document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById("crap_trigger");
  const answer = document.getElementById("crap_answer");

  if (btn && answer) {
    btn.addEventListener("click", () => {
      answer.style.display =
        (answer.style.display === "none" || answer.style.display === "")
          ? "block"
          : "none";
    });
  }
});

