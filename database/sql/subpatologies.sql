-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: medical_apointments
-- ------------------------------------------------------
-- Server version	10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `subpatologies`
--

DROP TABLE IF EXISTS `subpatologies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subpatologies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pathology_id` int(10) unsigned NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipe` varchar(1200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescription` varchar(1200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subpatologies_pathology_id_foreign` (`pathology_id`),
  CONSTRAINT `subpatologies_pathology_id_foreign` FOREIGN KEY (`pathology_id`) REFERENCES `pathologies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subpatologies`
--

LOCK TABLES `subpatologies` WRITE;
/*!40000 ALTER TABLE `subpatologies` DISABLE KEYS */;
INSERT INTO `subpatologies` VALUES (1,1,'AFTAS ZOSVIR ADULTO','\r\n\r\n1))  VALACICLOVIR TABLETAS 500 MG  # 20\r\n       (ZOSVIR)\r\n\r\n\r\n\r\n2) DICLOFENACO POTASICO TABLETAS DISPERSABLES  # 8\r\n  (CATAFLAN DD )\r\n\r\n\r\n\r\n','\r\n\r\n1)) VALACICLOVIR TABLETAS 500 MG  \r\nZOSVIR TOMAR 1 TABLETA 7 AM, 1 PM Y 8 PM\r\n\r\n\r\n\r\n2)DICLOFENACO POTASICO \r\n CATAFLAN  DD TOMAR 1 TABLETA DISUELTO EN\r\n     VASO DE AGUA 7:30 AM  Y 5 PM\r\n\r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(3,1,'ZOVIRAX - CATAFLAN GOTAS NIÑOS','\r\n\r\n1) ACICLOVIR SUSPENSION 200 MG # 1 FCO.\r\n   ( Z0VIRAX )\r\n\r\n\r\n\r\n2) DICLOFENACO POTASICO  GOTAS # 1 FCO \r\n CATAFLAN','\r\n\r\n1)ACICLOVIR SUSPENSION 200 MG\r\n ZOVIRAX TOMAR 1 COMPRIMIDO 7 AM, 1PM, 8PM\r\n\r\n\r\n\r\n2)DICLOFENACO POTASICO  GOTAS\r\n   CATAFLAN TOMAR',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(5,14,'TAC PNS SIN CONTRASTE','\r\n\r\nTOMOGRAFIA COMPUTADA DE SENOS PARANASALES SIN CONTRASTE EN CORTES AXIAL, CORONAL Y SAGITAL (RECONSTRUCTIVO).\r\n\r\nPACIENTE PRESENTA: \r\n\r\n\r\n\r\n\r\nID:','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(6,14,'TAC PNS CON CONTRASTE','\r\n\r\nTOMOGRAFIA COMPUTADA DE SENOS PARANASALES CON CONTRASTE EN CORTES AXIAL, CORONAL Y SAGITAL (RECONSTRUCTIVO).\r\n\r\nPACIENTE PRESENTA: \r\n\r\n\r\n\r\n\r\nID:','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(7,15,'RMN SPN SIN CONTRASTE','\r\n\r\nRESONANCIA MAGNETICA NUCLEAR DE SENOS PARANASALES SIN CONTRASTE EN CORTES AXIAL, CORONAL Y SAGITAL (RECONSTRUCTIVO).\r\n\r\nPACIENTE PRESENTA: \r\n\r\n\r\n\r\n\r\nID:','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(8,15,'RMN SPN CON CONTRASTE','\r\n\r\nRESONANCIA MAGNETICA NUCLEAR DE SENOS PARANASALES CON CONTRASTE EN CORTES AXIAL, CORONAL Y SAGITAL (RECONSTRUCTIVO).\r\n\r\nPACIENTE PRESENTA: \r\n\r\n\r\n\r\n\r\nID:','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(9,15,'ANGIORESONANCIA TRONCO CEREBRAL','\r\n\r\nANGIO RESONANCIA DEL TRONCO CEREBRAL.\r\n\r\nPACIENTE PRESENTA: \r\n\r\n\r\n\r\n\r\nID:','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(10,15,'ANGIORESONANCIA MAXILAR INTERNA DERECHA','\r\n\r\nANGIO RESONANCIA DE LA ARTERIA MAXILAR INTERNA DERECHA Y CAROTIDA EXTERNA DERECHA.\r\n\r\nPACIENTE PRESENTA: \r\n\r\n\r\n\r\n\r\nID:','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(11,15,'ANGIORESONANCIA MAXILAR INTERNA IZQUIERD','\r\n\r\nANGIO RESONANCIA DE LA ARTERIA MAXILAR INTERNA IZQUIERDA Y CAROTIDA EXTERNA IZQUIERDA.\r\n\r\nPACIENTE PRESENTA: \r\n\r\n\r\n\r\n\r\nID:','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(13,2,'AMIGDALITIS NIÑO 2','1 CEFUROXIMA SUSPENSION 250 MG # 1 FCO \r\n\r\n   (ZINNAT  O  CEFUR )\r\n\r\n2) NAPROXENO + PARACETAMOL SUSPENSION\r\n         # 1 FCO \r\n','1)CEFUROXIMA SUSPENSION 250 MG # 1 FCO \r\n\r\n   (ZINNAT  O  CEFUR )\r\n\r\n2) NAPROXENO + PARACETAMOL SUSPENSION\r\n         TOMAR UNA CUCHRADITA 7AM  1 PM Y 8 PM X 4         DIAS \r\n   - 3 DIAS \r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(16,2,'CEFUR-MEGACIL.ADULT','1) CEFUR.0XINA  500 MG 20 COMP. \r\n     ZINNAT O CEFUR \r\n\r\n\r\n2) BENCIL PENICILINA SODICA 1000.000+BENCIL PENICILINA CLEMIZOL 3000.000 U AMPOLLAS # 2\r\n  MEGACILINA 4.000.0000U \r\n\r\n\r\n3)DICLOFENACO SODICO  S DISPERSABLES #8 TABLETAS \r\nCATAFLAN D.D. \r\n\r\n','1) CEFUROXIMA  500mg TOMAR 1 COMPRIMIDO DESPUES DEL DESAYUNO Y CENA  \r\n  ZINNAT O CEFUR \r\n\r\n2)BENCIL PENICILINA SODICA 1000.000+BENCIL PENICILINA CLEMIZOL 3000.000 U  \r\nMEGACILINA 1 AMPOLLA I.M. (GLUTEO) HOY Y LA\r\n    OTRA MAÑANA\r\n\r\n1) DICLOFENACO SODICO\r\nCATAFLAN DD TOMAR 1 TABLETA DISUELTO EN     UN VASO DE AGUA 7 AM Y 4 PM',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(17,3,'ANTIMICOTICO ADULTOS','1)   KETONAZOL  200 mg COMPRIMIDOS ORALES # 3----\r\n\r\n\r\n\r\n2)    ECONAZOL NITRATO AL 1%  SOLUCION  FCO. #1-\r\n\r\n       ( MICOLIS)','1) KETOCONAZOL TOMAR 1 COMPRIMIDO DESPUES DELALMUERZO\r\n\r\n\r\n\r\n2)    ECONAZOL NITRATO AL 1%  SOLUCION\r\nMICOLIS - APLICARSE 8 GOTAS EN EL OIDO 7 AM\r\n    1 PM Y 8 PM',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(18,3,'ANTIMICOTICO NIÑO','1)     ECONAZOL NITRATO AL 1%   SOLUCION FCO. #1-\r\n\r\n       (MICOLIS)','1)  ECONAZOL NITRATO AL 1%  SOLUCION\r\n MICOLIS  - APLICARSE 8 GOTAS EN EL OIDO 7 AM\r\n    1 PM Y 8 PM',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(19,3,'MICOLIS  CREMA','1) ECONAZOL NITRATO 1%  CREMA # 1 TUBO\r\n   ( MICOLIS )','1) ECONAZOL CREMA APLICARSE EN EL OIDO 7 AM \r\n     - 7 PM\r\n  MICOLIS',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(20,4,'RINITIS RHINODINA D',' 1) CETIRIZINA + SEUDOEFEDRINA  CAPSULAS # 14\r\n  (RHINODINA D )\r\n\r\n\r\n\r\n2) PIROXICAM 20 MG DISPERSABLE  # 5\r\n   (FELDENE FLASH)','1) CETIRIZINA + SEUDOEFEDRINA  \r\n  (RHINODINA D ) TOMAR 1 CAPSULA  7 AM Y 7 PM \r\n\r\n\r\n\r\n2) PIROXICAM 20 MG \r\n   (FELDENE FLASH )  APLICARSE BAJO LA LENGUA\r\n\r\n 1 CADA DIA DESPUES DEL DESAYUNO ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(21,5,'LARINGITIS',' 1) PIROXICAM TABLETAS DISPERSABLES 20 MG # 8\r\n    FELDENE FLASH \r\n\r\n\r\n\r\n2)   CETIRIZINA + SEUDOEFEDRINA  CAPSULAS # 14\r\n  (RHINODINA D )\r\n\r\n3- FLUTICASONA - 50 MCG-AEROSOL # 1 FCO \r\n ','1)PIROXICAM TABLETAS DISPERSABLES 20 MG\r\n FELDENE FLASH APLICARSE UNO BAJO DE LA LENGUA CADA MAÑANA DESPUES DEL  .  . . ..  DESAYUNO\r\n\r\n1)  CETIRIZINA + SEUDOEFEDRINA  CAPSULAS # 14\r\n  (RHINODINA D )\r\n\r\n\r\n    RHINODINA D TOMAR 1 CAPSULA 7 AM Y 7PM\r\n\r\n 3- FLUTICASONA -AEROSOL  INHALAR POR BOCA \r\n\r\n    7 AM   1 PM Y 8 PM \r\n ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(22,6,'DICLOCIL+DOLGENAL','1) KETOROLACO 10 MG  DISPERSABLE # 15\r\n     DOLGENAL RAPID \r\n\r\n\r\n2) DICLOXACILINA  500MG CAPSULAS # 20\r\n DICLOCYL \r\n\r\n\r\n3) GENTAMICINA 160 MG  # 2 AMPOLLAS \r\n GENTAMAX 160 MG \r\n\r\n4- ETORICOXIB  120 MG # 4 COMPRIMIDOS \r\n\r\n ','1)KETOROLACO 10 MG  DISPERSABLE\r\nDOLGENAL RAPID  APLICARSE BAJO LA LENGUA \r\n\r\n2) DICLOXACILINA  500MG \r\n DICLOCYL TOMAR 1 CAPSULA 7:30 AM- 2 PM Y 9 PM\r\n\r\n\r\n3) GENTAMICINA 160 MG\r\n GENTAMAX 1 AMPOLLA I. M. C/DIA',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(24,7,'CLAVINEX','1) AMOXICILINA  250 MG + ACIDO CLAVULANICO 62,5 MG SUSPENSION # 1 FCO \r\n\r\n    CLAVINEX \r\n\r\n\r\n\r\n2) CEFTRIAXONA 1000 MG G 3,5 C C # 1 AMPOLLA\r\n      MESPORIN  O ROWECEF \r\n','1) CLAVOXIME  TOMAR 5 C.C. 7 AM 2 PM Y 9 PM POR \r\n     14 DIAS \r\n CLAVINEX \r\n\r\n2) CEFTRIAXONA 1000 MG. 3,5 CC I.M. (GLUTEO)\r\n      MESPORIN  O ROWECEF \r\n\r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(25,7,'INFANTE OTITIS','1) CECLOR SUSPENSION 250MG 1 FCO.\r\n\r\n\r\n\r\n2) TEMPRA JARABE  I FCO.','1) CECLOR TOMAR    C.C 7 A.M. Y 7 P.M.\r\n\r\n\r\n\r\n2) TEMPRA TOMAR 5 C.C. CADA       HORAS',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(28,7,'OTIT MEDIA AUGMENTIN  NIÑO','1) AMOXICILINA 200 MG  + CLAVULANATO DE POTACIO\r\n     28,5 MG  #. 1 FCO SUSPENSION \r\n  (AUGMENTIN)\r\n\r\n 2)  CEFTRIAXONA  1 G. # 1 AMPOLLA \r\n  (MESPORIN  O ROWECEF)\r\n\r\n\r\n3)CETIRIZINA + SEUDOEFEDRINA  JARABE  # 1 FCO \r\n  (RHINODINA D )\r\n\r\n4- DICLOFENACO POTASICO   GOTAS # FCO \r\n\r\n   (CATAFLAM)\r\n','1) AMOXICILINA 200 MG  + CLAVULANATO DE POTACIO\r\n     28,5 MG  \r\n  (AUGMENTIN) TOMAR 5 CC  7 AM  Y 7 PM \r\n\r\n 2)  CEFTRIAXONA  1 G. # 1 AMPOLLA \r\n  (MESPORIN  O ROWECEF) I.M. GLUTEO\r\n\r\n\r\n3)CETIRIZINA + SEUDOEFEDRINA \r\n  (RHINODINA D ) TOMAR \r\n\r\n4- DICLOFENACO POTASICO   GOTAS \r\n\r\n   (CATAFLAM)  TOMAR    GOTAS  \r\n\r\n AUGMENTIN 457 MG- 400 MG AMOXICILINA + 57 MG DE ACIDO CLAVULANICO ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(29,8,'METICORTEN','1) METICORTEN TABLETAS 20 MG. #\r\n     CORTIPREX \r\n\r\n\r\n2)VISCOTEARS GEL 1 TUBO','1) METICORTEN TOMAR  TABLETA 7 AM - 1 PM Y 8 PM\r\n    CORTIPREX \r\n\r\n\r\n2) VISCOTEARS GEL APLICARSE EN EL OJO 7 AM - \r\n     1 PM - 8 PM             \r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(30,9,'RHINODINA  D JARABE','1) CETIRIZINA + SEUDOEFEDRINA  JARABE # 3 FCOS\r\n   RHINODINA D\r\n\r\n\r\n\r\n2) FLUORATO DE MOMETASONA  SPRAY # 1 FCO \r\n NASONEX SPRAY 1 FCOPEDIATRICO','1) . CETIRIZINA + SEUDOEFEDRINA  JARABE \r\n     TOMAR  7 AM Y 7 PM\r\n\r\n\r\n\r\n2)  FLUORATO DE MOMETASONA  SPRAY\r\n\r\n    NASONEX INHALAR 7 AM Y 7 PM',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(33,9,'GRIPE ADULTO','1 )CETIRIZINA + SEUDOEFEDRINA CAPSULAS # 16\r\n ( RHINODINA D) \r\n\r\n\r\n2) DICLOFENACO POTSICO TABLETAS ISPERSABLES\r\n     CATAFLAN DD \r\n\r\n3- CLARITROMICINA 24HRS DE 500 MG# 6','1) 1 )CETIRIZINA + SEUDOEFEDRINA\r\n ( RHINODINA D) TOMAR 1 CAPSULA 7 AM Y 7 PM\r\n\r\n\r\n2) DICLOFENACO POTSICO\r\nCATAFLAN DD TOMAR 1 TABLETA DISUELTO EN\r\n     VASO DE AGUA 7:30 AM  Y 5 PM \r\n\r\n3- CLARITROMICINA\r\n     kLARICID UD TOMAR 1 DESPUES DEL            DESAYUNO  Y CENA ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(34,9,'JARABE UMBRAL','1) ACETOMINOFEN JARABE 2 FCOS\r\n     (UMBRAL)\r\n\r\n\r\n\r\n\r\n2) VITAMINA C DISPERSABLE 1 G 1 TUBO\r\n\r\n     (REDOXON)','1)  ACETOMINOFEN JARABE \r\n\r\n UMBRAL TOMAR 1 CUCHARADA 6 AM -2 PM  Y 8 PM \r\n\r\n\r\n\r\n\r\n2) VITAMINA C DISPERSABLE 1 G. \r\nREDOXON TOMAR 1 TABLETA DISUELTA EN 1\r\n     VASO DE AGUA 6:30 AM .',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(35,9,'NASONEX   RHINODINA  D','1)  CETIRIZINA + SEUDOEFEDRINA CAPSULAS # 16\r\n ( RHINODINA D)\r\n\r\n\r\n\r\n2) FUROATO DE MOMETASONA  SPRAY 1 FCO\r\n\r\n      ( NASONEX )\r\n\r\n\r\n\r\n3)MOMEPRAZOL DE 40 MG # 20\r\n   (CRIOGEL)\r\n\r\n\r\n\r\n','1) CETIRIZINA + SEUDOEFEDRINA \r\n ( RHINODINA D)TOMAR 1 CAPSULA 7 AM Y 7 PM\r\n\r\n\r\n\r\n2) FUROATO DE MOMETASONA  SPRAY\r\n\r\n  NASONEX INHALAR 7 AM Y 7 PM \r\n\r\n\r\n\r\n3) OMEPRAZOL 40 MG  TOMAR 1 DESPUES DEL      ALMUERZO\r\n\r\n    ( CRIOGEL)\r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(36,9,'RINITIS CATARRAL','1)  CETIRIZINA + PSEUDOEFEDRINA CAPSULAS # 20\r\n\r\n    RHINODINA D CAPSULAS \r\n\r\n\r\n\r\n\r\n2) ACETOMINOFEN 500 MG # 15 CAPSULAS \r\n\r\n  (UMBRAL)','\r\n1) CETIRIZINA + PSEUDOEFEDRINA\r\n    RHINODINA D TOMAR 1 CAPSULA 7 AM Y 7 PM\r\n\r\n\r\n\r\n2)  ACETOMINOFEN 500 MG # 15 CAPSULAS \r\n\r\n     UMBRAL TOMAR 1 CAPSULA 7 AM. 1 PM 8 PM\r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(38,9,'RINITIS NIÑO RHINODINA D','\r\n\r\n1) CETIRIZINA + SEUDOEFEDRINA  JARABE # 3 FCOS\r\n   RHINODINA D\r\n\r\n\r\n\r\n2) FUORATO DE MOMETASONA  SPRAY # 1 FCO \r\n NASONEX SPRAY\r\n\r\n\r\n\r\n  \r\n2) IBUPROFENO  SUSPENSION 1 FCO\r\n .\r\n     (TERMYL)','\r\n\r\n1)ETIRIZINA + SEUDOEFEDRINA  JARABe\r\n RHINODINA D TOMAR 5 CC  7 AM Y 7 PM\r\n\r\n  \r\n\r\n\r\n2) FUORATO DE MOMETASONA  SPRAY # 1 FCO \r\n NASONEX SPRAY\r\n\r\n\r\n 3 IBUPROFENO + PSEUDOEFEDRINA TOMAR\r\n      5 C.C. 7      A.M.   6 P.M.\r\n    (TERMYL)',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(39,9,'RINITIS RHINODINA D','1 )CETIRIZINA + SEUDOEFEDRINA CAPSULAS # 16\r\n ( RHINODINA D)\r\n\r\n\r\n2)FUORATO DE MOMETASONA  SPRAY # 1 FCO  \r\n   UNICLAR \r\n\r\n\r\n3- CLARITROMICINA 24 HORAS DE 500MG # 6 COMP\r\n     kLARICID UD ','1 )CETIRIZINA + SEUDOEFEDRINA\r\n ( RHINODINA D) TOMAR 1 CAPSULA 7 AM Y 7 PM\r\n\r\n\r\n2)FUORATO DE MOMETASONA  SPRAY # 1 FCO  \r\n   UNICLAR  INHALAR 2 PUB EN CADA FOSA NASAL \r\n     7 AM  Y 7 PM \r\n\r\n3- CLARITROMICINA\r\n     kLARICID UD TOMAR 1 DESPUES DEL            DESAYUNO  Y CENA ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(40,10,'AVELOX SINUSITIS','  1)MOXIFLOXACINO 400 MG  COMPRIMIDOS # 10\r\n      (AVELOX)','  1) AVELOX TOMAR 1 COMPRIMIDO C/DIA DESPUES\r\n    DEL DESAYUNO				       \r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(41,11,'FLUIDASA','1) MEPIFILINA SOLUCION ORAL 1 FCO.\r\n\r\n  FLUIDASA  \r\n.    \r\nPARACETAMOL 160MG+PSEUDOEFEDRINA CLORHIDRATO 15MG + DEXTROMETORFANO BROMHIDRATO 7.5 MG \r\n\r\n(PECTOBRONC PLUS)\r\n\r\nHEDERA HELIX  JARABE #  1 FCO \r\n(MUXELIX) MUCOLITICO BRONCOESPASMOLITICO ALIVIA LA TOS 5ML           \r\nNIÑOS MENOS DE 4 AÑOS 2.5 CC CADA 8 HORAS \r\n+ DE 4 AÑOS 5 CC CADA 8 HORS                                    \r\n\r\n\r\n\r\n\r\n','1)MEPIFILINATOMAR UNA CUHARADA CADA 8 HRS.\r\n    FLUIDASA \r\n\r\n\r\n\r\n\r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(42,11,'MUCOLITICO','1) REDOXON 1 G. # 1 TUBO 	\r\n\r\n\r\n\r\n\r\n2)MEPIFILINA SOLUCION ORAL 1 FCO.\r\n\r\n  FLUIDASA ','1) REDOXON 1 TABLETA DISUELTA EN UN VASO DE\r\n     AGUA CADA MAÑANA\r\n\r\n\r\n\r\n MEPIFILINA TOMAR UNA CUCHARADA CADA\r\n    8 HRS.\r\n FLUIDASA ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(43,11,'TOS CODIPRONT ADULT','\r\n1)  CLARITROMICINA 500 MG  COMPRIMIDOS # 20--\r\n      ( CLARITROL)\r\n\r\n\r\n\r\n\r\n2)  DICLOFENACO POTASICO DISPERSABLE # 8\r\nCATAFLAN DD \r\n\r\n\r\n\r\n\r\n 3) CODIPRONT EX CAPSULAS # 14---','1) claritromicina de 500 mg \r\n CLARITROL TOMAR 1 COMPRIMIDO DESPUES DEL\r\n      DESAYUNO Y CENA \r\n\r\n\r\n\r\n\r\n2)DICLOFENACO POTASICO DISPERSABLE\r\n CATAFLAN DD TOMAR 1 TABLETA  DISUELTA EN       VASO    DE AGUA 7 AM  Y 5 PM\r\n\r\n\r\n\r\n3) CODIPRONT EX TOMAR 1 CAPSULA 7 AM -7PM\r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(44,11,'TOS NIÑO CODIPRONT','1)  CLARITROMICINA 250MG . SUSP. # 1 FCO.-- \r\n     KLARICID  O CLARITROL \r\n\r\n\r\n\r\n\r\n2) CODEINA+GUAYFENESINA-PSEUDOEFEDRINA                JARABE  # 1 FCO.---\r\n   ( PULMOCODEINA)','1)  CLARITROMICINA TOMAR 5 C C DESPUES DEL\r\n      DESAYUNO Y CENA \r\n      KLARICID O CLARITROL)\r\n\r\n\r\n\r\n3)  ) CODEINA+GUAYFENESINA-PSEUDOEFEDRINA   \r\n           TOMAR 5 C.C. 7 AM - 7PM',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(45,12,'AFTAS ZOVIRAX SUSPENSION NIÑO','1) Z0VIRAX SUP. FCO. # 1\r\n\r\n\r\n\r\n\r\n\r\n2)  CATAFLAN DD TABLETAS # 8-- -','1) ZOVIRAX TOMAR 5 CC  7 AM 11AM  3 PM    8   PM\r\n\r\n\r\n\r\n\r\n\r\n2) CATAFLAN DDTOMAR 1 TABLETA DISUELTO EN\r\n     VASO DE AGUA 6:30 AM  Y 5 PM\r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(46,12,'ANTIVERTIGINOSO','ANAUTIN (DIMENHIDRINATO) TABLETAS DE 50 MG. C/12 HRS U 8 HRS.\r\n\r\nCLOPAN (METOCLOPRAMIDA) AMPOLLA DE 10 MG. C/8 HRS. I.V. O IM\r\n\r\nCLOPAN TABLETAS DE 10 MG. Y GOTAS  0,5XKGXDIA\r\n','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(47,12,'BETASERC KOBIL','1) BETASERC DE 24 MG. COMPRIMIDOS # 30\r\n\r\n\r\n\r\n\r\n2) GINKGO BILOBA 1 FCO GOTAS\r\n\r\n\r\n\r\n\r\n3)  (METOCLOPRAMIDA) AMPOLLA DE 10 MG.. I.V. O IM\r\n         CLOPAN ','1)BETASERC TOMAR 1 COMPRIMIDO 7 AM Y 7 PM.\r\n\r\n\r\n\r\n\r\n2) GINKGO BILOBA  TOMAR 20 GOTAS  7 AM Y 7 PM\r\n\r\n\r\n\r\n\r\n3) (METOCLOPRAMIDA) AMPOLLA DE 10 MG. \r\n      1 AMPOLLA  I. M  (Gluteo)\r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(48,12,'MICROSER GOTAS - KOBIL','1) BETAHISTINA 24 MG  # 30 COMPRIMIDOS \r\n   BETASERC \r\n\r\n\r\n\r\n\r\n2) KOBIL 1 FCO GOTAS','1)BETAHISTINA  TOMAR 15 GOTAS 7 AM Y 7 PM\r\n    BETASERC \r\n\r\n\r\n\r\n\r\n2) KOBIL TOMAR 20 GOTAS C/MAÑANA\r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(49,16,'INFORME MEDICO','                                   INFORME  MEDICO \r\n\r\n\r\nCERTIFICO HABER ATENDIDO AL PACIENTE ____  EL DIA DE HOY____POR PRESENTAR \r\n\r\n\r\n  \r\n\r\nATENTAMENTE:                                                                                                                                \r\n\r\n\r\n\r\nDR. FERNANDO SILVA CHACON ','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(50,16,'ORDEN DE HOPITALIZACION','                     0RDEN  DE  HOSPITALIZACION \r\n\r\nHOSPITALIZAR EN:  HOSPITAL CLINICA  KENNEDY ALBORADA\r\n\r\nADMISION: FAVOR INGRESAR AL\r\n\r\nPACIENTE:\r\n\r\nEDAD:\r\n\r\nDIAGNOSTICO: \r\n\r\n\r\nRECOMENDACIONES:','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(51,16,'ORDEN DE REPOSO MEDICO','                    0RDEN  DE  REPOSO MEDICO \r\n\r\nCERTIFICO QUE EL PACIENTE: ____ AMERITA REPOSO DURANTE ____ PARA SU CONVALECENCIA \r\nA PARTIR DE LA FECHA:____ \r\nHASTA EL DIA ___\r\n\r\n\r\nREINTEGRO A SUS LABORES EL DIA ____\r\n\r\n\r\n\r\nATENTAMENTE:\r\n\r\n\r\n\r\nDR. FERNANDO SILVA CHACON','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(52,17,'UNICLAR','\r\n\r\n\r\n!)   FUROATO DE MOMETASONA   SPRAY  FCO. 1  \r\n     UNICLAR\r\n\r\n\r\n2)  MOXIFLOXACINO 400 MG # 10 COMP.        \r\n\r\n     ( AVELOX)                                                                           ','\r\n\r\n\r\n1) FUORATO DE MOMETASONA  INHALAR EN CADA FOSA NASAL   2   VECES  7 A. M.       Y 7 P.M. \r\n  UNICLAR \r\n\r\n\r\n 2) MOXIFLOXACINO 400 MG TOMAR 1 COMPRIMIDO              DESPUES DEL DESAYUNO  \r\n      AVELOX',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(53,18,'VALORACION PREQUIRURGICO','\r\n                       VALORACION CARDIOLOGICA\r\n\r\n\r\nDR. ALAVA\r\n\r\nFAVOR REALIZAR VALORACION CARDIOLOGICA AL PACIENTE ALVAREZ QUE PRESENTA EPISTAXIS INTERMITENTE IZQUIERDA SU P.A. ESTE MOMENTO ES DE 150 / 85\r\n\r\n\r\nATENTAMENTE,\r\n\r\n\r\nDR. FERNANDO SILVA CHACON','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(54,19,'TAC DE OIDOS','\r\n\r\n\r\n      TAC  DE OIDOS EN CORTES AXIAL Y CORONAL \r\n\r\n        SIN CONTRASTE .\r\n\r\n       PACIENTE PRESENTA                                                   \r\n\r\n                                                                                                                                                      I.D.\r\n\r\n\r\n                    ','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(55,20,'TAC DE OIDOS CON CONTRASTE',' \r\n\r\n        TAC DE OIDOS CON CONTRASTE EN CORTES \r\n\r\n        AXIAL  Y CORONAL .\r\n\r\n       PACIENTE PRESENTA                                                                                  \r\n                                                                                                                                                                                                                                                  I.D.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(56,21,'RINITIS ALERGICA',' \r\n\r\n\r\n  1)  FUROATO DE MOMETASONA   SPRAY   FCO. # 1-\r\n\r\n       (UNICLAR\r\n\r\n\r\n\r\n  2) CETIRIZINA + PSEUDOEFEDRINA  CAPSULAS # 20 \r\n\r\n      (RHINODINA D)',' \r\n\r\n\r\n  1) FUROATO DE MOMETASONA   SPRAY INHALAR \r\n          7 AM Y 7 PM EN CADA FOSA NASAL \r\n\r\n\r\n  2)  CETIRIZINA + PSEUDOEFEDRINATOMAR 1             CAPSULA 7 A M. Y 7 P.M.\r\n       (RHINODINA D )',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(57,7,'ROWECEF 500','  \r\n\r\n\r\n 1) ROWECEF 500 MG.AMPOLLA #1 (2 ML.)\r\n\r\n\r\n  2) CECLOR SUSP 250 MG. FCO.# 1 ','   \r\n\r\n\r\n 1) ROWECEF 500 MG.AMPOLLA #1 (2 ML.)\r\n                          I.M.  (GLUTEO).\r\n\r\n\r\n    2) CECLOR SUSP 250 MG. TOMAR 5 CC  8 AM Y 8 PM',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(58,7,'ROWECEF 1G.','\r\n\r\n\r\n 1) ROWECEF 1 G.  AMPOLLA # 1( 3,5ML.LIDOCAINA 1%)\r\n\r\n\r\n2) CECLOR  SUSP. 250 MG. # 1 FCO. (100ML.)','\r\n\r\n\r\n  1) ROWECEF 1 G.  AMPOLLA # 1( 3,5ML.LIDOCAINA 1%)\r\n                                    I.M. ( GLUTEO)\r\n\r\n 2) CECLOR  SUSP. 250 MG.  TOMAR 5 CC. \r\n         7 AM  -  2 PM  Y 9 PM',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(59,2,'AMIGDALT.ADULT','\r\n\r\n\r\n  1) CEFPODOXIMA 200 MG COMPRIMIDOS # 20 \r\n       (CEFIRAX) \r\n\r\n\r\n\r\n 2) LINCOCIN 600 MG. AMPOLLAS # 2\r\n\r\n\r\n\r\n 3) BIENEX (15 MG.) CAPSULAS # 10 ','\r\n\r\n\r\n 1)  CEFPODOXIMA 200 MG TOMAR 1 COMPRIMIDO\r\n           7 AM  Y 7 PM  \r\n       (CEFIRAX) \r\n\r\n\r\n 2)  LINCOCIN 600 MG. 1 AMPOLLA I.M.(GLUTEO)\r\n                                         HOY  Y MAÑANA\r\n                 \r\n  3)  BIENEX (15 MG.) TOMAR 1  CAPSULA DESPUES                      DEL DESAYUNO Y CENA ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(60,22,'LEXOTAN 1.5 MG.','\r\n\r\n 1) BROMAZEPAN  1.5 MG. TABLETAS # 20--\r\n\r\n  LEXOTAN ','\r\n\r\n  1) LEXOTAN 1.5 MG. TOMAR 1 TABLETA 7 AM  Y 7 PM',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(61,23,'ANALGESICO','\r\n\r\n\r\n 1ETORICOXIB  COMPRIMIDOS RECUBIERTOS 120 MG         # 5\r\n\r\n   (ARCOXIA)\r\n\r\n    \r\n\r\n   KETOROLACO SUBLINGUAL 10 MG   # 10\r\n      DOLGENAL RAPID ','\r\n\r\n\r\n 1) ETORICOXIB .- (ARCOXIA  TOMAR 1  COMPRIMIDO \r\n           \r\n\r\n2) \r\n KETOROLACO SUBLINGUAL 10 MG \r\n\r\n DOLGENAL RAPID APLICARSE 1 TABLETA BAJO           LA LENGUA 8: 30 AM  Y     4  PM',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(62,11,'CORTIPREX','  \r\n\r\n   1)  METICORTEN 20 MG. # 16 COMPRIMIDOS  \r\n             CORTIPREX \r\n\r\n\r\n   2) CODEINA EX CAPSULAS # 16\r\n          CODIPRONT EX \r\n\r\n\r\n  3) CLARITROMICINA 500 MG UD # 5 COMPRIMIDOS \r\n        KLARICID UD 500 ','\r\n\r\n\r\n1)METICORTEN 20 MG \r\n CORTIPREX 20 MG  TOMAR 1 COMPRIMIDO \r\n      7 AM -  1PM  Y 8 PM X 3DIAS LUEGO TOMA 1 CADA        MAÑANA \r\n\r\n\r\n   2) CODEINA EX CAPSULAS \r\n CODIPRONT EX TOMAR 1  CAPSULA 6 AM Y 6 PM \r\n\r\n\r\n  3) CLARITROMICINA 500MG.\r\nKLARICID UD 500 MG  TOMAR 1 DESPUES DEL               DESAYUNO Y CENA   ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(65,20,'ASDEFGB','','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(66,2,'AMIGDALITIS NIÑO CEFIRAX','\r\n\r\n1- CEFPODOXIMA 100 MG  SUPENSION 1 FCO  \r\n       (CEFIRAX) \r\n','\r\n\r\n  CEFPODOXIMA 100 MG  TOMAR 5 CC  7 AM Y 7 PM  \r\n       (CEFIRAX) \r\n',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(67,2,'AMIGDALITIS ALERGIA PENICILINA','\r\n 1- CLARITROMICINA  SUSPENSION 250 MG \r\n       KLARICID \r\n\r\n\r\n\r\n\r\n2- LINCOMICINA 300 MG AMPOLLA DE 1 ML # 1 \r\n\r\n     LINCOCIN ','\r\n  1- CLARITROMICINA  SUSPENSION 250 MG \r\n       KLARICID \r\n\r\n\r\n\r\n\r\n2- LINCOMICINA 300 MG AMPOLLA# 1 \r\n\r\n     LINCOCIN ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(68,6,'CIPRODEX OTICO','\r\nCIPROFLOXACINO + DEXAMETASONA GOTAS OTICAS \r\n\r\n( CIPRODEX)','CIPROFLOXACINO + DEXAMETASONA GOTAS OTICAS \r\n\r\n( CIPRODEX',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(69,4,'GRIPE','CETIRIZINA DICLORHIDRATO+ PSEUDOEFEDRINA\r\nPARACETAMOL GOTAS - JARABE \r\n\r\n(FLUZETRIN)','\r\n CETIRIZINA DICLORHIDRATO+ PSEUDOEFEDRINA\r\nPARACETAMOL GOTAS - JARABE \r\n\r\n(FLUZETRIN) TOMAR    GOTAS  7 AM  2 PM Y  8 PM ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(70,4,'GRIPE 2','\r\n CLORFENAMINA MALEATO  + PSEUDOEFEDRINA SULFATO  GOTAS ORALES \r\n(MAPESIL NF)','CLORFENAMINA MALEATO  + PSEUDOEFEDRINA SULFATO  GOTAS ORALES \r\n(MAPESIL NF)',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(71,9,'RINITIS ALERGICA','\r\n DESLORATADINA TABLETAS  # 20\r\n  (AVIANT) \r\n\r\n FUROATO DE MOMETASONA  SPRAY NASAL \r\n\r\n (UNICLAR)   # 1 FCO ','DESLORATADINA TABLETAS  # 20 \r\n  ( AVIANT) \r\n\r\n   FUROATO DE MOMETASONA  SPRAY NASAL \r\n\r\n (UNICLAR)   # 1 FCO',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(72,25,'RADIOGRAFIA CAVUM','\r\n\r\n RADIOGRAFIA PERFIL DE RINOFARINGE \r\n \r\n PARA VER ADENOIDES ','',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(74,26,'TAPON DE CERUMEN','NE0MICINA SULFATO 40 MG +POLIMIXINA SULFATO\r\n80.000 +FLUR HIDROCORTISONA ACETATO 8 MG + LIDOCAINA CLORHIDRATO 320 MG + GLICERINA 8 MG\r\n                                           # 1 FCO \r\n\r\n(OTOZAMBON )','NE0MICINA SULFATO 40 MG +POLIMIXINA SULFATO\r\n80.000 +FLUR HIDROCORTISONA ACETATO 8 MG + LIDOCAINA CLORHIDRATO 320 MG + GLICERINA 8 MG\r\n                                           # 1 FCO \r\n\r\n(OTOZAMBON )',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(75,27,'FAQRINGITIS LEVE','EXTRAXTO DE MUSGO DE ISLANDIA ,ACACIA, SORBITOL PARAFINA LIQUIDA,COMPLEJO DE COBRE YCLOROFILA+ESENCIA DE MENTA   PASTILLAS #  50 \r\n\r\n( ISLA MINT )','EXTRAXTO DE MUSGO DE ISLANDIA ,ACACIA, SORBITOL PARAFINA LIQUIDA,COMPLEJO DE COBRE YCLOROFILA+ESENCIA DE MENTA   PASTILLAS #  50 \r\n\r\n ISLA MINT  - CHUPAR UNA PASTILLA 7 AM  11 AM  \r\n  4 PM Y 9 P\'M ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(76,3,'CANDIDIASIS BUCOFARINGEA','NISTATINA SUSPENSION 120 MG  (ACRONISTINNA) KETOCONAZOL TABLETAS 200 MG','NISTATINA SUSPENSION 120 MG  (ACRONISTINNA)  TOMAR 1 CUCHARADA SOPERA 7 12 Y 8 PM  KETOCONAZOL TOMAR 1 TABLETA DESPUES DEL ALMUERZO X 5 DIAS',1,'2018-10-31 17:03:13','2018-11-01 05:24:41'),(77,6,'OTOZAMBON','Neomicina sulfato 40 mg; Polimixina B sulfato 80.000 U.I.; Fluorhidrocortisona acetato 8 mg; Lidocaína clorhidrato 320 mg; Glicerina;excipiente, c.s.p. 8 ml.\r\n(OTOZAMBON # 1 FCO GOTAS )','Neomicina sulfato 40 mg; Polimixina B sulfato 80.000 U.I.; Fluorhidrocortisona acetato 8 mg; Lidocaína clorhidrato 320 mg; Glicerina;excipiente, c.s.p. 8 ml.\r\nOTOZAMBON APLICARSE 8 GOTAS EN EL OIDO CADA 4 HORAS DEJAR 5 MINUTOS ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(78,7,'AUGMENTIN','\r\nAMOXICILINA +CLAVULANATO DE POTACIO  1 G \r\n TABLETAS  # 20 \r\n(AUGMENTIN 1 G ) ','\r\n AMOXICILINA +CLAVULANATO DE POTACIO  1 G \r\n \r\n(AUGMENTIN 1 G ) TOMAR 1 DESPUES DEL DESAYUNO Y CENA X 10 DIAS ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13'),(79,29,'ARCOXIA','\r\nETORICOXIB 120 MG # 5 \r\n\r\n(ARCOXIA 120 MG) \r\n\r\nKETOROLACO SUBLINGUAL 10 MG # 15\r\nDOLGENAL RAPID ','ETORICOXIB 120 MG \r\n(ARCOXIA 120 MG TOMAR 1 DESPUES DEL DESAYUNO \r\n\r\nKETOROLACO SUBLINGUAL 10 MG \r\nDOLGENAL RAPID APLICARSE 1 BAJO LA LENGUA \r\n7 AM   1 PM  Y 7 PM  ',1,'2018-10-31 17:03:13','2018-10-31 17:03:13');
/*!40000 ALTER TABLE `subpatologies` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-07 11:55:18
