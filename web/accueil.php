<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>WebSysAdmin</title>

        <link rel="icon" href="mind_map.svg" sizes="any" type="image/svg+xml"/>
        <link rel="stylesheet" href="bootstrap.min.css"/>

    </head>

    <header>

    </header>

    <body>

    <!-- Le corps -->

    <div id="body" style="position:relative; margin-top:60px; margin-left:auto; margin-right:auto; width:90%; background-color:grey; box-shadow: 5px 5px 0px silver;">
        <h1>Sys Admin Web</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>

    <div id="info">
        <?php
            $ip = $_SERVER['REMOTE_ADDR'];
            $host = gethostbyaddr("$ip");
            $user_agent = $_SERVER["HTTP_USER_AGENT"];
            echo "$ip";
            echo "$host";
            echo "$user_agent";
        ?>

        <?php phpinfo(); ?>

    </div>
              
    </body>
</html>