<?php

function create_table ($info, $link){
    $id = 0;
    echo "<table><thead>";
    foreach ($info as $key){
        foreach ($key as $key1 => $value){
            echo "<th>$key1</th>";
    }
    break;
}
echo "</thead>";
foreach ($info as $key){
    echo "<tr>";
    foreach ($key as $key1){
        if ($key["id"] == $key1){
            $id = $key1;
        }
        echo "<td>$key1</td>";
    }
    if($link){
        echo "<td><a href='detal.php?id_text={$id}' target='_blank'>Больше информации...</a></td>";
    }
    echo "</tr>";
}
    echo "</table>";
}