

const opennav=document.querySelector(".ulclass")

function openbar(){
   opennav.classList.toggle("open-navbar")
}



// video player


document.addEventListener("DOMContentLoaded", function () {
    // Get references to the video player and play/pause button
    const videoPlayer = document.getElementById("youtube-player");
    const playButton = document.getElementById("play-button");
    const pauseButton = document.querySelector(".pausevideo");
    const removeoverlay = document.querySelector(".clippathdiv");
    const removeoverlay2 = document.querySelector(".clippathdiv2");
    // Function to play the video and toggle the overlay
    function playVideo() {
        // Check if the video is already playing
        if (videoPlayer.src.indexOf("autoplay=1") === -1) {
            // Add the autoplay parameter to the video URL
            videoPlayer.src += "?autoplay=1";

            // Hide the overlay when the video starts playing
            removeoverlay.style.display = "none";

            // Hide the play button and show the pause button
            playButton.style.display = "none";
            pauseButton.style.display = "inline";
            removeoverlay2.style.display = "none";
        }
    }

    // Function to pause the video and show the overlay
    function pauseVideo() {
        videoPlayer.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');

        // Show the overlay when the video is paused
        removeoverlay.style.display = "block";

        // Hide the pause button and show the play button
        playButton.style.display = "inline";
        pauseButton.style.display = "none";
         // Show the overlay when the video is not playing
         removeoverlay.style.display = "block";
         removeoverlay2.style.display = "block";
    }

    // Add a click event listener to the play button
    playButton.addEventListener("click", playVideo);

    // Add a click event listener to the pause button
    pauseButton.addEventListener("click", pauseVideo);
});
