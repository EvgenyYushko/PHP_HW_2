<?php
    require __DIR__ . '/calc.php';
?>
<html>
<head>
    <title>Calc whith use PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<form action="/index.php" method="post">
    <div class="calculator">
        <input id="input" name="result" type="text" class="calculator-screen" value = <?= $result ?> />
        <div class="calculator-keys">
            <button onclick="Press('+')" type="button" class="operator btn btn-info" value="+">+</button>
            <button onclick="Press('-')" type="button" class="operator btn btn-info" value="-">-</button>
            <button onclick="Press('*')" type="button" class="operator btn btn-info" value="*">&times;</button>
            <button onclick="Press('/')" type="button" class="operator btn btn-info" value="/">&divide;</button>
            <button onclick="Press(7)" type="button" value="7" class="btn btn-light waves-effect">7</button>
            <button onclick="Press(8)" type="button" value="8" class="btn btn-light waves-effect">8</button>
            <button onclick="Press(9)" type="button" value="9" class="btn btn-light waves-effect">9</button>
            <button onclick="Press(4)" type="button" value="4" class="btn btn-light waves-effect">4</button>
            <button onclick="Press(5)" type="button" value="5" class="btn btn-light waves-effect">5</button>
            <button onclick="Press(6)" type="button" value="6" class="btn btn-light waves-effect">6</button>
            <button onclick="Press(1)" type="button" value="1" class="btn btn-light waves-effect">1</button>
            <button onclick="Press(2)" type="button" value="2" class="btn btn-light waves-effect">2</button>
            <button onclick="Press(3)" type="button" value="3" class="btn btn-light waves-effect">3</button>
            <button onclick="Press(0)" type="button" value="0" class="btn btn-light waves-effect">0</button>
            <button onclick="Press('.')" type="button" class="decimal function btn btn-secondary" value=".">.</button>
            <button onclick="Refrash()" type="button" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>
            <button type="submit" class="equal-sign operator btn btn-default" value="=">=</button>
        </div>
    </div>
</form>
<script>
    function Press(str) {
        event.preventDefault();
        let inputValue = document.getElementById('input').value;

        if(inputValue.includes("=")){ 
            $('#input').val(str);
            return;
        }

        if(inputValue == 0) $('#input').val(str);
        else $('#input').val(inputValue + str);
    }
    
    function Refrash() { $('#input').val('0'); }
</script>
</body>


