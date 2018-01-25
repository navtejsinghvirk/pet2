<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair 2</title>
</head>
<body>
<h2> Order a Pet</h2>
<form action="#" method="post">
Pet Name:<input type="text">
Pet Color <select name="pet-color" id="pet-color">
        <repeat group="{{ @colors }}" value ="{{@colorOption}}">
            <option>{{@colorOption}}</option>
        </repeat>
    </select>
    Pet Type:<input type="text"><br><br>
    <input type="button" value=" Submit">
</form>
</body>
</html>