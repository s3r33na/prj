<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Welcom.php" method="post">
    <table style="border:solid;"></table>
    <label for="firstName" >first name</label>
    <input type="text" name="FName" id="firstName"><br><br>
    <label for="lastName">lastName</label>
    <input type="text" name="LName" id="firstName"><br>
    <br>
    <input type="radio" name="gender" id="gender" value="male">
    <label for="gender">Male</label>
    <input type="radio" name="gender" id="gender" value="female">
    <label for="gender">Female</label>
    <br>

    <input type="checkbox" name="subject" id="subject" value="web">
    <label for="subject">web </label>
    <input type="checkbox" name="subject2" id="subject2" value="cloud">
    <label for="subject2">cloud</label>
    <input type="checkbox" name="subject3" id="subject3" value="java">
    <label for="subject3">java</label>
    <br>
    <select name="chapters" id="chapters">
    <option value="cha1">cha1</option>
    <option value="cha2">cha2</option>
    <option value="cha3">cha3</option>
    <option value="cha4">cha4</option>
    </select>


    <button type="submit">submit</button>
            
</form>
</body>
</html>