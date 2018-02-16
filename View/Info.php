<!DOCTYPE html>
<html>
    <head>
        <title>Ron's Webseite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <!-- Header -->
        <div id="header" class="startDiv">
            <title>Info</title>
        </div>
        
        <!-- Navi class->. -->
        <div id="navibereich" class="startDiv">
            <nav>
                <ul>
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li><a href="View/Gastebuch.php">Gästebuch</a></li>  
                    <li style="float:right"><a href="#">Info</a></li>
                </ul>
            </nav>            
        </div>
        
        <!-- Text -->
        <div id="textbereich" class="startDiv">
            <?php
            echo "<p>Hello World \n hallo</p>";
            ?>
        </div>
        
        <!-- Footer -->
        <div id="footer" class="startDiv">
            <p>Created by Ron Schürch</p>
        </div>
        
               
        
        
        
        
    </body>
</html>
