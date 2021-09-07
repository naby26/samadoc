-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 sep. 2021 à 17:48
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `samadoc`
--

-- --------------------------------------------------------

--
-- Structure de la table `sd_structure`
--

DROP TABLE IF EXISTS `sd_structure`;
CREATE TABLE IF NOT EXISTS `sd_structure` (
  `licence_sigle` varchar(30) NOT NULL,
  `licence` varchar(100) NOT NULL,
  `departement_sigle` varchar(30) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `ufr_sigle` varchar(30) NOT NULL,
  `ufr` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sd_structure`
--

INSERT INTO `sd_structure` (`licence_sigle`, `licence`, `departement_sigle`, `departement`, `ufr_sigle`, `ufr`) VALUES
('', '', '', '', '', ''),
('PHTP', 'Licence Productions Horticoles et Travaux Paysagers', 'APV', 'Département Agronomie et Production Végétale', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('PHTP', 'Licence Productions Horticoles et Travaux Paysagers', 'APV', 'Département Agronomie et Production Végétale', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('ABE', 'Licence Agriculture Biologique et Ecologique', 'APV', 'Département Agronomie et Production Végétale', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('ABE', 'Licence Agriculture Biologique et Ecologique', 'APV', 'Département Agronomie et Production Végétale', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('Agroforesterie', 'Licence Agroforesterie', 'APV', 'Département Agronomie et Production Végétale', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('Foresterie', 'Licence Foresterie', 'APV', 'Département Agronomie et Production Végétale', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('PSP', 'Licence Production de Semences et Plants', 'APV', 'Département Agronomie et Production Végétale', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('PP', 'Licence Protection phytosanitaire', 'APV', 'Département Agronomie et Production Végétale', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('PSP', 'Licence Production de Semences et Plants', 'APV', 'Département Agronomie et Production Végétale', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('PP', 'Licence Protection phytosanitaire', 'APV', 'Département Agronomie et Production Végétale', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('ZSA', 'Licence Zootechnie et Santé Animale', 'STE', 'Département Sciences et Techniques d’Elevage', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('QDAOA', 'Licence Qualité des Denrées Alimentaires d’Origine Animale', 'STE', 'Département Sciences et Techniques d’Elevage', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('Aquaculture', 'Licence Aquaculture', 'GRHPA', 'Département Gestion des Ressources Halieutiques, Pêche et Aquaculture', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('Peche', 'Licence Pêche', 'GRHPA', 'Département Gestion des Ressources Halieutiques, Pêche et Aquaculture', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('NSA', 'Licence en Nutrition et Sciences des Aliments', 'NA', 'Département Nutrition Alimentation', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('NHD', 'Licence en Nutrition Humaine et Diététique', 'NA', 'Département Nutrition Alimentation', 'SAEPAN', 'UFR Sciences Agronomiques, Elevage, Pêche-Aquaculture et Nutrition'),
('MPI', 'Licence Mathématiques, Physique et Informatique', 'MI', 'Département Mathématiques Informatique', 'SFI', 'UFR SCIENCES FONDAMENTALES ET DE L’INGENIEUR'),
('AgroTIC', 'Licence AgroTIC', 'MI', 'Département Mathématiques Informatique', 'SFI', 'UFR SCIENCES FONDAMENTALES ET DE L’INGENIEUR'),
('AHSIHA', 'Licence en Aménagement Hydro agricole, Systèmes d’irrigation, Hydraulique et Assainissement', 'HGRMER', 'Département Hydraulique, Génie Rural, Machinisme et Energies Renouvelables', 'SFI', 'UFR SCIENCES FONDAMENTALES ET DE L’INGENIEUR'),
('Agroequipements', 'Licence en Agroéquipements', 'HGRMER', 'Département Hydraulique, Génie Rural, Machinisme et Energies Renouvelables', 'SFI', 'UFR SCIENCES FONDAMENTALES ET DE L’INGENIEUR'),
('ERF', 'Licence Energies Renouvelables et Froid', 'HGRMER', 'Département Hydraulique, Génie Rural, Machinisme et Energies Renouvelables', 'SFI', 'UFR SCIENCES FONDAMENTALES ET DE L’INGENIEUR'),
('TRANA', 'Licence en Transformation Agroalimentaire', 'STA', 'Département Sciences et Technologies Alimentaires', 'SFI', 'UFR SCIENCES FONDAMENTALES ET DE L’INGENIEUR'),
('TAR', 'Licence en Transformation des agroressources', 'STA', 'Département Sciences et Technologies Alimentaires', 'SFI', 'UFR SCIENCES FONDAMENTALES ET DE L’INGENIEUR'),
('HRG', 'Licence Hôtellerie, Restauration et Gastronomie', 'THRG', 'Département Tourisme, Hôtellerie, Restauration et Gastronomie', 'SEJP', 'UFR SCIENCES ECONOMIQUES-JURIDIQUES ET POLITIQUES'),
('PTMC', 'Licence Production Touristique et Management Culturel', 'THRG', 'Département Tourisme, Hôtellerie, Restauration et Gastronomie', 'SEJP', 'UFR SCIENCES ECONOMIQUES-JURIDIQUES ET POLITIQUES'),
('EGFR', 'Licence Economie, Gestion et Finance Rurale', 'SEGC', 'Département Sciences Economiques de Gestion et Commerce ', 'SEJP', 'UFR SCIENCES ECONOMIQUES-JURIDIQUES ET POLITIQUES'),
('MEAA', 'Licence Management des Entreprises Agricoles et Agroalimentaires', 'SEGC', 'Département Sciences Economiques de Gestion et Commerce', 'SEJP', 'UFR SCIENCES ECONOMIQUES-JURIDIQUES ET POLITIQUES'),
('EGFR', 'Licence Economie, Gestion et Finance Rurale', 'SEGC', 'Département Sciences Economiques de Gestion et Commerce ', 'SEJP', 'UFR SCIENCES ECONOMIQUES-JURIDIQUES ET POLITIQUES'),
('CPAF', 'Licence Commerce des Produits Agricoles et Forestiers', 'SEGC', 'Département Sciences Economiques de Gestion et Commerce', 'SEJP', 'UFR SCIENCES ECONOMIQUES-JURIDIQUES ET POLITIQUES'),
('DEF', 'Licence Droit de l’Environnement et du Foncier', 'SJP', 'Département Sciences Juridiques et Politiques', 'SEJP', 'UFR SCIENCES ECONOMIQUES-JURIDIQUES ET POLITIQUES'),
('TC', 'Licence Télédétection Climatologie', 'EBDD', 'Département Environnement, Biodiversité, Développement Durable', 'SSE', 'UFR Sciences Sociales et Environnementales'),
('DL', 'Licence Développement Local', 'EBDD', 'Département Environnement, Biodiversité, Développement Durable', 'SSE', 'UFR Sciences Sociales et Environnementales'),
('DL', 'Licence Développement Local', 'EBDD', 'Département Environnement, Biodiversité, Développement Durable', 'SSE', 'UFR Sciences Sociales et Environnementales'),
('AGAP', 'Licence Aménagement des Aires Protégés', 'EBDD', 'Département Environnement, Biodiversité, Développement Durable', 'SSE', 'UFR Sciences Sociales et Environnementales'),
('EDD', 'Environnement et Développement Durable', 'EBDD', 'Département Environnement, Biodiversité, Développement Durable', 'SSE', 'UFR Sciences Sociales et Environnementales');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
