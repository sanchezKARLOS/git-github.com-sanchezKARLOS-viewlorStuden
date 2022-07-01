
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
<div class="card card-body">
                            <div class="container">
                                <section class="p0">
                                    <h3>1. ¿Cuanto es 2 + 2?</h3>

                                    <label>
                                        <input type="radio" value="1" name="p0"
                                            onclick="respuestaSuma(0, this)"> 4
                                    </label>
                                    <label>
                                        <input type="radio" value="2" name="p0"
                                            onclick="respuestaSuma(0, this)"> 6
                                    </label>
                                    <label>
                                        <input type="radio" value="3" name="p0"
                                            onclick="respuestaSuma(0, this)"> 3
                                    </label>
                                    <label>
                                        <input type="radio" value="4" name="p0"
                                            onclick="respuestaSuma(0, this)"> 1
                                    </label>
                                </section>

                                <section class="p1">
                                    <h3>2. ¿Cuanto es 3 + 2?</h3>

                                    <label>
                                        <input type="radio" value="1" name="p1"
                                            onclick="respuestaSuma(1, this)"> 2
                                    </label>
                                    <label>
                                        <input type="radio" value="2" name="p1"
                                            onclick="respuestaSuma(1, this)"> 4
                                    </label>
                                    <label>
                                        <input type="radio" value="3" name="p1"
                                            onclick="respuestaSuma(1, this)"> 5
                                    </label>
                                    <label>
                                        <input type="radio" value="4" name="p1"
                                            onclick="respuestaSuma(1, this)"> 1
                                    </label>
                                </section>

                                <section class="p2">
                                    <h3>3. ¿Cuanto es 4 + 2?</h3>

                                    <label>
                                        <input type="radio" value="1" name="p2"
                                            onclick="respuestaSuma(2, this)"> 5
                                    </label>
                                    <label>
                                        <input type="radio" value="2" name="p2"
                                            onclick="respuestaSuma(2, this)"> 6
                                    </label>
                                    <label>
                                        <input type="radio" value="3" name="p2"
                                            onclick="respuestaSuma(2, this)"> 7
                                    </label>
                                    <label>
                                        <input type="radio" value="4" name="p2"
                                            onclick="respuestaSuma(2, this)"> 2
                                    </label>
                                </section>

                                <section class="p3">
                                    <h3>4. ¿Cuanto es 3 + 5?</h3>

                                    <label>
                                        <input type="radio" value="1" name="p3"
                                            onclick="respuestaSuma(3, this)"> 8
                                    </label>
                                    <label>
                                        <input type="radio" value="2" name="p3"
                                            onclick="respuestaSuma(3, this)"> 4
                                    </label>
                                    <label>
                                        <input type="radio" value="3" name="p3"
                                            onclick="respuestaSuma(3, this)"> 2
                                    </label>
                                    <label>
                                        <input type="radio" value="4" name="p3"
                                            onclick="respuestaSuma(3, this)"> 7
                                    </label>
                                </section>

                                <section class="p4">
                                    <h3>5. ¿Cuanto es 1 + 8?</h3>

                                    <label>
                                        <input type="radio" value="1" name="p4"
                                            onclick="respuestaSuma(4, this)"> 5
                                    </label>
                                    <label>
                                        <input type="radio" value="2" name="p4"
                                            onclick="respuestaSuma(4, this)"> 8
                                    </label>
                                    <label>
                                        <input type="radio" value="3" name="p4"
                                            onclick="respuestaSuma(4, this)"> 10
                                    </label>
                                    <label>
                                        <input type="radio" value="4" name="p4"
                                            onclick="respuestaSuma(4, this)"> 9
                                    </label>
                                </section>

                                <button onclick="corregirSuma()"> Terminar </button>
                                <br>
                                <h2>Califiacion: <span id="resultadoSuma"></span></h2>
                            </div>
                        </div>   
</body>
</html>