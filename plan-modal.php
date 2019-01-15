<?php
require_once('datainv.php');
?>
	<!--<p>
	 * PlanUsineEMAM, PHP and jQuery
	 * Version 0.1
	 * Original author: Andy DEl Risco & Ricardo Mendoza
	 * Released with the MIT License: http://www.opensource.org/licenses/mit-license.php
	 * Copyright (c) 2018 Andy DEl Risco and Ricardo Mendoza
	 * summer 2018
	</p>-->
<!-- Modal -->
<div class="block-edit modal fade in" id="blockEdit" style="display:none" role="dialog">
	<div class="modal-dialog modal-lg modal-dialog-centered" id="modal-dialogMain" style="overflow-y: scroll; max-height:90%;  margin-top: 50px; margin-bottom:50px;">
	<!--<div class="modal-dialog modal-lg modal-dialog-centered" id="modal-dialogMain">
		<!-- Modal content-->
		<div class="modal-content" id="ModalInfo">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal">
					<span aria-hidden="true">&times</span>
					<span class="sr-only">Close</span>
				</button>
				<div class="row">
					<div class="col-md-2">
					  <div class="form-inline">
						<div class="form-group">
						  <img src="img/EMAM.gif" height="90%" width="90%" >
						</div>
					  </div>
					</div>
					<div class="col-md-10">
					  <div class="form-inline">
						<div class="form-group">
						  <h3 class="modal-title" id="">École des Métiers de l'Aérospatiale de Montréal</h3>
						</div>
					  </div>
					</div>
				</div>
			</div>
			<div class="modal-body" id="modal-bodyBedit">
				<div class="row">
					<div class="col-md-3">
					  <div class="form-inline">
						<div class="form-group">
						  <h3 class="modal-title" id="descTitle"></h3>
						</div>
					  </div>
					</div>
					<div class="col-md-3">
					  <div class="form-inline">
						<div class="form-group">
						  <h3 class="modal-title" id="edTitle"></h3>
						</div>
					  </div>
					</div>
					<div class="col-md-4">
					</div>
				</div>
				<hr>
			    <div class="container-fluid">
			        <div class="row">
						<div class="col-md-4">
						    <div class="form-inline">
								<div class="form-group">
									<label id="lbledNS"><font size="4">Numéro de série :</font></label>
								</div>
						    </div>
							<div class="form-inline">
								<div class="form-group">
								    <label id="lblMedNS"><font size="4"></font></label>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-inline">
								<div class="form-group">
									<label id="lbledmarque"><font size="4">Marque :</font></label>
								</div>
							</div>
							<div class="form-inline">
								<div class="form-group">
									<label id="lblMedmarque"><font size="4"></font></label>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-inline">
								<div class="form-group">
									<label id="lbledmodele"><font size="4">Modele :</font></label>
								</div>
							</div>
							<div class="form-inline">
								<div class="form-group">
									<label id="lblMedmodele"><font size="4"></font></label>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<h4>Entretien préventif</h4>
					<div class="table" id="tbedi_Result">
						<table class="blueTable" id="tableEdi">
							<thead style>
								<tr>
									<th> Batise </th>
									<th> Secteur </th>
									<th> Fréquence </th>
									<th> Minutes </th>
									<th> Détail </th>
									<th> Date entretien </th>
								</tr>
							</thead>
							<tbody id="tbodyediResult">

							</tbody>
						</table>
					</div>
					<hr>
					<h4>Historique d'entretien préventif</h4>
					<div class="table" id="tbhistEnt_Result">
						<table class="blueTable" id="tableEdi">
							<thead style>
								<tr>
									<th> Date Entretien </th>
								    <th> Détail </th>
								    <th> Minutes entretien </th>
								    <th> Numéro de requête </th>
								    <th> Description </th>
								    <th> Utilisateur </th>
								</tr>
							</thead>
							<tbody id="tbodyhistEntResult">

							</tbody>
						</table>
					</div>
					<hr>
					<h4>Requête</h4>
					<div class="table" id="">
						<table class="blueTable" id="tableEdi">
							<thead style>
								<tr>
									<th> No </th>
								    <th> Type </th>
								    <th> État </th>
								    <th> Sec. Act </th>
								    <th> Sec. Empl </th>
								    <th> Date </th>
									<th> Détail </th>
								</tr>
							</thead>
							<tbody id="tbodyRequeteResult">

							</tbody>
						</table>
					</div>

				</div>
		    </div>
			<div class="modal-footer">
			    <div class="container">
				    <div class="row">
					    <div class="col-md-4">
						    <div class="form-inline">
							    <div class="form-group">
								</div>
							</div>
						</div>
						<div class="col-md-4">
						    <div class="form-inline">
							    <div class="form-group">
								    <a>&nbsp; &nbsp; &nbsp;</a>
									<button class="btn btn-info" id="btnpreFermer" data-dismiss="modal" type="button" style="width: 150px;" onclick="cleanInfoGen()">Fermer</button>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
					    <a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;     </a>
					</div>
					<div class="row">
					    <div class="col-md-4">
						    <div class="form-inline">
							    <div class="form-group">
						        </div>
							</div>
						</div>
					    <div class="col-md-4">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
