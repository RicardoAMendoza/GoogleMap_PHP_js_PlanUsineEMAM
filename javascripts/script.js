/*!
 * PlanUsineEMAM, PHP and jQuery
 * Version 0.1
 * Original author: Andy DEl Risco & Ricardo Mendoza
 * Released with the MIT License: http://www.opensource.org/licenses/mit-license.php
 * Copyright (c) 2018 Andy DEl Risco and Ricardo Mendoza
 * summer 2018
 */

function loadMap()
{
  var element = document.createElement( "AREA" );
  element.shape = shape;
  element.coords = coords;
  element.href=  shref;
  element.onmouseover = function() { eval( action ); };
  maps.appendChild( element );
}

// visualiser documents dans le modal admin : function dans plan.php
function visualiser(aNS){

  if (aNS!="")  {
    // machin info
    getInfoGen(aNS);
    // entretien info
    getInfoEntretien(aNS);
	  // historique info
	getInfoHistorique(aNS);
  }
 // open plan-modal
 $y("#blockEdit").modal({backdrop: 'static', keyboard: 'false'}); //("show");

} // end visualiser

// machine info
function getInfoGen(aNS){
    var request = new XMLHttpRequest();
    var url = "datagetmac.php";  // back end
    var params = 'func=getInfo&ns='+ aNS;  //ns="a000"
    //var params = 'func=getInfo&ns="'+ aNS+'"';  //ns="a000"
    //var params = "func=getInfo&ns='"+ aNS+"'";  //ns='a000'
    //var params = 'func=getInfo&ns='''+ aNS+'''';  //ns="a000"

    request.open("POST", url, true);
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.onreadystatechange = function()
	{
	   if (request.readyState === 4 && request.status === 200)
	   {
		  //alert("dans request getInfoGen : "+request.responseText);
			var info = JSON.parse(request.responseText);
			if (info.length>0)
			{
				document.getElementById("descTitle").innerHTML=info[0].descr;
				document.getElementById("edTitle").innerHTML=info[0].machine;
				document.getElementById("lblMedNS").innerHTML=aNS;
				document.getElementById("lblMedmarque").innerHTML=info[0].marque;
				document.getElementById("lblMedmodele").innerHTML=info[0].modele;
				//alert("modele"+info[0].modele);
			}
		}
    };
    request.send(params);
} // end machine info

// clean info
function cleanInfoGen(){
        document.getElementById("descTitle").innerHTML="";
				document.getElementById("edTitle").innerHTML="";
				document.getElementById("lblMedNS").innerHTML="";
				document.getElementById("lblMedmarque").innerHTML="";
				document.getElementById("lblMedmodele").innerHTML="";
}// end clean info

// entretien info
function getInfoEntretien(aNS){
	var request = new XMLHttpRequest();
    var url = "datagetmac.php";  // back end
    //var params = 'func=getEntretiens&ns='+aNS;
    var params = 'func=getEntretiens&ns='+ aNS;

    request.open("POST", url, true);
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.onreadystatechange = function()
	{
		if (request.readyState === 4 && request.status === 200)
		{
		  var info = JSON.parse(request.responseText);
		  var tbody = document.getElementById("tbodyediResult");
		  //alert(info.length)  ;
		  //alert("dans request getInfoEntretien: "+request.responseText);
		  tbody.innerHTML = "";
			for (i = 0; i < info.length; i++)
			{
				var tr = document.createElement('TR');
				setCelulle(info[i].bat,null,tr);
				setCelulle(info[i].secteur ,null,tr);
				setCelulle(info[i].freq,null,tr);
				setCelulle(info[i].minutes,null,tr);
				setCelulle(info[i].detail,null,tr);
				setCelulle(info[i].prochaindate,null,tr);
				tbody.appendChild(tr);
		    }
		}
    };
    request.send(params);
} // end entretien info

// historique info
function getInfoHistorique(aNS){
    var request = new XMLHttpRequest();
    var url = "datagetmac.php";  // back end
    var params = 'func=getHistoriques&ns='+ aNS;
    request.open("POST", url, true);
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.onreadystatechange = function()
	{
		if (request.readyState === 4 && request.status === 200)
		{
		  var info = JSON.parse(request.responseText);
		  var tbody = document.getElementById("tbodyhistEntResult");
		  //alert(info.length)  ;
		  //alert("dans request getInfoHistorique: "+request.responseText);
		  tbody.innerHTML = "";
			for (i = 0; i < info.length; i++)
			{
			    var tr = document.createElement('TR');
				setCelulle(info[i].date_ent,null,tr);
				setCelulle(info[i].detailEntretien,null,tr);
				setCelulle(info[i].nbrMinEntUtiliser,null,tr);
				setCelulle(info[i].NReq,null,tr);
				setCelulle(info[i].Description,null,tr);
				setCelulle(info[i].Coduser,null,tr);
				tbody.appendChild(tr);
			}
		}
    };
    request.send(params);
} // end  historique info

// set table
function setCelulle(data, hide, tr)
{
	var td = document.createElement('TD');
	td.appendChild(document.createTextNode(data || ''));
	if (hide)
		td.style.display = 'none';
	tr.appendChild(td);
} // end set  table




