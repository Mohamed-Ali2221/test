<?php


/*
Plugin Name: test plugin
Description: this is test plugin to test plugins
Authot: mohamed
Version: 5.1.0
*/


add_action("admin_menu","addMenu");
function addMenu()
{
    add_menu_page("Exampel Options","Exampel Options", 4,"exampel-options","exampelMenu");
    add_submenu_page("exampel-options","Options 1", "Options 1", 4,"exampel-option-1","option1");
    
}

function exampelMenu(){
    echo "hello you are in the exampel Menu";
    echo "<h2> you will get table</h2>";
 
               
              		echo "<tr>";
              		echo "<td>";
                    echo "exampelMenu";
              		echo "</td>";
                    echo"<br>";
              		echo "<td>";
              		echo "exampelMenu";
              		echo "</td>";
              		
              	
}
function option1(){
    echo "hello you are in the sub Menu option 1";
}

?>