<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Převod</title>
</head>
<body>
<br>
<label for="castka">Částka:</label>
<input type="number" id="castka" name="castka" min="1" max="99999">
<br>
<label for="radio">Převod:</label>
<input type="radio" id="euranakoruny" name="euranakoruny" value="eur_czk">
<label for="euranakoruny">Eura na Koruny</label>
<br>
<input type="radio" id="korunynaeura" name="korunynaeura" value="czk_eur">
<label for="korunynaeury">Koruny na Eura</label><br>  
<br>
<input type= "submit" value="Převést" name="submit">
</body>
</html>