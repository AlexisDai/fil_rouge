
INSERT INTO Rubrique(nom_rub, id_rub_1) VALUES 
('Guitares', NULL),
('Batteries',NULL),
('Pianos',NULL),
('Instruments à vent',NULL),
('Instruments Traditionnels', NULL),
('Sonorisation', NULL),
('Lumière',NULL),
('Accessoires',NULL),
('Guitares Electriques',1),
('Guitares Classiques',1),
('Guitares de Voyage',1),
('Batteries Acoustiques',2),
('Batteries Electroniques',2),
('Pianos Droits',3),
('Pianos à Queue',3),
('Pianos Numériques',3),
('Saxophone',4),
('Trompettes',4),
('Ocarinas',4),
('Flûtes',4),
('Accordéons',5),
('Folklore',5),
('Cordes Frottées',5),
('Enceintes',6),
('Microphones',6),
('Tables de mixage',6),
('Projecteurs',7),
('Stroboscope',7),
('Lasers',7),
('Suports',8),
('Sièges',8),
('Casques audio',8);

INSERT INTO Client(cat_cli,adr_liv_cli,adr_fac_cli,mod_pai_cli,red_cli,coe_cli,num_sir_cli,nom_cli,pre_cli,nom_ent_cli) VALUES 
('Particulier','39193 Lulu Way Apt. 696 - Baton Rouge, NE / 80287','39193 Lulu Way Apt. 696 - Baton Rouge, NE / 80287','CB',NULL,0,NULL,'Bazinet','Jules', NULL),
('Particulier','4968 Marie Street Baltimore, MD 21217','4968 Marie Street Baltimore, MD 21217','CB',NULL,1.05,NULL,'Bureau','Ray', NULL),
('Particulier','3083 Norma Lane Monroe, LA 71201','3083 Norma Lane Monroe, LA 71201','CB',NULL,1.1,NULL,'Meilleur','Parnella', NULL),
('Professionnel','1292 Waterview Lane Las Cruces, NM 88005','2212 Neville Street Terre Haute, IN 47802','Virement/Chèque',NULL,1.15,12345678912345,'Bouchard','Percy', 'Album ETC'),
('Professionnel','1728 Meadowview Drive Dayton, VA 22821','1728 Meadowview Drive Dayton, VA 22821','Virement/Chèque',NULL,1.1,98765432109876,'Faure','Eustache', 'Fantômes Jazzy'),
('Professionnel','3570 County Line Road Tampa, FL 33602','2511 Mount Olive Road Gainesville, GA 30501','Virement/Chèque',1.05,1.09,36925814701234,'Flamand','William', 'Mane 5');


INSERT INTO Commercial (nom_com,pre_com,adr_com,ema_com,tel_com) VALUES 
('Desnoyer','Gemma','1331 Central Avenue Teterboro, NJ 07608','GemmaDesnoyer@teleworm.us','201-344-4226'),
('Labrecque','Emilie','3678 Winifred Way Greencastle, IN 46135','EmilieLabrecque@jourrapide.com','765-658-3252'),
('Guimond','Arber','2584 Badger Pond Lane Tampa, FL 33637','ArberGuimond@teleworm.us','727-249-5016');

INSERT INTO ClientCommercial(id_cli,id_com) VALUES
(1,1),
(2,2),
(3,2),
(4,3),
(5,3),
(6,3);

INSERT INTO Fournisseur(nom_fou,adr_fou,ema_fou,tel_fou) VALUES
('Musique', '1572 Trymore Road Bricelyn, MN 56014', 'Musique@rhyta.com', '920-313-5594'),
('Comme aux Musiques', '885 Hillcrest Avenue Little Rock, AR 72002', 'Commeauxmusiques@armyspy.com', '401-398-0267'),
('Musique Percussion', '1546 Cherry Camp Road Newark, NJ 07102', 'Musiqueperussion@jourrapide.com', '704-903-2431'),
('Vivre Art Loux', '1723 Stoneybrook Road Hickory Hills, IL 60457', 'Vivreartloux@armyspy.com', '916-235-8206'),
('Le Musique en ville', '46 Linden Avenue Waukesha, WI 53188', 'Lemusiqueenville@jourrapide.com', '217-650-2213');

