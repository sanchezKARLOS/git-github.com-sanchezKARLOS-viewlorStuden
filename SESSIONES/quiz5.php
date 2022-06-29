<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/quiz5.css">
  <script src="./js/quiz5.js"></script>
  <title>quiz5</title>
</head>
<body>
 
<div id="startScreen" class="fullScreen startScreen">
  <div class="content">
    <button class="startButton" onclick="startGame()">Start game</button>
    <div id="results"></div>
  </div>
</div>
<div id="gameScreen" class="fullScreen gameScreen hide">
  <div class="timer">
      <svg viewBox="-1 -1 2 2" class="chart">
        <circle id="pie" r="1" cx="0" cy="0" class="pie"/>
      </svg>
  </div>
  <div class="pts" id="score">
    0
  </div>
  <div class="content">
    <div class="question">
      <div id="nbr1" class="questionNbr">1</div>
      <div>x</div>
      <div id="nbr2" class="questionNbr">1</div>
      <div>=</div>
    </div>
    <div class="answers">
      <button id="answer1">
        1
      </button>
      <button id="answer2">
        2
      </button>
      <button id="answer3">
        3
      </button>
    </div>
  </div>
</div>
<div id="waitScreen" class="fullScreen waitScreen hide">
</div>

 
</body>
</html>

