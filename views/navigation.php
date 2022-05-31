<?php
require("./models/navigation.php");

echo "<ul>";
foreach($menu as $key => $value)
{
    if(is_array($value))
    {
        echo "<li>" . $key . "</li>";
        echo "<ul>";

        foreach($value as $subValue => $subkey)
        {
            echo "<li><a href='".$subkey."'>".$subValue."</a></li>";
        }
        echo "</ul>";
    }
    else
        echo "<li><a href='".$value."'>".$key."</a></li>";
}
echo "</ul>";
?>