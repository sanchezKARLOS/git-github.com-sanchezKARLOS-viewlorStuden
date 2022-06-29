
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/quiz2.css">
    <script src="./js/quiz2.js"></script>
</head>
<body>
<div>
        <section>
        <main id="container">
      <div class="start_container">
        <div class="start_btn"><button>Iniciar Test Suma</button></div>
        <!--<div class="leaderboard"><button>Leaderboard</button></div>-->
      </div>
      
        <div class="name_box">
            <input type="text" class="name" placeholder="Enter Your Name">
            <input type="button" class="name_btn" value="Okay! Let's Start">
        </div>
      
        <div class="instructions">
                <div class="info_title">
                    <span>Reglas para comezar Test</span>
                </div>
                <div class="info_list">
                    <div class="info">1. Tendra solo <span>15 segundos</span>para realizar el test.</div>
                    <div class="info">2. Una vez selecione su respuesta, no podra volver a selecionarla.</div>
                    <div class="info">3. No podra selecionar ninguna opcion una ves se agote el tiempo.</div>
                    <div class="info">4. No podras salir del test mientras juegas.</div>
                    <div class="info">5. Una vez que haya terminado haga click en envia puntuacion.</div>
                </div>
                <div class="buttons">
                    <button class="quit">Salir del test</button>
                    <button class="restart">Continue</button>
                </div>
        </div>
        <div class="math-quiz">
            <header>
                <div class="title">Maths Quiz</div>
                <div class="timer">
                    <div class="time_text">Time Left</div>
                    <div class="timer_sec">15</div>
                </div>
                <div class="time_line"></div>
            </header>
            <section>
                <div><span id="questions"><p id="num1"></p> X <p id="num2"></p></span></div>
                <div class="option_list">
                    <div class="option" id="option1"></div>
                    <div class="option"id="option2"></div>
                    <div class="option"id="option3"></div>
                    <div class="option"id="option4"></div>
                </div>
            </section>
            <footer>
                <div class="points">
                    <div class="point_text">Score</div>
                    <div class="point_no">0</div>
                </div>
                <button class="next_btn">Show Results</button>
            </footer>
        </div>
        <div class="result_box">
            <div>
                Highest score: <p>2053 Points</p>
            </div>
            <div class="icon">
                <i class="fas fa-crown"></i>
            </div>
            <div class="complete_text">Congrats! You've completed The Quiz</div>
            <div class="score_text"></div>
            <div class="buttons">
                <button class="restart">Send Score</button>
                <button class="quit">Replay Quiz</button>
            </div>
        </div>
    </main> 
        </section>
    </div>
   
</body>
</html>