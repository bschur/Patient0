<?php
    ini_set("session.use_trans_sid", 1);
    session_start();

    echo '<p>'.session_name().'='. session_id();
    echo '<p><a href=index.php">Link</a>';
    $_SESSION['username'] = 'hans';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ron's Webseite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <!-- Header -->        
        
        <!-- Navi class->. -->
        <div id="navibereich" class="startDiv">
            <nav>
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="View/Gastebuch.php">Gästebuch</a></li>
                    <li style="float:right"><a href="View/Info.php">Info</a></li>
                    <li style="float:right"><a href="View/Register.php">Registrieren</a></li>
                    <li style="float:right"><a href="View/Login.php">Login</a></li>
                    
                    
                </ul>
            </nav>            
        </div>
        
        <!-- Text -->
        <div id="textbereich" class="startDiv">
            <title>Titel</title>
            <h1>Überschrift</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            <h1>Überschrift Zwei</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   

                                                              Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.   

                                                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse</p>

        </div>
        
        <!-- Footer -->
        <div id="footer" class="startDiv">
            <p>Created by Ron Schürch</p>
        </div>
        
               
        
        
        
        
    </body>
</html>
