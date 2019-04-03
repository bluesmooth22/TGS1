-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Ago 29, 2017 as 07:54 PM
-- Versão do Servidor: 5.1.63
-- Versão do PHP: 5.3.5-1ubuntu7.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `db_forb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `nomes`
--

CREATE TABLE IF NOT EXISTS `nomes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomes_forb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `nomes`
--

INSERT INTO `nomes` (`id`, `nomes_forb`) VALUES
(1, 'adm'),
(2, 'administrador'),
(3, 'administrator'),
(4, 'gm'),
(5, 'gamemaster'),
(6, 'game master'),
(7, 'gamemasters'),
(8, 'game masters'),
(9, 'vip'),
(10, 'mod'),
(11, 'moderador'),
(12, 'moderator'),
(13, 'admin');
