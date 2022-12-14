<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <?php 
        if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $pos_at = strpos($mail, '@');
            $boolMail = is_numeric($pos_at) && is_numeric(strpos($mail, '.', $pos_at));
            $age = $_GET['age'];
            if (strlen($name) > 3 && $boolMail && is_numeric($age)) {
                $message = "Accesso consentito";
            } else {
                $message = "Accesso negato";
            }
        } else {
            $message = "credenziali NON inserite";
        }
    ?>
    <h1>Inserisci le credenziali</h1>
    <form action="" method="GET">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name">
        <label for="mail">Mail</label>
        <input type="text" id="mail" name="mail">
        <label for="age">Età</label>
        <input type="number" id="age" name="age">
        <button>Accedi</button>
    </form>
    <h2><?= $message ?></h2>
</body>
</html>