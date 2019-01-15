-- Fraiseuse
SELECT * FROM bd_inventaire.tinvmaster where poste =614;
-- Tour 3 axes
SELECT * FROM bd_inventaire.tinvmaster where poste  =201;
-- Rectifieuse
SELECT * FROM bd_inventaire.tinvmaster where poste  =100;
-- Tour
SELECT * FROM bd_inventaire.tinvmaster where local  ='Tour 2 axes' or local  ='Tour 3 axes' or local  ='Tour1 2axes';
-- Rectifieuse
SELECT * FROM bd_inventaire.tinvmaster where local  ='Rectifieuse' or local  ='Rectifieuse cylindrique' or local  ='Rectifieuse plane';