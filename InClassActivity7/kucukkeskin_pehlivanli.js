const button = document.getElementById("gameButton");
const levelInfo = document.getElementById("levelInfo");

let level = 1;
let score = 0;
let timeout = 500;

button.style.position = "absolute";

function updateLevelInfo() {
  levelInfo.textContent = `Level: ${level} | Score: ${score}`;
}

function moveButton() {
  const maxX = window.innerWidth - button.offsetWidth;
  const maxY = window.innerHeight - button.offsetHeight;

  const randomX = Math.random() * maxX;
  const randomY = Math.random() * maxY;

  button.style.left = randomX + "px";
  button.style.top = randomY + "px";
}

button.addEventListener("mouseover", () => {
  if (timeout === 0) {
    moveButton();
  } else {
    setTimeout(moveButton, timeout);
  }
});

button.addEventListener("click", () => {
  score++;
  if (score === 3) {
    level++;
    score = 0;
    timeout = Math.max(0, timeout - 100);

    if (level > 6) {
      alert("You completed all levels!");
      level = 1;
      score = 0;
      timeout = 500;
    } else {
      alert(`Level ${level} unlocked!`);
    }
  }
  updateLevelInfo();
});

moveButton();
updateLevelInfo();
