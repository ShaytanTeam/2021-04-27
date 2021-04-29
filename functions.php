<?php

function arrayToTable($data)
{
    echo "<table class=\"table\">";

    // Table header
    foreach ($data[0] as $header)
    {
        echo "<th>" . $header . "</th>";
    }

    // Table body
    $body = array_slice($data, 1, null, true);

    foreach ($body as $row)
    {
        echo "<tr>";
        foreach ($row as $cell)
        {
            echo "<td>" . $cell . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}