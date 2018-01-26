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
    <form action="#" method="POST">
    <fieldset>
    <legend> Order a Pet</legend>
        <label>
            Pet Name:<input type="text" name="pet-name" id="pet-name">
        </label>
         <label class="col-sm-1 control-label" for="pet-color">Pet Color:

             <div class="col-sm-3">
                 <check if="{{ @errors['color']}}">
                     <p>{{@ errors['color'] }}</p>
                 </check>
             <select name="pet-color" id="pet-color" class="form-control">
                 <option>--Select--</option>
                <repeat group="{{ @colors }}" value ="{{@colorOption}}">
                    <option
                    <check if="{{ @colorOption == @color }}">
                        selected </check>
                       {{@colorOption}}
                    </option>
                </repeat>
             </select>
             </div>
       </label>
        <label>Pet Type:
            <input type="text" name="pet-type" id="pet-type">
        </label>
       <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>

    <check if="{{ @success }}">
        <h2>Thanks for your oder of{{ @pet-type }}</h2>
    </check>
</div>
</body>
</html>