INSERT INTO Produit(lib_cou_pro, lib_lon_pro, ref_fou_pro, pho_pro, pri_ach_pro, pri_ht_pro, ctg_pro, id_rub, id_liv, id_fou)VALUES
('TBPro','the box pro','Musique Percussion','TBPro.jpg',58,45,'Enceintes',24,NULL,3),
('HKA', 'HK Audio', 'Vivre Art Loux', 'HKA.jpg', 419,400,'Enceintes',24,NULL,4),
('FBTHX', 'FBT HIMaxX60', 'Musique', 'FBTHX.jpg',799, 750, 'Enceintes', 24, NULL, 1 ),
('SM58', 'Shure', 'Comme aux Musiques', 'SM58.jpg', 98, 90, 'Microphones', 25, NULL , 2),
('TTBone', 'the t.bone', 'Le Musique en ville', 'TTBone.jpg', 39, 20, 'Microphones', 25, NULL, 5),
('E835S', 'Senheiser', 'Musique Percussion', 'E835S.jpg', 88, 60, 'Microphones', 25, NULL, 3),
('X2222USB', 'Behringer Xenyx', 'Comme aux Musiques', 'X2222USB.jpg', 269, 250, 'Tables de Mixage', 26, NULL, 2),
('TTMix', 'the t.mix xmix', 'Vivre Art Loux', 'TTMix.jpg', 118, 105, 'Tables de mixage', 26, NULL, 4),
('12MTK', 'Soundcraft Signature', 'Musique', '12MTK.jpg', 444, 400, 'Tables de mixage', 26, NULL, 1),
('FR4XBK', 'Roland', 'Vivre Art Loux', 'FR4XBK.jpg', 3459, 3300, 'Accordéons', 21, NULL, 4 ),
('MKII', 'Startone Piano Accordion','Musique', 'MKII.jpg', 529, 475, 'Accordéons', 21, NULL,1),
('SAPHIR', 'Weltmeister', 'Musique Percussion', 'SAPHIR.jpg', 3899, 3500, 'Accordéons', 21, NULL, 3),
('SALDEL', 'Salvi', 'Comme aux Musiques', 'SALDEL.jpg', 4290, 4000, 'Folklore', 22, NULL, 2),
('SQB', 'Thomann SQB', 'Le Musique en ville', 'SQB.jpg', 498,460, 'Folklore', 22, NULL, 5),
('MLL', 'Auris My Little Lyre', 'Musique', 'MLL.jpg', 145,120, 'Folklore', 22 , NULL, 1),
('111VN', 'Thomann Double Bass', 'Vivre Art Loux', '111VN.jpg', 749, 725, 'Cordes Frottées', 23, NULL,4),
('DDB', 'Duke Didi Beck', 'Musique Percussion', 'DDB.jpg', 2799, 2650, 'Cordes Frottées', 23, NULL,3),
('BKRD', 'Thomann Rockabilly Psycho', 'Comme Aux Musiques', 'BKRD.jpg', 1090, 1000, 'Cordes Frottées', 23, NULL,2),
('20HSS', 'Harley Benton', 'Musique', '20HSS.jpg', 109, 95, 'Guitares Electriques', 9, NULL, 1),
('EBBK', 'Fender Jim Root', 'Vivre Art Loux', 'EBBK.jpg', 1859,1800 'Guitares Electriques', 9 , NULL, 4),
('MH10', 'ESP LTD', 'Comme aux Musiques', 'MH10.jpg', 239, 220, 'Guitares Electriques', 9, NULL,2),
('GL2NT', 'Harley Benton Guitarlele', 'Le Musique en ville', 'GL2NT.jpg', 59, 50, 'Guitares Classiques', 10, NULL, 5),
('CG851', 'Startone Pink', 'Comme aux Musiques', 'CG851.jpg', 38, 34, 'Guitares Classiques', 10, NULL, 2),
('GL1', 'Yamaha', 'Vivre Art Loux', 'GL1.jpg', 85, 78, 'Guitares Classiques', 10 , NULL, 4),
('BT2E', 'Taylor Baby Mahogany', 'Musique Percussion', 'BT2E.jpg', 499, 450, 'Guitares de Voyage', 11, NULL,3),
('LJ10', 'Furch', 'Musique', 'LJ10.jpg',1199, 1180, 'Guitares de Voyage', 11, NULL, 1),
('ME2BK', 'Lava Music', 'Comme aux Musiques', 'ME2BK;jpg',599, 575, 'Guitares de Voyages', 11, NULL,2)