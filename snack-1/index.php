<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks 1</title>
</head>
<body>
    <?php
        $arrGame = [
            [
                'casa' => [
                    'nome' => 'varese',
                    'punteggio' => 60,
                ],
                'ospite' => [
                    'nome' => 'cantù',
                    'punteggio' => 30,
                ],
            ],
            [
                'casa' => [
                    'nome' => 'milano',
                    'punteggio' => 89,
                ],
                'ospite' => [
                    'nome' => 'roma',
                    'punteggio' => 58,
                ],
            ],
            [
                'casa' => [
                    'nome' => 'pisa',
                    'punteggio' => 14,
                ],
                'ospite' => [
                    'nome' => 'firenze',
                    'punteggio' => 70,
                ],
            ],
            [
                'casa' => [
                    'nome' => 'sette laghi',
                    'punteggio' => 50,
                ],
                'ospite' => [
                    'nome' => 'como',
                    'punteggio' => 25,
                ],
            ],
        ];
    ?>

    <h1>Partite di basket</h1>
    <ul>
        <?php 
            for ($i = 0; $i < count($arrGame); $i++) {
                $game = $arrGame[$i];
                $casa = $game['casa'];
                $nomeCasa = ucfirst($casa['nome']);
                $punteggioCasa = $casa['punteggio'];
                $ospite = $game['ospite'];
                $nomeOspite = ucfirst($ospite['nome']);
                $punteggioOspite = $ospite['punteggio'];
                echo "<li>$nomeCasa - $nomeOspite $punteggioCasa - $punteggioOspite</li>";
            }
            
        ?>
    </ul>
</body>
</html>