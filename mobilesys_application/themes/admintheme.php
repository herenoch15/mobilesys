<?php 
$as_json = false;
 if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") 
 {
    $as_json = true;
    ob_start();
} else 
{

  ?>
      <!DOCTYPE html>
      <html lang="fr" >
      <head>
          <title><?php echo $titre; ?></title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          
          <?php
      	  if(!$metadescr)
          {
      	     ?><meta name="description" content="">
          <?php			
      	  }
      	  if(!$metakeyword)
          {
      	    ?><meta name="keyword" content="">
          <?php
      		}
      	  ?>
       

          <link rel="shortcut icon" type="image/x-icon" href="<?php print (site_url("assets/images/logo.ico")); ?>"/>
          <?php 

          foreach($css as $url): 
          ?><link rel="stylesheet" type="text/css"  href="<?php echo $url; ?>" />
          <?php endforeach; 
          
          foreach($js as $url): 
          ?><script  language="javascript" src="<?php echo $url; ?>"></script>
          <?php endforeach; 
          ?>
          
      </head>
      <body >





      <div class="container">


          <?php foreach($metadescr as $url): ?>
          <meta name="description" content="<?php echo $url ?>">
          <?php endforeach; ?>
          <?php foreach($metakeyword as $url): ?>
          <meta name="keyword" content="<?php echo $url ?>">
          <?php endforeach; 

      ?>
        <!-- EN TETE PAGE HTML & PHP --> 
        <?php
          echo $header;
        ?>
    


            <div id="body_pageCenter" class="col-sm-push-1 col-sm-10 col-sm-pull-1">
                    <?php
                    }

                    echo $output;
                    if ($as_json)
                    {
                        echo json_encode(array("page" => $titre, "content" => ob_get_clean()));
                    } else
                    {
                    ?>

            </div>
        </div>
        <!-- FIN BODY PAGE -->



      </div>

      <!-- PIED DU PAGE HTML & PHP -->
      <?php
      echo $footer;
      ?>

      </body>
      </html>

<?php 
}
?>


