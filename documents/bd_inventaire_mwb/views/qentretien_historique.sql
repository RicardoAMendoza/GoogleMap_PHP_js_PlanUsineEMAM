CREATE 
    ALGORITHM=UNDEFINED 
    DEFINER=`webclient`@`%` 
	SQL SECURITY DEFINER 
VIEW `bd_inventaire`.`qentretien_historique` AS 
    select 
		`a`.`id_eqsuivi` AS `id_eqsuivi`,
		`a`.`date_ent` AS `date_ent`,
		`a`.`detailEntretien` AS `detailEntretien`,
		`a`.`nbrMinEntUtiliser` AS `nbrMinEntUtiliser`,
		`a`.`NReq` AS `NReq`,
		`b`.`Description` AS `Description`,concat(`c`.`prenom`,' ',`c`.`nom`) AS `Utilisateur`,
		`a`.`datecreation` AS `datecreation`,
		`a`.`noserie` AS `noserie`,
		`a`.`idfreq` AS `idfreq`,
		`a`.`CodSec` AS `CodSec`,
		`a`.`Coduser` AS `Coduser`
    from 
	    ((`bd_inventaire`.`thistentretien` `a` 
		left join `bd_suivi`.`tdemande` `b` on((`a`.`NReq` = `b`.`NReq`))) 
		left join `bd_securite`.`tusers` `c` on((`a`.`Coduser` = `c`.`Coduser`))) 
	order by `a`.`id_eqsuivi` desc
