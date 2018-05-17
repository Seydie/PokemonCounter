<?php
require_once('classes/Database.php');
require_once('classes/Pokemons.php');
    $pokemon = new Pokemons();

    if(isset($_POST['Add'])) {
        $pokemon->addPokemon('variants', $_POST["id"]);
    }
    if(isset($_POST['Remove'])) {
        $pokemon->removePokemon('variants', $_POST["id"]);
    }

?>

<!doctype html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            td, th {
                border: 1px solid black;
                padding: 10px;
            }
            table {
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Pokémon</th>
                <th>Amount</th>
                <th>Add / Remove</th>
            </tr>
        <?php
            echo $pokemon->showPokemon('variants');
        ?>
        </table>
    </body>
</html>