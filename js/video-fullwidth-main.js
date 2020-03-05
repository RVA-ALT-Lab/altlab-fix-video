// console.log('fit, video, fit!');

window.addEventListener("load", fitFullwidth);

function fitFullwidth() {
    //CHECK TO MAKE VIDEOS WRAP WITH FULL WIDTH
    var videos = document.querySelectorAll('iframe[src^="https://www.youtube.com/"], iframe[src^="https://youtu.be/"], iframe[src^="https://player.vimeo.com"], iframe[src^="https://www.youtube-nocookie.com/"], iframe[src^="https://www.nytimes.com/"]'); //get video iframes for regular youtubes, privacy+ youtube, and vimeo

    videos.forEach(function(video) {
      let wrapper = document.createElement('div'); //create wrapper 
          wrapper.classList.add("vid-container"); //give wrapper the class      
          video.parentNode.insertBefore(wrapper, video); //insert wrapper      
          wrapper.appendChild(video); // move video into wrapper
    });
 }