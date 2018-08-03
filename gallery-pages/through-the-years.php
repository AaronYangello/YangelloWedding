<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Through the Years</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Aaron and Kelsea's Wedding" />
        <meta name="keywords" content="Aaron, Yangello, Kelsea, Salvatore, Wedding" />
        <meta name="author" content="Aaron Yangello" />
        
        <link rel="stylesheet" href="../css/superslides.css">
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">

<!-- Photo Slider -->
<div id="slides">
    <div class="slides-container">
        <?php
        //Include database configuration file
        include('dbConfig.php');

        //get images from database
        $query = pg_query($db,"SELECT * FROM \"yangello-wedding\".\"gallery-photos\" WHERE gallery = 'through_the_years' ORDER BY datetaken;"); ?>

       <?php
        if($query->num_rows > 0){
            while($row = pg_fetch_row($query)){
                $imageURL = "..\\" . $row[1];
        ?>
            <div>
                <img src="<?php echo $imageURL; ?>" />
                <div class="caption-box">
                    <p class="caption"><?php echo $row[2]?></p>
                </div>
            </div>
        <?php }
        } ?>
    </div>

   <div class="slides-navigation">
        <a href="#" class="next"><div class="next-btn"></div></a>
        <a href="#" class="prev"><div class="prev-btn"></div></a>
    </div>
</div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.animate-enhanced.min.js"></script>
    <script src="../js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
    <script>
    $(function() {
      $('#slides').superslides({
        hashchange: true
      });
    });
    </script>	
<!-- End Photo Slider -->
</div>
</body>
</html>

