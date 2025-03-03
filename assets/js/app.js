function createDot() {
  const dot = document.createElement("div");
  dot.classList.add("dot");
  document.body.appendChild(dot);

  function moveDotRandomly() {
    const bodyWidth = document.body.clientWidth;
    const bodyHeight = document.body.clientHeight;

    const randomX = Math.random() * (bodyWidth - 10); // Subtract dot size
    const randomY = Math.random() * (bodyHeight - 10);

    // Create a trail
    const trail = document.createElement("div");
    trail.classList.add("trail");
    trail.style.left = `${dot.offsetLeft}px`;
    trail.style.top = `${dot.offsetTop}px`;
    document.body.appendChild(trail);

    // Remove trail after animation
    setTimeout(() => trail.remove(), 1000);

    // Move the dot
    dot.style.left = `${randomX}px`;
    dot.style.top = `${randomY}px`;
  }

  setInterval(moveDotRandomly, 200); // Move every 200ms
}

// Create 3-4 dots
for (let i = 0; i < 30; i++) {
  createDot();
}
document.addEventListener("mousemove", (event) => {
  createStarLine(event.clientX, event.clientY);
});

function createStarLine(x, y) {
  const line = document.createElement("div");
  line.className = "star-line";

  // Set random rotation and position with some offset from cursor
  const angle = Math.random() * 360;
  const offsetX = 20; // Set the horizontal offset
  const offsetY = 20; // Set the vertical offset

  line.style.left = `${x + offsetX}px`; // Add horizontal offset
  line.style.top = `${y + offsetY}px`; // Add vertical offset
  line.style.transform = `rotate(${angle}deg)`;

  document.body.appendChild(line);

  // Remove the line after the animation ends
  setTimeout(() => line.remove(), 1000);
}
setInterval(() => {
  // Get the main body and app name elements
  const mainBody = document.getElementById("MainBody");
  mainBody.classList.add("white-version");
}, 500); // The interval is set to 10 seconds, so it repeats every 10 seconds

function GreetingMessage() {
  var audio;
  var currentTime = new Date();
  var hours = currentTime.getHours(); // Get the current hour

  // Check if the greeting has already been played in this session
  if (sessionStorage.getItem("greetingPlayed") === "true") {
    return; // Prevent playing the greeting again
  }

  // Check time of the day and set the greeting accordingly
  if (hours >= 0 && hours < 12) {
    audio = document.getElementById("goodMorning");
  } else if (hours >= 12 && hours < 15) {
    audio = document.getElementById("goodAfternoon");
  } else if (hours >= 15 && hours < 18) {
    audio = document.getElementById("goodEvening");
  } else {
    audio = document.getElementById("goodNight");
  }

  // Play the audio
  if (audio) {
    audio.play().catch(function (error) {
      console.log("Audio play failed: ", error);
    });

    // Mark the greeting as played in this session
    sessionStorage.setItem("greetingPlayed", "true");
  }
}

// Detect the first user interaction (click) to play the greeting
document.body.addEventListener("click", function () {
  document.getElementById("GSIAssistant").style.display = "block";
  GreetingMessage();
});
sessionStorage.clear();

// Get all the section-separator elements
const sections = document.querySelectorAll(".section-separator");
let currentSection = 0;

// Function to scroll to the next section
function scrollToNextSection() {
  if (currentSection < sections.length) {
    sections[currentSection].scrollIntoView({
      behavior: "smooth",
      block: "start", // Scroll to the top of the section
    });
    currentSection++;
  } else {
    currentSection = 0; // Reset to the first section when we reach the last
    sections[currentSection].scrollIntoView({
      behavior: "smooth",
      block: "start", // Scroll to the top of the first section
    });
  }
}

// Set an interval to auto-scroll to the next section every 7.5 seconds//
//setInterval(scrollToNextSection, 10000);

//mobile navigation
function MobileNavigation() {
  var GsiMobileNavigation = document.getElementById("GsiMobileNavigation");

  if (GsiMobileNavigation.style.display == "none") {
    GsiMobileNavigation.style.display = "block";
  } else {
    GsiMobileNavigation.style.display = "none";
  }
}
