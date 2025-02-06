<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday Thrizha!</title>
    <style>
        /* General Styles */
        body {
            background-color: #333;
            text-align: center;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        h1, p {
            position: relative;
            z-index: 2;
            margin: 0;
        }

        /* Cake Styles */
        .cake-wrap {
            position: relative;
            bottom: -50px;
            animation: riseCake 3s ease-out forwards;
            z-index: 1;
        }

        /* Cake Animation */
        @keyframes riseCake {
            0% {
                bottom: -50px;
            }
            100% {
                bottom: 0;
            }
        }

        .plate {
            width: 250px;
            height: 75px;
            background: #f1f1f1;
            border-radius: 50%;
            margin-bottom: 20px;
            box-shadow: 0px 3px 5px 0px #aaa;
            position: relative;
        }

        .cake {
            width: 200px;
            height: 150px;
            background: #d63e3e;
            border-radius: 20px 20px 0 0;
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: 0px 5px 10px rgba(0,0,0,0.3);
        }

        .candles {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .candle {
            width: 8px;
            height: 20px;
            background-color: yellow;
            margin: 0 5px;
            display: inline-block;
            position: relative;
        }

        .candle:before {
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            width: 4px;
            height: 10px;
            background-color: orange;
            transform: translateX(-50%);
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

        /* Confetti Animation */
        .confetti {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .confetti span {
            position: absolute;
            width: 8px;
            height: 12px;
            background-color: rgba(255, 255, 255, 0.8);
            animation: fall linear infinite;
        }

        @keyframes fall {
            0% { transform: translateY(-10vh); }
            100% { transform: translateY(100vh); }
        }
    </style>
</head>
<body>
    <h1>Happy Birthday, Thrizha! 🎉</h1>
    <p>Wishing you a day filled with love, laughter, and happiness!</p>

    <!-- Cake Animation Section -->
    <div class="cake-wrap">
        <div class="plate"></div>
        <div class="cake">
            <!-- Candles -->
            <div class="candles">
                <div class="candle"></div>
                <div class="candle"></div>
                <div class="candle"></div>
            </div>
        </div>
    </div>

    <!-- Balloons -->
    <div class="balloons">
        <img src="b2.png" alt="Balloon" style="left: 10%; animation-delay: 0s;">
        <img src="b3.png" alt="Balloon" style="left: 20%; animation-delay: 1s;">
        <img src="b4.png" alt="Balloon" style="left: 30%; animation-delay: 2s;">
        <img src="b5.png" alt="Balloon" style="left: 70%; animation-delay: 3s;">
        <img src="b6.png" alt="Balloon" style="left: 80%; animation-delay: 4s;">
        <img src="b7.png" alt="Balloon" style="left: 90%; animation-delay: 5s;">
    </div>

    <!-- Confetti -->
    <div class="confetti" id="confetti-container"></div>

    <script>
        function createConfetti() {
            const confettiContainer = document.getElementById("confetti-container");
            for (let i = 0; i < 100; i++) {
                let confettiPiece = document.createElement("span");
                confettiPiece.style.left = Math.random() * 100 + "vw";
                confettiPiece.style.animationDuration = (Math.random() * 2 + 2) + "s";
                confettiPiece.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 70%)`;
                confettiContainer.appendChild(confettiPiece);
            }
        }
        createConfetti();
    </script>
</body>
</html>
