var easterAudio = document.getElementById("easterEggAudio"); 
const music = new Audio('./media/sounds/easterEggSound.mp3');

function playAudio() { 
    music.play(); 
    alert("You Found an Easter Egg! 50 points to... hum... you?");
} 
