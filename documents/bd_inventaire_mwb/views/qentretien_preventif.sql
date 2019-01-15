CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `webclient`@`%` 
    SQL SECURITY DEFINER
VIEW `bd_inventaire`.`qentretien_preventif` AS
    SELECT 
        `i`.`CodBat` AS `CodBat`,
        `f`.`DescSecteur` AS `DescSecteur`,
        `a`.`noserie` AS `noserie`,
        `e`.`Marque` AS `Marque`,
        `a`.`idmachine` AS `idmachine`,
        `i`.`modele` AS `modele`,
        `a`.`DesEquip` AS `DesEquip`,
        `i`.`local` AS `local`,
        `c`.`desfreq` AS `desfreq`,
        MAX(`d`.`date_ent`) AS `dernierDate`,
        (`d`.`date_ent` + INTERVAL `c`.`nbrjrs` DAY) AS `prochainDate`,
        `d`.`date_ent` AS `date_ent`,
        `i`.`codmarque` AS `codmarque`,
        `f`.`CodSec` AS `CodSec`,
        `c`.`idfreq` AS `idfreq`,
        `b`.`detail` AS `detail`,
        `b`.`nbrMinAprox` AS `nbrMinAprox`
    FROM
        ((((((`bd_inventaire`.`tequipement` `a`
        JOIN `bd_inventaire`.`tinvmaster` `i` ON ((`a`.`noserie` = `i`.`noserie`)))
        JOIN `bd_inventaire`.`tinvmarque` `e` ON ((`e`.`codmarque` = `i`.`codmarque`)))
        LEFT JOIN `bd_inventaire`.`tentretien` `b` ON ((`a`.`noserie` = `b`.`noserie`)))
        LEFT JOIN `bd_inventaire`.`teqfrequence` `c` ON ((`b`.`idfreq` = `c`.`idfreq`)))
        LEFT JOIN `bd_inventaire`.`thistentretien` `d` ON (((`d`.`noserie` = `a`.`noserie`)
            AND (`d`.`idfreq` = `b`.`idfreq`)
            AND (`d`.`CodSec` = `b`.`CodSec`))))
        LEFT JOIN `bd_suivi`.`tsectemploi` `f` ON ((`f`.`CodSec` = `b`.`CodSec`)))
    GROUP BY `i`.`CodBat` , `f`.`DescSecteur` , `a`.`noserie` , `e`.`Marque` , `a`.`idmachine` , `i`.`modele` , `a`.`DesEquip` , `i`.`local` , `c`.`desfreq` , `i`.`codmarque` , `f`.`CodSec` , `c`.`idfreq`