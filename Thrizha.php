  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Happy Birthday Thrizha!</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Rouge+Script&display=swap" rel="stylesheet" />
    <style>
      /* =================== Global Styles & Balloons =================== */
      body {
  background-color: #f8bbd0; /* Soft pastel pink */
  text-align: center;
  color: #333;
  font-family: 'Roboto', sans-serif;
  overflow: hidden;
  margin: 0;
  padding: 0;
}

      h1,
      p {
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        font-style: italic;
        text-align: center;
        width: 100%;
        user-select: none;
        position: relative;
        z-index: 2;
        margin: 1rem 0;
      }
       /* Balloons Animation */
       .balloons img {
            position: absolute;
            width: 100px;
            opacity: 0;
            animation: floatUp 6s linear infinite;
        }

        @keyframes floatUp {
            0% { transform: translateY(100vh); opacity: 0; }
            50% { opacity: 1; transform: translateY(50vh); }
            100% { transform: translateY(-10vh); opacity: 0; }
        }
      .confetti {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
    z-index: 999;
}

      .confetti span {
        position: absolute;
        width: 8px;
        height: 12px;
        background-color: rgba(255, 255, 255, 0.8);
        opacity: 0.8;
        animation: fall linear infinite;
      }
      @keyframes fall {
        0% { transform: translateY(-10vh) rotate(0deg); }
        100% { transform: translateY(100vh) rotate(360deg); }
      }

      /* =================== Animated Cake Styles =================== */
      /* Compiled from your provided SCSS variables:
          $plate-width: 250px; $plate-height: 75px; $plate-padding: 20px;
          $base-width: 200px; $base-height: 50px; $base-top-height: 65px;
          $base-bg: rgb(197,165,192); $cream-bg: #b381ae;
          $candle-width: 15px; $candle-height: 75px; $flame-height: 30px;
          $star-size: 15px;
          $candle-bg: repeating-linear-gradient(45deg, #eee, #f0abf0 20%);
          $candle-top-bg: radial-gradient(#eee, #f0abf0);
          $flame-bg: #fcc56c; $star-bg: orange;
      */
      .wrapper {
        position: relative;
        height: 100vh;
        min-height: 600px;
        background: linear-gradient(to top, #eee, transparent);
        display: grid;
        place-items: center;
        z-index: 2;
      }
      @keyframes moveUp {
  0% {
    transform: translateY(100px); /* Start 100px below */
    opacity: 0;
  }
  100% {
    transform: translateY(0); /* End in the normal position */
    opacity: 1;
  }
}

.greeting {
        font-family: 'Cookie', cursive;
        font-size: 4rem; /* Increased size for the greeting */
        color: #f39c12;
        text-align: center;
        margin-top: 30px;
        animation: moveUp 2s ease-out; /* Added animation for a smooth entrance */
      }

      .message {
        font-family: 'Cookie', cursive;
        font-size: 2.5rem; /* Slightly larger message font size */
        color: #444;
        text-align: center;
        line-height: 1.4;
        margin-top: -150px; /* Adjusted positioning */
        animation: moveUp 2s ease-out 0.5s; /* Added delay to appear after greeting */
      }





      .plate {
        position: relative;
        width: 250px;
        height: 75px;
        background: #f1f1f1;
        border-radius: 50%;
        box-shadow: 0px 3px 5px 0px #aaa;
        display: grid;
        place-items: center;
      }
      .cake-wrap {
        position: absolute;
        bottom: 50%;
      }
      /* Cake Base */
      .cake-base {
        position: relative;
        width: 200px;
        height: 50px;
        background: rgb(197,165,192);
      }
      .cake-base .base-front {
        position: absolute;
        width: 100%;
        height: 100%;
        background: inherit;
      }
      .cake-base .base-front:after {
        content: '';
        position: absolute;
        left: 0;
        top: 100%;
        width: 100%;
        height: 55px; /* plate-height - plate-padding = 75 - 20 */
        transform: translateY(-50%);
        background: inherit;
        border-radius: 50%;
      }
      .cake-base .base-top {
        position: absolute;
        width: 100%;
        height: 65px;
        top: 0;
        transform: translateY(-50%);
        border-radius: 50%;
        background: inherit;
      }
      .cake-base .base-top:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        clip-path: polygon(0 0, 0% 50%, 100% 50%, 100% 0);
      }
      .cake-base .base-top:after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border-bottom-color: black;
        clip-path: polygon(0 50%, 60% 50%, 60% 101%, 0 101%);
      }
      /* Cake Topping */
      .cake-topping {
        position: absolute;
        bottom: 0;
        width: 200px;
        height: 100px; /* base-height * 2 */
        z-index: 99;
      }
      .cake-topping .topping-front {
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, #b381ae 40%, transparent);
      }
      .cake-topping .topping-front .top-layer {
        height: 30%;
        background: #b381ae;
      }
      .cake-topping .topping-front .bottom-layer {
        position: relative;
        height: 70%;
        background: #b381ae;
        clip-path: url(#my-clip-path);
      }
      .cake-topping .topping-top {
        background: #b381ae;
        position: absolute;
        width: 100%;
        height: 65px;
        top: 0;
        transform: translateY(-50%);
        border-radius: 50%;
        z-index: 9;
      }
      .cake-topping .topping-top:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        clip-path: polygon(0 0, 0% 50%, 100% 50%, 100% 0);
      }
      .cake-topping .topping-top:after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        box-shadow: inset 0 -1px 1px 2px rgba(200,169,195, 0.5);
        clip-path: polygon(10% 50%, 70% 50%, 70% 101%, 10% 101%);
      }
      /* Candle & Stars */
      .candle-container {
        width: 200px;
        position: absolute;
        bottom: 60%;
        z-index: 9999;
        display: grid;
        place-items: center;
        opacity: 0;
      }
      .candle-container .candle-wrap {
        position: relative;
        width: 15px;
      }
      .candle-container .flame-wrap {
        position: relative;
        z-index: 99;
        width: 100%;
        background: #fcc56c;
        height: 30px;
        transform-origin: bottom center;
        transform: scale(0);
        clip-path: url(#my-flame-path);
      }
      .candle-container .candle-top {
        position: absolute;
        top: 0;
        left: 0;
        transform: translateY(-50%);
        width: 100%;
        height: 8px;
        background: radial-gradient(#eee, #f0abf0);
        border-radius: 50%;
        z-index: 9;
      }
      .candle-container .candle-base {
        position: relative;
        width: 100%;
        height: 75px;
        margin: 2px 0;
        background: repeating-linear-gradient(45deg, #eee, #f0abf0 20%);
      }
      .candle-container .candle-base:before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        background: #eee;
        transform: translateY(50%);
        height: 5px;
        width: 100%;
        z-index: -1;
        border-radius: 50%;
      }
      .candle-container .candle-base:after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translate(-50%, 50%);
        height: 10px;
        width: 200%;
        border-radius: 50%;
        background: radial-gradient(#9e7199, #b381ae);
        z-index: -2;
      }
      .candle-container .star {
        width: 15px;
        height: 15px;
        position: absolute;
        background-color: orange;
        clip-path: url(#my-star-path);
        opacity: 0;
      }
      .candle-container .star:nth-of-type(1) {
        top: -20%;
        left: 30%;
      }
      .candle-container .star:nth-of-type(2) {
        top: 30%;
        left: 10%;
      }
      .candle-container .star:nth-of-type(3) {
        top: -10%;
        left: 85%;
      }
      .candle-container .star:nth-of-type(4) {
        top: 35%;
        left: 65%;
      }
      .candle-container .star:nth-of-type(5) {
        top: 55%;
        left: 90%;
      }
      /* =================== SVG ClipPaths =================== */
      .svg {
        position: absolute;
        width: 0;
        height: 0;
      }




    </style>
  </head>
  <body>
    <!-- Header -->
 



    

    <!-- Balloons -->
    <div class="balloons">
      <img src="b2.png" alt="Balloon" style="left: 10%; animation-delay: 0s;">
      <img src="b3.png" alt="Balloon" style="left: 20%; animation-delay: 2s;">
      <img src="b4.png" alt="Balloon" style="left: 30%; animation-delay: 1s;">
      <img src="b5.png" alt="Balloon" style="left: 70%; animation-delay: 0s;">
      <img src="b6.png" alt="Balloon" style="left: 80%; animation-delay: 2s;">
      <img src="b7.png" alt="Balloon" style="left: 90%; animation-delay: 1s;">
    </div>

    <!-- Animated Cake (Wrapper with Plate, Cake Wrap, etc.) -->
    <div class="wrapper">
    <div class="greeting">Happy Birthday, Thrizha!</div>
<div class="message">Enjoy your day! Magkapasaya ka!</div>

     

    
      <div class="plate">
        <div class="cake-wrap">
          <div class="cake-topping">
            <div class="topping-top">
              <div class="candle-container">
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="candle-wrap">
                  <div class="flame-wrap"></div>
                  <div class="candle-base">
                    <div class="candle-top"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="topping-front">
              <div class="top-layer"></div>
              <div class="bottom-layer"></div>
            </div>
          </div>
          <div class="cake-base">
            <div class="base-front"></div>
            <div class="base-top"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- SVG ClipPaths -->
    <svg class="svg">
      <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox">
        <path d="M0,0 V0.481 s0.021,0.37,0.078,0.404 s0.035,-0.296,0.102,-0.27 s0.007,0.363,0.096,0.354 s0.028,-0.466,0.1,-0.487 S0.406,0.999,0.457,0.999 s0.03,-0.502,0.075,-0.518 s0.041,0.488,0.081,0.274 c0.007,-0.038,0.021,-0.187,0.044,-0.215 c0.014,-0.017,0.038,0.401,0.075,0.392 s0.023,-0.28,0.074,-0.392 c0.022,-0.04,0.072,0.359,0.1,0.344 c0.057,-0.029,0.094,-0.405,0.094,-0.405 V-0.001"></path>
      </clipPath>
      <clipPath id="my-flame-path" clipPathUnits="objectBoundingBox">
        <path d="M0.501,0 s0.188,0.101,0.295,0.238 s0.123,0.15,0.169,0.286 S1,0.74,0.928,0.838 S0.711,1,0.501,1 S0.216,0.937,0.09,0.838 s-0.083,-0.149,0,-0.29 s0.23,-0.139,0.333,-0.276 S0.501,0,0.501,0"></path>
      </clipPath>
      <clipPath id="my-star-path" clipPathUnits="objectBoundingBox">
        <path d="M0.5,0.846 l-0.309,0.154,0.044,-0.357 L0,0.382 l0.336,-0.067 L0.5,0 l0.164,0.315,0.336,0.067,-0.235,0.261,0.044,0.357"></path>
      </clipPath>
    </svg>

    <!-- Confetti Container -->
    <div class="confetti" id="confetti-container"></div>

    <!-- =================== Scripts =================== -->
    <!-- GSAP Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <!-- GSAP Timeline for Animated Cake -->
    <script>
      const timeline = gsap.timeline({
        duration: 0.3,
      });

      timeline.fromTo('.cake-topping', {
        yPercent: -300,
        opacity: 0.5
      }, {
        yPercent: 0,
        opacity: 1
      });

      timeline.to('.candle-container', {
        opacity: 1
      });

      timeline.to('.flame-wrap', {
        scale: 1,
        ease: "back.out",
      });

      timeline.to('.greeting', {
        scale: 1,
        ease: "back.out"
      });

      timeline.to('.star', {
        opacity: 0.5,
        stagger: 0.05,
        onComplete: function() {
          gsap.to('.star', {
            scale: 0.25,
            repeat: -1,
            stagger: 0.1,
            yoyo: true,
            yoyoEase: "power1.out"
          });
        }
      });
    </script>
    <!-- Confetti Creation Script -->
    <script>
      function createConfetti() {
        const confettiContainer = document.getElementById("confetti-container");
        for (let i = 0; i < 100; i++) {
          let confettiPiece = document.createElement("span");
          confettiPiece.style.left = Math.random() * 100 + "vw";
          confettiPiece.style.animationDuration = (Math.random() * 2 + 2) + "s";
          confettiPiece.style.backgroundColor = hsl(${Math.random() * 360}, 100%, 70%);
          confettiContainer.appendChild(confettiPiece);
        }
      }
      createConfetti();
    </script>
  </body>
  </html>