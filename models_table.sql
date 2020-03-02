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
  (0,'Brain','thumbnails/brain.png','modelpages/brain.html','decomposable'),
  (1,'Chest','thumbnails/chest.png','modelpages/chest.html','basic'),
  (2,'Left Femur','thumbnails/femurleft.png','modelpages/femur_left.html','basic'),
  (3,'Right Femur','thumbnails/femurright.png','modelpages/femur_right.html','basic'),
  (4,'Left Foot','thumbnails/footleft.png','modelpages/foot_left.html','basic'),
  (5,'Right Foot','thumbnails/footright.png','modelpages/foot_right.html','basic'),
  (6,'Girdle','thumbnails/girdle.png','modelpages/girdle.html','basic'),
  (7,'Left Hand','thumbnails/handleft.png','modelpages/hand_left.html','basic'),
  (8,'Right Hand','thumbnails/handright.png','modelpages/hand_right.html','basic'),
  (9,'Head','thumbnails/head.png','modelpages/bones_head.html','basic'),
  (10,'Left Humerus','thumbnails/humerusleft.png','modelpages/humerus_left.html','basic'),
  (11,'Right Humerus','thumbnails/humerusright.png','modelpages/humerus_right.html','basic'),
  (12,'Left Radius/Ulna','thumbnails/radiusulnaleft.png','modelpages/radiusUlna_left.html','basic'),
  (13,'Right Radius/Ulna','thumbnails/radiusulnaright.png','modelpages/radiusUlna_right.html','basic'),
  (14,'Skeleton','thumbnails/skeleton.png','modelpages/skeleton.html','basic'),
  (15,'Skull','thumbnails/skull.png','modelpages/skull.html','decomposable'),
  (16,'Teeth','thumbnails/teeth.png','modelpages/bones_teeth.html','basic'),
  (17,'Left Tibia/Fibula','thumbnails/tibiafibulaleft.png','modelpages/tibiaFibula_left.html','basic'),
  (18,'Right Tibia/Fibula','thumbnails/tibiafibularight.png','modelpages/tibiaFibula_right.html','basic')  ;
