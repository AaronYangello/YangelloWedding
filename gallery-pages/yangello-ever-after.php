<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=0.5,user-scalable=no">
        <title>Engagement Photos</title>

        <style>
        body{background:#000;}
        </style>

       <!-- Favicon Stuff -->
        <link rel="apple-touch-icon" sizes="57x57" href="img/icon/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/icon/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icon/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/icon/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icon/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/icon/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/icon/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/icon/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/icon/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/icon/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/icon/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/icon/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/icon/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
<body>
    <div class="galleria">      
       <?php
        //Include database configuration file
        include('dbConfig.php');

        //get images from database
        $query = $db->query("SELECT * FROM `gallery-photos` WHERE `gallery` = 'yangello-ever-after'  ORDER BY datetaken ASC, id ASC"); ?>

       <?php
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageURL = "..\\" . $row["imagepath"];
                $thumbURL = "..\\" . $row["thumbnailpath"];
                $caption = "..\\" . $row["caption"];
        ?>
            <a href="<?php echo $thumbURL; ?>">
                <img src="<?php echo $thumbURL; ?>" 
                     data-big="<?php echo $imageURL; ?>"
                     data-title="title"
                     data-description="<?php echo $caption; ?>"/>
            </a>
        <?php }
        } ?>
       
    </div>

    <!-- load jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <!-- load Galleria -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.4/galleria.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.4/themes/fullscreen/galleria.fullscreen.min.js"></script>
    <script>
        $(function() {
            Galleria.run('.galleria');
        });
    </script>
    </body>
</html>