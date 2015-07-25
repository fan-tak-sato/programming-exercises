-- Dump della struttura di tabella anagrafica
DROP TABLE IF EXISTS `anagrafica`;
CREATE TABLE IF NOT EXISTS `anagrafica` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL DEFAULT '0',
  `cognome` varchar(80) NOT NULL DEFAULT '0',
  `email` varchar(80) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
