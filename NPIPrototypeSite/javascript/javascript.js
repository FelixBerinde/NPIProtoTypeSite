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
  animateValue(stories, 0, 1300, 5000);
  animateValue(people, 0, 4200, 7500);
  animateValue(interventions, 0, 12, 5000);
  


function changeBg(){
  const images = [
    'url("/imgs/flower.jpg")',
    'url("/imgs/sunset.jpg")',
    'url("/imgs/sky.jpg")',
    'url("/imgs/stackedrocks.jpg")',
    'url("/imgs/bench.jpg")',
    'url("/imgs/darktest.jpg")',
    'url("/imgs/test.jpg")'
  ]
  const background = document.querySelector('.main-top');
  const bg = images[Math.floor(Math.random() * images.length)];
  background.style.backgroundImage = bg;
  }

setInterval(changeBg, 15000)