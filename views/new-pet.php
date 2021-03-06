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

            <check if="{{ isset(@errors['name'])}}">
                <h2>Error in name!</h2>
            </check>
            <label class="col-sm-3 control-label" for="pet-name">Pet Name:
                <input type="text" name="pet-name" id="pet-name">
            </label>

            <label class="col-sm-2 control-label" for="pet-color">Pet Color:

                <check if="{{ isset(@errors['color']) }}">
                    <h2>
                        Error in color!
                    </h2>
                </check>

                <select name="pet-color" id="pet-color" class="form-control">
                    <option>--Select--</option>
                    <repeat group="{{ @colors }}" value="{{ @colorOption }}">
                        <option>
                            <check if="{{ @colorOption == @color }}">
                                selected
                            </check>
                            {{ @colorOption }}
                        </option>
                    </repeat>
                </select>
            </label>

            <check if="{{ isset(@errors['type'])}}">
                <h2>Error in type!</h2>
            </check>
            <label class="col-sm-3 control-label" for="pet-type">Pet Type:
                <input type="text" name="pet-type" id="pet-type">
            </label>

            <label class="col-sm-2">
                <input type="submit" name="submit" value="submit">
            </label>

        </fieldset>
    </form>

    <check if="{{ @success }}">
        <div></div>
        <false>Thanks for your order of a {{ @name}} {{ @color }} {{ @type }}</false>
    </check>

</div>
</body>
</html>