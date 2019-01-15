<?php
/*!
 * PlanUsineEMAM, PHP and jQuery
 * Version 0.1
 * Original author: Andy DEl Risco & Ricardo Mendoza
 * Released with the MIT License: http://www.opensource.org/licenses/mit-license.php
 * Copyright (c) 2018 Andy DEl Risco and Ricardo Mendoza
 * summer 2018
 */
if (isset($_POST))
{
  // C'est le 16 aout 2018.
  require_once('datainv.php');
  global $DataInv;
  $aResult = array();

	// machine info
	function getInfo($ns)
	{
		$aResult = array();
		global $DataInv;
		$DataInv->LoadSQL("SELECT * FROM bd_inventaire.qinventaire where noserie=?",array($ns));
		if( ! $DataInv->Qry->EOF)
		{
		   $aResult['marque'] = $DataInv->Qry->Marque;
		   $aResult['modele'] = $DataInv->Qry->modele;
		   $aResult['descr'] = $DataInv->Qry->local;
		   $aResult['machine'] = $DataInv->Qry->poste;
		}
		$res = array();
		array_push($res, $aResult);
		return $res;
    }

	// entretien info
	function getEntretiens($ns)
	{
		//Andy
		global $DataInv;
		$DataInv->LoadSQL("SELECT * FROM bd_inventaire.qentretien_preventif where noserie=? order by CodBat, CodSec, desfreq",array($ns));
		$res = array();
		while( ! $DataInv->Qry->EOF)
		{
		  $aResult = array();
		  $aResult['bat'] =$DataInv->Qry->CodBat;
		  $aResult['secteur'] = $DataInv->Qry->DescSecteur;
		  $aResult['freq'] = $DataInv->Qry->desfreq;
		  $aResult['minutes'] =$DataInv->Qry->nbrMinAprox;
		  $aResult['detail'] =  $DataInv->Qry->detail;
		  $aResult['prochaindate'] =$DataInv->Qry->prochainDate;
		  array_push($res, $aResult);
		  $DataInv->Qry->Next();
		}
        return $res;
    }

	// historique info
	function getHistoriques($ns)
	{
		//Ricky
		global $DataInv;
		$DataInv->LoadSQL("SELECT * FROM bd_inventaire.qentretien_historique where noserie=? order by CodSec",array($ns));
		$res = array();
		while( ! $DataInv->Qry->EOF)
		{
		  $aResult = array();
		  $aResult['date_ent'] =$DataInv->Qry->date_ent;
		  $aResult['detailEntretien'] = $DataInv->Qry->detailEntretien;
		  $aResult['nbrMinEntUtiliser'] = $DataInv->Qry->nbrMinEntUtiliser;
		  $aResult['NReq'] =$DataInv->Qry->NReq;
		  $aResult['Description'] =  substr($DataInv->Qry->Description,2);
		  $aResult['Coduser'] =$DataInv->Qry->Utilisateur;
		  array_push($res, $aResult);
		  $DataInv->Qry->Next();
		}
        return $res;
    }

	// Info des requêtes (bd_suivi)
	function getRequete($idMac)
	{
		//Ricky
		global $DataInv;
    $idMac = "%".$idMac."%";
		$DataInv->LoadSQL("select NReq, TypeDesc, DescEtat, CodAct, CodSec, DateCreation, Description, Equipement from bd_suivi.qdemande where Equipement like ?",array($idMac));
		$res = array();
		while( ! $DataInv->Qry->EOF)
		{
		  $aResult = array();
		  $aResult['NReq'] =$DataInv->Qry->NReq;
		  $aResult['TypeDesc'] = $DataInv->Qry->TypeDesc;
		  $aResult['DescEtat'] = $DataInv->Qry->DescEtat;
		  $aResult['CodAct'] =$DataInv->Qry->CodAct;
		  $aResult['CodSec'] =  $DataInv->Qry->CodSec;
		  $aResult['DateCreation'] =$DataInv->Qry->DateCreation;
		  $aResult['Description'] =$DataInv->Qry->Description;
		  array_push($res, $aResult);
		  $DataInv->Qry->Next();
		}
        return $res;
    }

  $functionName = $_POST["func"]; // func parameter should be sent in AJAX, determines which function to run
  $serie        = $_POST["ns"];
  if (function_exists($functionName))
  { // check if function exists
     $aResult = $functionName($serie); // run function
     echo json_encode($aResult);
     //echo $aResult;
  }
}
?>