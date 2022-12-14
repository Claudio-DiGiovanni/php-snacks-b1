<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <?php 
        $arrRandom = [];
        while (count($arrRandom) < 15) {
            $randNum = rand(1, 100);
            if (!in_array($randNum, $arrRandom)) {
                $arrRandom[] = $randNum;
            }
        }
    ?>

    <ol>
        <?php 
            for ($i = 0; $i < count($arrRandom); $i++) {
                echo "<li><strong>$arrRandom[$i]</strong></li>";
            }
        ?>
    </ol>
</body>
</html>