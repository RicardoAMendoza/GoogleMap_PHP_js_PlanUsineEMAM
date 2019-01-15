CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `webclient`@`%` 
    SQL SECURITY DEFINER
VIEW `qentretien_historique_fk` AS
    SELECT 
        `a`.`id_eqsuivi` AS `id_eqsuivi`,
        `a`.`date_ent` AS `date_ent`,
        `a`.`detailEntretien` AS `detailEntretien`,
        `a`.`nbrMinEntUtiliser` AS `nbrMinEntUtiliser`,
        `a`.`NReq` AS `NReq`,
        `b`.`Description` AS `Description`,
        `a`.`datecreation` AS `datecreation`,
        `a`.`noserie` AS `noserie`,
        `a`.`idfreq` AS `idfreq`,
        `a`.`CodSec` AS `CodSec`,
        `a`.`Coduser` AS `Coduser`
    FROM
        (`bd_inventaire`.`thistentretien` `a`
        LEFT JOIN `bd_suivi`.`tdemande` `b` ON ((`a`.`NReq` = `b`.`NReq`)))
    ORDER BY `a`.`id_eqsuivi` DESC
