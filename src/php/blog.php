<?php

//  1 = displays all posts, takes max posts as auxinfo
//  2 = displays folder


function nodb_blog($content, $auxinfo)
{
    include "funcs/blog_out.php";    
    include "funcs/folder_display.php";

    if ($content = "posts" || 1)
    {
        blog_out($auxinfo);
        return "";
    }
    else if ($content == "folder" || 2)
    {
        folder_display();
        return "";

    }

}
?>
