<?php
include_once ("Database.php");

$database = new Database();

$sql = "SELECT * FROM pokemon";

$resultados= $database->query($sql);


foreach ( $resultados as $item){

          echo  "<tr>".
                "<td>".$item["imagen"]."</td>".
                "<td>".$item["tipo"]."</td>".
                "<td>".$item["numero"]."</td>".
                "<td>".$item["nombre"]."</td>".
                "<td>
                    <input type='submit' class='btn btn-dark' name='modificacion' value='Modificacion'>
                    <input type='sumbit' class='btn btn-dark' name='baja' value='Baja'>
                </td>".
            "</tr>";
}

//$database->__destruct();