<html>
<head>
  <link rel="stylesheet" href="./css/quiz2.css">

</head>
<body>
  <div class="container-fluid text-center">
    <div id="display" class="well col-xs-6">
      <div id="try-screen">
        <p id="try">Try Again</p>
        
        <p id="final-score">Your score was 0.</p>
        <button type ="button" id="restart-button">Reiniciar</button>
      </div>
      
      <div id="working-screen">
        <div id="progressbar"></div>
        <p id="expression">7 + 7</p>
        <p id="result">= 14</p>
        <div id="controls">
          <button type ="button" id="tick"><i class="fa fa-check"></i></button>
          <button type ="button" id="cross"><i class="fa fa-close"></i></button>
        </div>
        
      </div> <!-- end of working screen -->
        
    </div>
     <div id="score">
          <p>Score: </p>
        </div>
  </div> <!-- end of fluid container -->
  <script src="./js/quiz2.js"></script>
</body>
</html>