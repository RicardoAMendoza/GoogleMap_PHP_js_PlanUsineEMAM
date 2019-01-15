<?php
require_once('datainv.php');
?>
<!DOCTYPE html>
<html>
	<head>
	    <title>Machines</title>
	    <meta name="description" content="École des Métiers de l'Aérospatiale de Montréal">
	    <meta charset="utf-8">
	    <!--===============================================================================================-->
	    <!--icon in tab-->
		<link rel="icon" type="image/png" href="img/icons/EMAM.png"/>
	    <!--===============================================================================================-->
		<!-- 1.- MODAL -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link id="bootstrap-css" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <!--===============================================================================================-->
	    <!-- 2.- MODAL -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
           var $y = jQuery.noConflict();
           //alert("Version: "+$y.fn.jquery);
        </script>
	    <!--===============================================================================================-->
		<!-- 3.- MODAL -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
	    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
	    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-en-US.min.js"></script>
	    <script src="//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/extensions/export/bootstrap-table-export.min.js"></script>
		<!--===============================================================================================-->
		<!-- usine zoom-->
		<script type="text/javascript" src="javascripts/mapzoom.js"></script>
		<!-- usine tooltip-->
		<script type="text/javascript" src="javascripts/cvi_tip_lib.js"></script>
		<script type="text/javascript" src="javascripts/maputil.js"></script>

		<script type="text/javascript">
          mapzoom.defaultCurpath='img/cursors/';
        </script>
		<!--===============================================================================================-->
        <!-- Script -->
	    <script src="javascripts/infoScript.js"></script>
        <!-- Css -->
	    <link rel="stylesheet" href="css/table.css" type="text/css"/>
	    <link rel="stylesheet" href="css/planstyle.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="css/cvi_tip.css" />
	</head>
	<body>
        <div id="demo" class="inlet"><hr style="visibility:hidden;"/>
	        <div id="wrapper" unselectable="on">
				<div id="mapper" unselectable="on">
					<img onLoad="mapzoom.add(this);" id="usine" class="mapzoom"  src="img/PLANS-EMAM.jpg" width="1500" height="825" alt="" border="0" usemap="#usine_map" />

					<button type="button" onclick="mapzoom.set($('img'),'zoomin',true);"> + </button>
					<button type="button" onclick="mapzoom.set($('img'),'zoomout',true);"> - </button>
					<script type="text/javascript">
						mapzoom.add(document.getElementById('img'));
						mapzoom.defaultWheelinvert= false; //BOOLEAN makes zoom behaviour identical with Google Maps
					</script>
				</div>
			</div>
				<map name="usine_map">
				    <?php
				    global $DataInv;
				    $DataInv->LoadSQL("SELECT * FROM bd_inventaire.qinventaire where typecat=? and coords !=  '' ",array('MAC'));

				    while( ! $DataInv->Qry->EOF)
				    {
					?>
					<area shape= "<?php echo $DataInv->Qry->shape ?>" tooltip="<b><?php echo $DataInv->Qry->local ?></b><br/><small><i><?php echo $DataInv->Qry->poste ?> - <?php echo $DataInv->Qry->Marque ?> - <?php echo $DataInv->Qry->modele ?></i></small>"  coords= "<?php echo $DataInv->Qry->coords?>" alt="mac" href="javascript:visualiser('<?php echo $DataInv->Qry->noserie ?>')">
						<?php
						   $DataInv->Qry->Next();
					}
					?>
				</map>
			<!-- MODAL -->
			<?php include('plan-modal.php'); ?>

		</div>
	</body>
</html>
