var player;
var start_time = 0; // Seconds
var end_time = 50; // Seconds
var videoId = 'ozShTZv0zU0';

function onYouTubeIframeAPIReady() {
  player = new YT.Player('ytplayer', {
    height: '920',
    width: '1080',
    videoId: videoId,
    start: start_time,
    end: end_time,
		autoplay: 1,
		controls: 0,
		showinfo: 0,
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

function onPlayerReady(event) {
  player.seekTo(start_time);
  player.setVolume(50);
}
 
function onPlayerStateChange(event) {

      if (event.data === 1) {
        var video_cover_inner = page.find("[data-role=video_cover_inner]");
        video_cover_inner.removeClass("hide-iframe");
      }

      var myTimer;
      if (event.data === 1) {
      	myTimer = setInterval(function(){ 
            var time;
            time = player.getCurrentTime();
            if (Math.ceil(time) >= end_time) {
            	player.seekTo(start_time);
            }
        }, (end_time - start_time) * 1000);
      } else if (event.data === 0) {
      	clearInterval(myTimer);
      	player.playVideo();
      }
}