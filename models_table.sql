--create table statement
CREATE TABLE `models` (
  `id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `adr` varchar(100) DEFAULT NULL,
  `type` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--dump table data
INSERT INTO `models` (`id`,`name`,`thumbnail`,`adr`,`type`) VALUES
  (0,'Body Skin','thumbnails/bodyskin.png','modelpages/bodyskin.html','basic'),
  (1,'Brain','thumbnails/brain.png','modelpages/brain.html','decomposable'),
  (2,'Chest','thumbnails/chest.png','modelpages/chest.html','basic'),
  (3,'Left Femur','thumbnails/femurleft.png','modelpages/femur_left.html','basic'),
  (4,'Right Femur','thumbnails/femurright.png','modelpages/femur_right.html','basic'),
  (5,'Left Foot','thumbnails/footleft.png','modelpages/foot_left.html','basic'),
  (6,'Right Foot','thumbnails/footright.png','modelpages/foot_right.html','basic'),
  (7,'Girdle','thumbnails/girdle.png','modelpages/girdle.html','basic'),
  (8,'Left Hand','thumbnails/handleft.png','modelpages/hand_left.html','basic'),
  (9,'Right Hand','thumbnails/handright.png','modelpages/hand_right.html','basic'),
  (10,'Head','thumbnails/head.png','modelpages/bones_head.html','basic'),
  (11,'Left Humerus','thumbnails/humerusleft.png','modelpages/humerus_left.html','basic'),
  (12,'Right Humerus','thumbnails/humerusright.png','modelpages/humerus_right.html','basic'),
  (13,'Left Radius/Ulna','thumbnails/radiusulnaleft.png','modelpages/radiusUlna_left.html','basic'),
  (14,'Right Radius/Ulna','thumbnails/radiusulnaright.png','modelpages/radiusUlna_right.html','basic'),
  (15,'Skeleton','thumbnails/skeleton.png','modelpages/skeleton.html','basic'),
  (16,'Skull','thumbnails/skull.png','modelpages/skull.html','decomposable'),
  (17,'Teeth','thumbnails/teeth.png','modelpages/bones_teeth.html','basic'),
  (18,'Left Tibia/Fibula','thumbnails/tibiafibulaleft.png','modelpages/tibiaFibula_left.html','basic'),
  (19,'Right Tibia/Fibula','thumbnails/tibiafibularight.png','modelpages/tibiaFibula_right.html','basic')  ;
