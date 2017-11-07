


<!DOCTYPE html>
<html lang="fr" >
<head>
    <title><?php echo $titre; ?></title>
    
    
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	 <?php foreach($metadescr as $url): ?>
         <meta name="description" content="<?php echo $url ?>">
    <?php endforeach; ?>
     <?php foreach($metakeyword as $url): ?>
         <meta name="keyword" content="<?php echo $url ?>">
    <?php endforeach; ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?php print (site_url("assets/images/logo.ico")); ?>"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300" rel="stylesheet">
    <?php foreach($css as $url): ?>
         <link rel="stylesheet" type="text/css"  href="<?php echo $url; ?>" />
    <?php endforeach; ?>
</head>
<body>
<div id="all">

	<?php echo $output; ?>

</div>
<?php foreach($js as $url): ?>
<script type="text/javascript" src="<?php echo $url; ?>"></script>
<?php endforeach; ?>



  
        
</body>
</html>