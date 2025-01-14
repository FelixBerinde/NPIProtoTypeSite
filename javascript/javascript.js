function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
  const people = document.getElementById("people");
  const stories = document.getElementById("stories");
  const interventions = document.getElementById("interventions");
  animateValue(stories, 0, 1600, 5000);
  animateValue(people, 0, 4280, 7500);
  animateValue(interventions, 0, 13, 5000);
  


function changeBg(){
  const images = [
    'url("/imgs/flower.webp")',
    'url("/imgs/sunset.webp")',
    'url("/imgs/sky.webp")',
    'url("/imgs/stackedrocks.webp")',
    'url("/imgs/bench.webp")',
    'url("/imgs/darktest.webp")',
    'url("/imgs/circle_of_hands.webp")',
    'url("/imgs/npi_summer.webp")'
  ]
  const background = document.querySelector('.main-top');
  const bg = images[Math.floor(Math.random() * images.length)];
  background.style.backgroundImage = bg;
  }

setInterval(changeBg, 15000)

$(document).ready(function () {
  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });
});