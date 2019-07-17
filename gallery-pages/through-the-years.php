<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=0.5,user-scalable=no">
        <title>Through the Years</title>

        <style>
        body{background:#000;}
        </style>

    </head>
<body>
    <div class="galleria">      
       <?php
        //Include database configuration file
        include('dbConfig.php');

        //get images from database
        $query = $db->query("SELECT * FROM `gallery-photos` WHERE `gallery` = 'through-the-years'  ORDER BY datetaken ASC, id ASC"); ?>

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