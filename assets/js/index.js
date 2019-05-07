// Get the video
let video = document.getElementById("atv");

// Get the button
let btn = document.getElementById("video-controls");

// Pause and play the video, and change the button text
const videoControls = () => {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Intrerupe video";
  } else {
    video.pause();
    btn.innerHTML = "Porneste video";
  }
};

$(function() {
   $(window).scroll(function () {
      if ($(this).scrollTop() > $(window).height() - 50) {
         $('.content').addClass('scrolled')
      }
      if ($(this).scrollTop() < $(window).height() - 50) {
         $('.content').removeClass('scrolled')
      }
   });
});
