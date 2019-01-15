<?php
require_once('datainv.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<!--<p>
		 * PlanUsineEMAM, PHP and jQuery
		 * Version 0.1
		 * Original author: Andy DEl Risco & Ricardo Mendoza
		 * Released with the MIT License: http://www.opensource.org/licenses/mit-license.php
		 * Copyright (c) 2018 Andy DEl Risco and Ricardo Mendoza
		 * summer 2018
		</p>-->
	   <title>Machines</title>
	   <meta name="description" content="�cole des m�tiers de l'a�rospatiale de Montr�al">
	   <meta charset="utf-8">
	   <!--===============================================================================================-->
       <!--icon in tab-->
		<link rel="icon" type="image/png" href="img/icons/EMAM.gif"/>
	   <!--===============================================================================================-->
	   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="/css/planstyle.css">
	   <link id="bootstrap-css" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	   <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	     <!--===============================================================================================-->
	   <!--MODAL-->
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script>
           var $y = jQuery.noConflict();
           //alert("Version: "+$y.fn.jquery);
       </script>
	   <!--===============================================================================================-->
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
	   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
	   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
	   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-en-US.min.js"></script>
	   <script src="//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
	   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/extensions/export/bootstrap-table-export.min.js"></script>
	   <!--===============================================================================================-->
	   <!-- Script -->
	   <script src="javascripts/scriptusinInfo.js"></script>
       <!-- Css -->
	   <link rel="stylesheet" href="css/table.css" type="text/css"/>


	<style>
	.mapwrapper {
	  margin: 20px auto;
	 /* width: 469px;*/
	 width: 1500px;
	}

	#viewport, #viewport2 {
		/*width: 469px;*/
		width: 1500px;

		/*height: 400px;*/
		height: 825px;

		cursor: move;
		overflow: hidden;
	}

	.mapwrapper {
		position: relative;
	}

	.map-control {
		position: absolute;
		top: 50px;
		right: 10px;
		background: url(img/map-control.png) no-repeat;
		height: 63px;
		width: 100px;
	}

	.map-control a {
		height: 18px;
		width: 18px;
		display: block;
		text-indent: -999em;
		position: absolute;
		outline: none;
	}

	.map-control a:hover {
		background: #535353;
		opacity: .4;
		filter: alpha(opacity=40);
	}

	.map-control a.left {
		left: 39px;
		top: 22px;
	}

	.map-control a.right {
		left: 79px;
		top: 22px;
	}

	.map-control a.up {
		left: 59px;
		top: 2px;
	}

	.map-control a.down {
		left: 59px;
		top: 42px;
	}

	.map-control a.zoom {
		left: 2px;
		top: 8px;
		height: 21px;
		width: 21px;
	}

	.map-control a.back {
		left: 2px;
		top: 31px;
		height: 21px;
		width: 21px;
	}
	</style>

	</head>
	<body >   <!--
					<img src="img/PLANS-EMAM.jpg" alt="Plans" usemap="#planmap1">
					<map name="planmap1">

						<?php
						global $DataInv;
						$DataInv->LoadSQL("SELECT * FROM bd_inventaire.tinvmaster where typecat=? and coords !=  '' ",array('MAC'));
						//$DataInv->LoadSQL("SELECT * FROM bd_inventaire.tinvmaster where typecat=? and coords is not null",array('MAC'));

						while( ! $DataInv->Qry->EOF)
						{
						?>   -->
            <!--
							<area shape= "<?php echo $DataInv->Qry->shape ?>" coords= "<?php echo $DataInv->Qry->coords?>" alt="mac" href="#" onclick="visualiser('<?php echo $DataInv->Qry->noserie ?>')">
						<?php
						   $DataInv->Qry->Next();
						}
						?>

					</map>
          -->
		<div  class="mapwrapper">
			<h4>Mousewheel enabled</h4>
			<div id="viewport">
      <!--
				<div style="background: url(img/PLANS-EMAM.img.1500.jpg) no-repeat; width: 1500px; height: 825px;">
                    <!--top level map content goes here
				</div>     -->
				<div style="height: 2500px; width: 4540px;">
					<img src="img/PLANS-EMAM.jpg" alt="Plans" usemap="#planmap2">
					<map name="planmap2">
					   <?php
					   global $DataInv;
					   $DataInv->LoadSQL("SELECT * FROM bd_inventaire.tinvmaster where typecat=? and coords !=  '' ",array('MAC'));

					   while( ! $DataInv->Qry->EOF)
					   {
						?>
						   <area shape= "<?php echo $DataInv->Qry->shape ?>" coords= "<?php echo $DataInv->Qry->coords?>" alt="mac" href="#" onclick="visualiser('<?php echo $DataInv->Qry->noserie ?>')">
						<?php
						   $DataInv->Qry->Next();
						}
						?>
					</map>
					<div class="mapcontent">
					    <!--map content goes here-->
					</div>
				</div>
			</div>
		</div>
		<div class="mapwrapper">
			<h4>Simple control panel</h4>
			<div id="viewport2">
				<div style="background: url(img/PLANS-EMAM.img.1500.jpg) no-repeat; width: 1500px; height: 825px;">
					<!--top level map content goes here-->
				</div>
				<div style="height: 2500px; width: 4540px;">
                   <img src="img/PLANS-EMAM.jpg" alt="Plans" usemap="#planmap3" >
 					<map name="planmap3">
					   <?php
					   global $DataInv;
					   $DataInv->LoadSQL("SELECT * FROM bd_inventaire.tinvmaster where typecat=? and coords !=  '' ",array('MAC'));

					   while( ! $DataInv->Qry->EOF)
					   {
						?>                                                                                                       <!-- front-end script.js: visualiser documents dan le modal admin-->
						   <area shape= "<?php echo $DataInv->Qry->shape ?>" coords= "<?php echo $DataInv->Qry->coords?>" alt="mac" href="#" onclick="visualiser('<?php echo $DataInv->Qry->noserie ?>')">
						<?php
						   $DataInv->Qry->Next();
						}
						?>
					</map>
					<div class="mapcontent">
					    <!--map content goes here-->
					</div>
                </div>
			</div>
			<div class="map-control">
				<a href="#left" class="left">Left</a>
				<a href="#right" class="right">Right</a>
				<a href="#up" class="up">Up</a>
				<a href="#down" class="down">Down</a>
				<a href="#zoom" class="zoom">Zoom</a>
				<a href="#zoom_out" class="back">Back</a>
			</div>
		</div>

						<!-- MODAL<?php include('plan-modal.php'); ?>  -->
        <!--
		<script type="text/javascript">
			$(document).ready(function() {
				$("#viewport").mapbox({mousewheel: true});
				$("#viewport2").mapbox({
					layerSplit: 8 //smoother transition for mousewheel
				});
				$(".map-control a").click(function() { //control panel
					var viewport = $("#viewport2");
					// this.className is same as method to be called
					if(this.className == "zoom" || this.className == "back") {
						viewport.mapbox(this.className, 2);//step twice
					}
					else {
						viewport.mapbox(this.className);
					}
					return false;
				});
			});
		</script>
		-->
	</body>
</html>
<?php
?>
