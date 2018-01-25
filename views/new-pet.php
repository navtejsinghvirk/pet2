<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<form action="#" method="post">
    <fieldset>
    <legend> Order a Pet</legend>
        <label>Pet Name:<input type="text"></label>
<label>Pet Color <select name="pet-color" id="pet-color">
        <repeat group="{{ @colors }}" value ="{{@colorOption}}">
            <option>{{@colorOption}}</option>
        </repeat>
    </select>
</label>
        <label>
            Pet Type:<input type="text"></label>
    <input type="button" value=" Submit">
    </fieldset>
</form>
</div>
</body>
</html>