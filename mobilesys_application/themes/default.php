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
     

        <!-- BODY PAGE -->
        <div id="BodyPanel" class="row">
        <div id="panelslideServiceccueil">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div id="slideServicepageAccueil" class="carousel-inner">
                <div class="item active" style="background:url('../../assets/images/actufonecran2.jpg')">
                   <div class="row">
                     <div class="col-sm-push-2 col-sm-8 col-sm-pull-2 slide-listPanelimg" style="background:red" >
                     ddd
                     </div>
                   </div>
                </div>

                <div class="item" style="background:url('../../assets/images/actufonecran2.jpg')" >
                  <div class="row">
                     <div class="col-sm-push-2 col-sm-8 col-sm-pull-2 slide-listPanelimg" style="background:#fff">
                     ddd
                     </div>
                   </div>
                </div>

                <div class="item" style="background:url('../../assets/images/actufonecran2.jpg')" >
                  <div class="row">
                     <div class="col-sm-push-2 col-sm-8 col-sm-pull-2 slide-listPanelimg" style="background:#000">
                     ddd
                     </div>
                   </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control pagination" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control pagination" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>


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


