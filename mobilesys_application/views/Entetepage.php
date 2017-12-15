<div id="Entete_page" class="row">
	<div class="col-sm-push-1 col-sm-10 col-sm-pull-1" >
		<nav id="EnteteMenue" class="navbar navbar-inverse navbar-fixed-top">
			<div id="Panelmenue" class="container-fluid">

				<div class="navbar-header<?php if($menueActive=="Accueil") { ?> active<?php } ?>">
					<button id="btnBarr" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a  id="mobilSysmenue" menueP="Accueil" class="navbar-brand<?php if($menueActive=="Accueil") { ?> active<?php } ?>"  href="<?php print (site_url(''));  ?>"><div id="textMobilesys">MobileSys</div></a>
				</div>

				<ul id="menueDroite" class="nav navbar-nav navbar-right hidden-xs">
					<li><a href="#" id="panelIn"><span id="IN_menue" ></span></a></li>
					<li><a href="#" id="panelFB"><span id="FB_menue" ></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>

				</ul>

				<div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="visible-xs"><a   id="mobilSysAccueil" menueP="Accueil" href="<?php print (site_url(''));  ?>" class="ajax-nav<?php if($menueActive=="Accueil") { ?> active<?php } ?>" ><div class="labelmenue">Accueil</div></a></li>
							<li><a   menueP="Services"  href="<?php print (site_url('nos-services'));  ?>" class="ajax-nav<?php if($menueActive=="Services") { ?> active<?php } ?>" ><div class="labelmenue">Services</div></a></li>
							<li><a   menueP="Realisations"  href="<?php print (site_url('nos-realisations'));  ?>" class="ajax-nav<?php if($menueActive=="Realisations") { ?> active<?php } ?>" ><div class="labelmenue">Realisation</div></a></li>
							<li><a id="mobilSysContact"  menueP="Contact"  class="ajax-nav <?php if($menueActive=="Contact") { ?> active<?php } ?>" href="<?php print (site_url('contact'));  ?>"><div class="labelmenue">Contact</div></a></li>
						</ul>
					</div>
				</div>

			</div>
		</nav>
	</div>
</div>


