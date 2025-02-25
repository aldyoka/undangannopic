const icon = document.getElementById("toggleIcon");

// Add click event listener
icon.addEventListener("click", function () {
  // Toggle the icon classes
  if (icon.classList.contains("fa-play")) {
    icon.classList.remove("fa-play");
    icon.classList.add("fa-pause");
    audio.pause();
  } else {
    icon.classList.remove("fa-pause");
    icon.classList.add("fa-play");
    audio.play();
  }
});

const audio = document.getElementById("myAudio");
const playLink = document.getElementById("playLink");

// Add event listener to the link
playLink.addEventListener("click", function (event) {
  event.preventDefault(); // Prevent default link behavior
  if (audio.paused) {
    audio.play();
    // playLink.textContent = "Pause Music";
  } else {
    audio.pause();
    // playLink.textContent = "Play Music";
  }
});
