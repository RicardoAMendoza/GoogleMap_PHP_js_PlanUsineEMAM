SELECT * FROM bd_inventaire.coor_temp where mac = 710 order by mac;

-- 1.-
SELECT * FROM bd_inventaire.coor_temp;
-- 2.-
select * from `bd_inventaire`.`tinvmaster` as a inner join bd_inventaire.coor_temp as b on trim(a.poste)=trim(b.mac) order by mac;
-- 3.-
update `bd_inventaire`.`tinvmaster` as a set shape = 'rect',
a.coords = (select coord from bd_inventaire.coor_temp as b where a.poste=b.mac)
where a.coords  is  null;

SELECT * FROM `bd_inventaire`.`tinvmaster`  where poste >= 100 and poste <= 134;

SELECT * FROM `bd_inventaire`.`tinvmaster`  where poste = 729;

-- 703 no existe;
-- 710 no existe;
-- 714 no existe;
-- 715 no existe;
-- 729 no existe;