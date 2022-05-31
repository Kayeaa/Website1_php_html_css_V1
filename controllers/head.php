<?php
$title="";

if(isset($_GET["page"]))
{
    if ($_GET ["page"] == "contact")
        $title = "Contact me";

    else if ($_GET ["page"] == "projects")
        $title = "My Projects";

    else if ($_GET ["page"] == "skills")
            $title = "Skills";

    else if ($_GET ["page"] == "faq")
        $title = "FAQ";

    else{
        $title = "REA";
  }  
}

require("./views/head.php");
?>