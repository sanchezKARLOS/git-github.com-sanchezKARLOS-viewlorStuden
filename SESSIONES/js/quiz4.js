'use strict'

const questions = [
    {
        number: 1,
        question: `1 + 1 =`,
        answers: [
            "1", "2", "3", "pancakes"
        ]
    },
    {
        number: 2,
        question: `2 x 3 =`,
        answers: [
            "2.5", "5", "6", "8"
        ]
    },
    {
        number: 3,
        question: `4^5 =`,
        answers: [
            "20", "256", "625", "1024"
        ]
    },
    {
        number: 4,
        question: `d/dx x^2 =`,
        answers: [
            "x", "2x", "x^2", "x^3"
        ]
    },
    {
        number: 5,
        question: `int dx/(1+x^2) =`,
        answers: [
            "1/x", "arctan x", "e^x", "log x"
        ]
    },
    {
        number: 6,
        question: "a rectangle is NOT always a:",
        answers: [
            "square", "quadrilateral", "paralellogram", "polygon"
        ]
    },
    {
        number: 7,
        question: "an abelian group is a group that obeys the principle of:",
        answers: [
            "assosicativity", "commutativity", "well-ordered", "least-squares"
        ]
    },
    {
        number: 8,
        question: "surface area of a cylinder =",
        answers: [
            "2pirh+2pir^2", "pir^2h+pir", "4pi^2r^3h^2", "pir^2h"
        ]
    },
    {
        number: 9,
        question: `d^2/dxdy cos x + 3xy + e^y`,
        answers: [
            "3", "-sin x + 3x", "e^y/2-sinx", "sinx^2 + x^2y^2 + e^y"
        ]
    },
    {
        number: 10,
        question: "the area within 2 standard deviations of a normal distribution contains:",
        answers: [
            "65%", "70%", "95%", "99%"
        ]
    }
]

const correctAnswers = [
    "2", "6", "1024", "2x", "arctan x", "square", "commutativity", "2pirh+2pir^2", "3", "95%"
]

let questionNum = 1;

let numCorrectAnswers = 0;

function startQuiz() {
    $('.startQuiz').on('click', '.startButton', function (event) {
        $('.startQuiz').remove();
        $('.questionForm').css('display', 'block');
        showStatus();
        showQuestion();
        showAnswers();
    });
    
}

function showStatus() {
    $("header").find("p").replaceWith(
        `<p>Question: ${questionNum}
        Score: ${numCorrectAnswers}</p>`)
} 

function showQuestion() {
    $(".questionForm").children("p").replaceWith(`<p>${questions[questionNum-1]["question"]}</p>`)
}

function showAnswers() {
    $(".questionForm").find(".answers").replaceWith(assembleAnswers)
}

function assembleAnswers() {
    let ans = "";
    for (let i = 0; i < 4; i++) {
        ans += `<label>
            <input class="answer" type="radio" name="option" value="${questions[questionNum-1].answers[i]}" required></input>
            <span>${questions[questionNum-1].answers[i]}</span>
        </label><br>
        `
    };
    return (`<div class="answers assembled">
        ${ans}
        <button type="submit" class="submitButton">Submit</button>
    </div>`)
}

function submitAnswer() {
    $('fieldset').on("click", ".submitButton", function (event) {
        event.preventDefault()
        let answer = $('input[name="option"]:checked').val()
        if (answer == correctAnswers[questionNum-1]) {
            numCorrectAnswers++
            $(".result").children("p").replaceWith(`<p>Exactly Right!</p>`)
        } else {
            $(".result").children("p").replaceWith(`<p>Not Quite, the correct answer is ${correctAnswers[questionNum-1]}</p>`)
        }
        showStatus()
        $(".questionForm").css("display", "none")
        $(".result").css("display", "block")
    })
}

function nextQuestion() {
    $(".result").on("click", ".nextQuestion", function (event) {
        questionNum++
        if (questionNum <= 10) {
            showStatus()
            showQuestion()
            showAnswers()
            $(".questionForm").css("display", "block")
            $(".result").css("display", "none")
        } else {
            endQuiz()
        }
    })
}

function endQuiz() {
    $("header").children("p").replaceWith(`<p>`)
    $(".result").find("p").replaceWith(`<p>Your score is ${numCorrectAnswers}`)
    $(".result").find("button").replaceWith(`<button class="restart">Restart Quiz?</button>`)  
}

function restartQuiz() {
    $(".result").on("click", ".restart", function (event) {
        //location.reload()
        questionNum = 1
        numCorrectAnswers = 0
        $('.questionForm').css('display', 'block');
        $(".result").css("display", "none")
        $(".result").find("button").replaceWith(`<button class="nextQuestion">Next Question</button>`)  
        showStatus();
        showQuestion();
        showAnswers();
    })
}

function readyQuiz () {
    startQuiz();
    submitAnswer();
    nextQuestion();
    restartQuiz();
}

$(readyQuiz)