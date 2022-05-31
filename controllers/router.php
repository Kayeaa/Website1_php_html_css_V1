<?php
if (isset($_GET ["page"]))
{
    if ($_GET ["page"] == "contact") 
        require ("./controllers/contact.php");
    
    elseif ($_GET ["page"] == "projects")
        require ("./controllers/projects.php");
    
    elseif ($_GET ["page"] == "skills")
        require ("./controllers/skills.php");

    elseif ($_GET["page"] == "faq")
        require ("./controllers/faq.php");

    else 
      require("./controllers/Homepage.php");
  
}

?>