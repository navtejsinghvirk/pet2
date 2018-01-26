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

            <?php if (isset($errors['name'])): ?>
                <?php else: ?>Error in name!
            <?php endif; ?>
            <label class="col-sm-3 control-label" for="pet-name">Pet Name:
                <input type="text" name="pet-name" id="pet-name">
            </label>

            <label class="col-sm-2 control-label" for="pet-color">Pet Color:

                <?php if (isset($errors['color'])): ?>
                    <?php else: ?>
                        Error in color!
                    
                <?php endif; ?>

                <select name="pet-color" id="pet-color" class="form-control">
                    <option>--Select--</option>
                    <?php foreach (($colors?:[]) as $colorOption): ?>
                        <option>
                            <?php if ($colorOption == $color): ?>
                                selected
                            <?php endif; ?>
                            <?= ($colorOption)."
" ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>

            <?php if (isset($errors['type'])): ?>
                <?php else: ?>Error in type!
            <?php endif; ?>
            <label class="col-sm-3 control-label" for="pet-type">Pet Type:
                <input type="text" name="pet-type" id="pet-type">
            </label>

            <label class="col-sm-2">
                <input type="submit" name="submit" value="submit">
            </label>

        </fieldset>
    </form>

    <?php if ($success): ?>
        <?php else: ?>Thanks for your order of a <?= ($name) ?> <?= ($color) ?> <?= ($type) ?>
    <?php endif; ?>

</div>
</body>
</html>