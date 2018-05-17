<?php

class Pokemons
{
    private $database;

    function __construct()
    {
        $this->database = new Database();
    }

    public function showPokemon($type) {
        $content = "";
        $result = $this->database->mysqli->query("SELECT * FROM $type");
        while($row = $result->fetch_assoc()) {
            $content .= "<tr>";
            $content .= "<td>" . "<img src='../assets/pokemons/" . $row['id'] . ".png'>";
            $content .= "<td>" . $row['name'] . "</td>";
            $content .= "<td>" . $row['amount'] . "</td>";
            $content .= "<td>" . "<form name='form' method='post'><input type='submit' name='Add' value='Add' /> / <input type='submit' name='Remove' value='Remove' /> <input hidden type='text' name='id' value='". $row["id"]."'/> </form>" . "</td>";
            $content .= "</tr>";
        }
        return $content;
    }

    public function addPokemon($type, $id) {
        return $this->database->mysqli->query("UPDATE $type  SET amount = amount +1 WHERE id = {$id}");
    }

    public function removePokemon($type, $id) {
        return $this->database->mysqli->query("UPDATE $type  SET amount = amount -1 WHERE id = {$id}");
    }
}