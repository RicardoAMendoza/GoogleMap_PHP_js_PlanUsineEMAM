CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `webclient`@`%` 
    SQL SECURITY DEFINER
VIEW `bd_inventaire`.`qinventaire` AS
    SELECT 
        `a`.`CodBat` AS `Codbat`,
        `a`.`noserie` AS `noserie`,
        `f`.`desccat` AS `Desc_Categorie`,
        `e`.`Marque` AS `Marque`,
        `a`.`modele` AS `modele`,
        `a`.`local` AS `local`,
        `a`.`poste` AS `poste`,
        (CASE `a`.`vocation`
            WHEN 'A' THEN 'Administratif'
            ELSE 'Pédagogique'
        END) AS `vocation`,
        COALESCE(`c`.`descos`, 'N/A') AS `os_installer`,
        COALESCE(`d`.`descos`, 'N/A') AS `os_etiquette`,
        `a`.`nofacture` AS `nofacture`,
        `a`.`dateachat` AS `dateachat`,
        `a`.`datefingaranti` AS `datefingaranti`,
        `a`.`valeurachat` AS `valeurachat`,
        `a`.`valeurassurable` AS `valeurassurable`,
        `a`.`verifier` AS `verifier`,
        `a`.`datecreation` AS `datecreation`,
        `a`.`Coduser_add` AS `Coduser_add`,
        `a`.`datemodif` AS `datemodif`,
        `a`.`Coduser_modif` AS `Coduser_modif`,
        `a`.`typecat` AS `typecat`,
        `a`.`codmarque` AS `codmarque`,
        COALESCE(`b`.`codos_installer`, 'N/A') AS `codos_installer`,
        COALESCE(`b`.`codos_etiquette`, 'N/A') AS `codos_etiquette`,
        `b`.`vitessecd` AS `vitessecd`,
        `b`.`memoire` AS `memoire`,
        `b`.`slotram` AS `slotram`,
        `b`.`slotramlibre` AS `slotramlibre`,
        `b`.`cpu` AS `cpu`,
        `b`.`hdd` AS `hdd`,
        `b`.`ip` AS `ip`,
        `a`.`vocation` AS `codvocat`,
        `a`.`CodEtatInv` AS `CodEtatInv`
    FROM
        (((((`bd_inventaire`.`tinvmaster` `a`
        LEFT JOIN `bd_inventaire`.`tinvpc` `b` ON ((`a`.`noserie` = `b`.`noserie`)))
        LEFT JOIN `bd_inventaire`.`tinvos` `c` ON ((`c`.`codos` = `b`.`codos_installer`)))
        LEFT JOIN `bd_inventaire`.`tinvos` `d` ON ((`d`.`codos` = `b`.`codos_etiquette`)))
        JOIN `bd_inventaire`.`tinvmarque` `e` ON ((`a`.`codmarque` = `e`.`codmarque`)))
        JOIN `bd_inventaire`.`tinvcategorie` `f` ON ((`a`.`typecat` = `f`.`typecat`)))
    ORDER BY `a`.`CodBat` , `a`.`typecat` , `a`.`codmarque` , `a`.`noserie`