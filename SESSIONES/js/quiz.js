var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
    [ "Cuanto es 10 + 4?", "12", "14", "16", "B" ],
	[ "Cuanto es 20 + 9?", "19", "25", "29", "C" ],
	[ "Cuanto es 7 + 3 + 12?", "22", "20", "19", "A" ],
	[ "Cuanto es 12 -5 + 8 + 9", "29", "25", "24", "C" ]
];
function _(x){
	return document.getElementById(x);
}
function renderQuestion(){
	test = _("test");
	if(pos >= questions.length){
		test.innerHTML = "<h2>Respondiste "+correct+" de "+questions.length+" Respuesta Correcta </h2>";
		_("test_status").innerHTML = "Quiz Completado con exito";
		pos = 0;
		correct = 0;
		return false;
	}
	_("test_status").innerHTML = "Pregunta "+(pos+1)+" de "+questions.length;
	question = questions[pos][0];
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
	test.innerHTML = "<h3>"+question+"</h3>";
	test.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
	test.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
	test.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br><br>";
	test.innerHTML += "<button onclick='checkAnswer()'>Siguiente</button>";


}
function checkAnswer(){
	choices = document.getElementsByName("choices");
	for(var i=0; i<choices.length; i++){
		if(choices[i].checked){
			choice = choices[i].value;
		}
	}
	if(choice == questions[pos][4]){
		correct++;
	}
	pos++;
	renderQuestion();
}
window.addEventListener("load", renderQuestion, false);