--
-- Table structure for table `lkp_roles`
--

CREATE TABLE IF NOT EXISTS `lkp_roles` (
  `idlkp_roles` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_bin NOT NULL,
  `role` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idlkp_roles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Roles definitions';