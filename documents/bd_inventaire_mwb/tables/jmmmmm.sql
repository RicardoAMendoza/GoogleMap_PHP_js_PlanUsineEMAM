
call sp_save_documents(0,"livre du chef","banana",1914, "FR", 300.50, 34, 55, "/apathdocument", "acommentair:resetes Quebequais", "adonateur:Willis", "F","1000",0,1,0,0,0,"Menus","Garcia","Gael","a face","Diana","MX",0,"Queretaro");

call sp_save_ville(1526,"Sn Francisco","MX");

csp_save_usersall sp_save_users("abcde","Sn Francisco","Giraldo","Giraldo",1,1);

call sp_save_langue("ZZ","P");

call sp_save_preferences(0," École des métiers de la restauration et du turisme de montréal","Andy Del Risco","emrtm@csdm.qc.ca","514-350-6032","1822, Boulevard de Maisonneuve Ouest, Montréal (Québec) H3H1J8","Bienvenue au Conservatoire Culinaire - (Administration)",45.50170,-73.56730,14,45.49402,-73.58077,"uploads","galerie");

call sp_save_documents(0,"livre du chef","rando", 2018, "fr", 23.45, 234, 23, "/host", "resetes du quebec", "Andy del Risco", "L","1000",1,1,1,100,100)	

call sp_save_documents(0,"B","SAVE TEST","banana",1914, "FR", 300.50, 34, 55, "/apathdocument","acommentair:resetes Quebequais","adonateur:Willis","1000",1,"Garcia","Gabriel",1,100,"WARE",100,"aqui",5,"anomediteur: Diana","MX",1492,"Teotihuacan");

call sp_save_traduction(47," tbfltAnne","admin","Année","Year");

call sp_save_carrousel(0,"Année.jpg");

UPDATE `bd_biblio`.`tdocuments` SET `pathdocument`='uno.pdf' WHERE `iddoc`='9';

call sp_save_documents(0,"B","SAVE TEST","banana",1914, "FR", 300.50, 34, 199,55, "/apathdocument","acommentair:resetes Quebequais","adonateur:Willis","1000",1,"Garcia","Gabriel",1,100,"WARE",100,"aqui",5,"anomediteur: Diana",1492,"Teotihuacan");

INSERT INTO `bd_thot`.`tuser` (`nom`, `prenom`, `courriel`) VALUES ('Mendoza', 'Ricardo', 'OmniMTV@Gmail.com');
INSERT INTO `bd_thot`.`tuser` (`nom`, `prenom`, `courriel`) VALUES ('Bikatal Bi Tonye', 'Fernand', 'fernand@teccart.com');

SELECT * FROM bd_inventaire.tinvmaster WHERE TYPECAT="MAC";