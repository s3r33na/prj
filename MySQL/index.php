<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="HI.php" method="post">
    <table style="border:solid;"></table>
    <label for="firstName" >first name</label>
    <input type="text" name="FName" id="firstName"><br><br>
    <label for="age">age</label>
    <input type="text" name="age" id="age"><br>

    <input type="radio" name="gender" id="gender" value="male">Male
    <input type="radio" name="gender" id="gender" value="female">female

    <br>
    <label for="">which course</label>
    <input type="checkbox" name="php" id="">php
    <input type="checkbox" name="java" id="">java
    <input type="checkbox" name="sdlc" id="">sdlc
    <br> 
    select your major
    <select name="major" id=""></select>
    <option value="ai">ai</option>
    <option value="cloud">cloud</option>
    <option value="cyber">cyber</option>


    <button type="submit">submit</button>

</form>
</body>
</html>
