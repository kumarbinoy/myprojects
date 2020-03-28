-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 07:04 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_name` varchar(40) NOT NULL,
  `adm_email` varchar(30) NOT NULL,
  `adm_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_name`, `adm_email`, `adm_password`) VALUES
('useradmin', 'adm@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `A_PRJ_ID` varchar(10) NOT NULL,
  `A_ROLL_NO` varchar(9) NOT NULL,
  `START_DATE` varchar(30) NOT NULL,
  `END_DATE` varchar(30) NOT NULL,
  `FILE` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`A_PRJ_ID`, `A_ROLL_NO`, `START_DATE`, `END_DATE`, `FILE`) VALUES
('CSE_18_1', 'CSM18012', '23/11/19', '25/11/19', 'C:/xampp/htdocs/project_management/Files/CSE_18_1-CSM18012/'),
('CSE_18_2', 'CSM18006', '25/11/19', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `D_NAME` varchar(75) NOT NULL,
  `D_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`D_NAME`, `D_ID`) VALUES
('CIVIL ENGINEERING', 'CE'),
('COMPUTER SCIENCE AND ENGINEERING', 'CSE'),
('ELECTRONICS AND COMMUNICATION ENGINEERING', 'ECE'),
('ELECTRICAL ENGINEERING', 'EE'),
('ENERGY', 'ERG'),
('FOOD ENGINEERING AND TECHNOLOGY', 'FET'),
('MECHANICAL ENGINEERING', 'ME');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `I_ID` varchar(10) NOT NULL,
  `I_F_NAME` varchar(30) NOT NULL,
  `I_L_NAME` varchar(30) NOT NULL,
  `I_EMAIL` varchar(40) NOT NULL,
  `I_D_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`I_ID`, `I_F_NAME`, `I_L_NAME`, `I_EMAIL`, `I_D_ID`) VALUES
('amittu', 'Amit Baran ', 'Das', 'amittu@tezu.ernet.in', 'FET'),
('ananyab', 'Ananya ', 'Bonjyotsna', 'ananyab@tezu.ernet.in', 'ECE'),
('arindam', 'Dr. Arindam', 'Karmakar', 'arindam@tezu.ernet.in', 'CSE'),
('aru243', 'Mr. Arunav', 'Chakraborty', 'aru243@tezu.ernet.in', 'CE'),
('asaikia', 'Dr. Ankurjyoti', 'Saikia', 'asaikia@tezu.ernet.in', 'CE'),
('badwaik', 'Laxmikant S.', 'Badwaik', 'badwaik@tezu.ernet.in', 'FET'),
('bailung', 'Mr. Debaraj Bailung', 'Sonowal', 'bailung@tezu.ernet.in', 'CE'),
('barnali', 'Barnali ', 'Chowdhury', 'barnali@tezu.ernet.in', 'ME'),
('baruahd', 'Debendra Chandra', 'Baruah	', 'baruahd@tezu.ernet.in', 'ERG'),
('bdeka', 'Bhabesh ', 'Deka', 'bdeka@tezu.ernet.in', 'ECE'),
('bgb', 'Dr. Bhogeswar', 'Borah', 'bgb@tezu.ernet.in', 'CSE'),
('bibha', 'Bibha', 'Boro', 'bibha@tezu.ernet.in', 'ERG'),
('binanda', 'Mr. Binanda Khungur ', 'Narzary', 'binanda@tezu.ernet.in', 'CE'),
('biplobm', 'Biplob ', 'Mondal', 'biplobm@tezu.ernet.in', 'ECE'),
('bjsece', 'Mr. Barnam Jyoti', 'Saharia', 'bjsece@tezu.ernet.in', 'EE'),
('bkakati', 'Biraj Kumar', 'Kakati', 'bkakati@tezu.ernet.in', 'ERG'),
('bnath', 'Dr. Bhabesh', 'Nath', 'bnath@tezu.ernet.in', 'CSE'),
('brijesh', 'Brijesh', 'Srivastava  ', 'brijesh@tezu.ernet.in', 'FET'),
('charu', 'Charu Lata', ' Mahanta', 'charu@tezu.ernet.in', 'FET'),
('ddatta', 'Dilip ', 'Datta', 'ddatta@tezu.ernet.in', 'ME'),
('deb0001', 'Dr. Debojit', 'Boro', 'deb0001@tezu.ernet.in', 'CSE'),
('deepika', 'Deepika ', 'Hazarika', 'deepika@tezu.ernet.in', 'ECE'),
('deka.s', 'Dr. Shailen ', 'Deka', 'deka.s@tezu.ernet.in', 'CE'),
('dhanapati', 'Dhanapati', 'Deka', 'dhanapati@tezu.ernet.in', 'ERG'),
('dibya05', 'Dibyakanta', 'Seth  ', 'dibya05@tezu.ernet.in', 'FET'),
('dkb', 'Dr. Dhruba K ', 'Bhattacharyya', 'dkb@tezu.ernet.in', 'CSE'),
('dks', 'Dr. Dilip Kr.', 'Saikia', 'dks@tezu.ernet.in', 'CSE'),
('dsn', 'Durlav ', 'Sonowal', 'dsn@tezu.ernet.in', 'ECE'),
('duary', 'Raj Kumar', 'Duary', 'duary@tezu.ernet.in', 'FET'),
('haloi_p', 'Prabin', 'Haloi', 'haloi_p@tezu.ernet.in', 'ME'),
('hod_ee', 'Prof. Manabendra ', 'Bhuyan', 'hod_ee@tezu.ernet.in', 'EE'),
('jdb', 'Mr. Jayanta  Deori ', 'Bharali', 'jdb@tezu.ernet.in', 'CE'),
('jitend', 'Jiten Chandra ', 'Dutta', 'jitend@tezu.ernet.in', 'ECE'),
('kahamad', 'Dr. Kamal Uddin', 'Ahamad', 'kahamad@tezu.ernet.in', 'CE'),
('kalitas', 'Dr. Shobhanjana', 'Kalita', 'kalitas@tezu.ernet.in', 'CSE'),
('kalpa', 'Kalpajyoti ', 'Borah', 'kalpa@tezu.ernet.in', 'ME'),
('karabi', 'Karabi', 'Bharadwaj', 'karabi@tezu.ernet.in', 'CE'),
('kshirod', 'Kshirod Kumar', 'Dash  ', 'kshirod@tezu.ernet.in', 'FET'),
('magna', 'Mrs. Monisha', 'Devi', 'magna@tezu.ernet.in', 'CSE'),
('make1caree', 'Mr. Chiranjit ', 'Adhikary', 'make1career@gmail.com', 'EE'),
('manab', 'Manabendra ', 'Bhuyan', 'manab@tezu.ernet.in', 'ECE'),
('manabor', 'Dr. Manashita', 'Borah', 'manabor@tezu.ernet.in', 'EE'),
('mkhazarika', 'Manuj Kumar  ', 'Hazarika ', 'mkhazarika@tezu.ernet.in', 'FET'),
('monojb', 'Monoj', 'Bardalai', 'monojb@tezu.ernet.in', 'ME'),
('nabin', 'Nabin', 'Sarmah', 'nabin@tezu.ernet.in', 'ERG'),
('nandan', 'Nandan', 'Sit', 'nandan@tezu.ernet.in', 'FET'),
('nazrul', 'Dr. Nazrul', 'Hoque', 'nazrul@tezu.ernet.in', 'CSE'),
('nishant', 'Dr. Nishant Rachayya Swami ', 'Hulle', 'nishant@tezu.ernet.in', 'FET'),
('nitya', 'Dr. Nityananda', 'Sarma', 'nitya@tezu.ernet.in', 'CSE'),
('nkakoty', 'Nayan Moni ', 'Kakoty', 'nkakoty@tezu.ernet.in', 'ECE'),
('nmedhi', 'Dr. Nabajyoti', 'Medhi', 'nmedhi@tezu.ernet.in', 'CSE'),
('paragmk', 'Paragmoni', 'Kalita', 'paragmk@tezu.ernet.in', 'ME'),
('pkc', 'Pradyumna Kumar', 'Choudhury', 'pkc@tezu.ernet.in', 'ERG'),
('polashd', 'Polash Pratim', 'Dutta', 'polashd@tezu.ernet.in', 'ME'),
('poonam', 'Poonam', 'Mishra', 'poonam@tezu.ernet.in', 'FET'),
('ppdutta', 'Partha Pratim', 'Dutta', 'ppdutta@tezu.ernet.in', 'ME'),
('pps', 'Partha Pratim ', 'Sahu', 'pps@tezu.ernet.in', 'ECE'),
('priyankak', 'Priyanka ', 'Kakoty', 'priyankak@tezu.ernet.in', 'ECE'),
('r.bhadr', 'Rakesh', 'Bhadra', 'r.bhadr@tezu.ernet.in', 'ME'),
('rahat', 'Dr. Md. Rahat', 'Mahboob', 'rahat@tezu.ernet.in', 'EE'),
('ratulkr', 'Ratul Kumar ', 'Baruah', 'ratulkr@tezu.ernet.in', 'ECE'),
('rbgn', 'Mr. Rituraj', 'Buragohain', 'rbgn@tezu.ernet.in', 'CE'),
('riku', 'Riku ', 'Chutia', 'riku@tezu.ernet.in', 'ECE'),
('rosy8', 'Dr. Rosy', 'Sarmah', 'rosy8@tezu.ernet.in', 'CSE'),
('rumi90', 'Dr. Rumi', 'Rajbongshi', 'rumi90@tezu.ernet.in', 'EE'),
('rupam', 'Rupam', 'Kataki', 'rupam@tezu.ernet.in', 'ERG'),
('s.nath', 'Dr. Sanghamitra', 'Nath', 's.nath@tezu.ernet.in', 'CSE'),
('sadhan', 'Sadhan', 'Mahapatra', 'sadhan@tezu.ernet.in', 'ERG'),
('sanjibb', 'Sanjib', 'Banerjee', 'sanjibb@tezu.ernet.in', 'ME'),
('sankar', 'Sankar Chandra ', 'Deka', 'sankar@tezu.ernet.in', 'FET'),
('sarat', 'Dr. Sarat 	', 'Saharia', 'sarat@ezu.ernet.in', 'CSE'),
('satadru', 'Satadru', 'Kashyap', 'satadru@tezu.ernet.in', 'ME'),
('sb', 'Satyajib ', 'Bhattacharyya', 'sb@tezu.ernet.in', 'ECE'),
('sdeka', 'Dr. Sanjib K', 'Deka', 'sdeka@tezu.ernet.in', 'CSE'),
('shikha5', 'Shikha', 'Bhuyan', 'shikha5@tezu.ernet.in', 'ME'),
('sis', 'Dr. S. Ibotombi', 'Singh', 'sis@tezu.ernet.in', 'CSE'),
('smaity', 'Santanu ', 'Maity', 'smaity@tezu.ernet.in', 'ECE'),
('smkmech', 'Seikh Mustafa', 'Kamal', 'smkmech@tezu.ernet.in', 'ME'),
('smriti', 'Dr. Smriti Kumar ', 'Sinha', 'smriti@tezu.ernet.in', 'CSE'),
('souravc', 'Sourav', 'Chakraborty  ', 'souravc@tezu.ernet.in', 'FET'),
('ssankar', 'Dr. Siddhartha S.', 'Satapathy', 'ssankar@tezu.ernet.in', 'CSE'),
('sss', 'Santanu ', 'Sharma', 'sss@tezu.ernet.in', 'ECE'),
('sushen', 'Sushen', 'Kirtania', 'sushen@tezu.ernet.in', 'ME'),
('suvendu11', 'Prof. Suvendu', 'Bhattacharya', 'suvendu11@tezu.ernet.in', 'FET'),
('swpatra', 'Dr. Swarnajyoti', 'Patra', 'swpatra@tezu.ernet.in', 'CSE'),
('tapan_g', 'Tapan Kumar', 'Gogoi', 'tapan_g@tezu.ernet.in', 'ME'),
('ukrdas', 'Dr. Utpal Kumar', 'Das', 'ukrdas@tezu.ernet.in', 'CE'),
('utpal', 'Dr. Utpal', 'Sharma', 'utpal@tezu.ernet.in', 'CSE'),
('vikas', 'Vikas', 'Verma', 'vikas@tezu.ernet.in', 'ERG'),
('vkmehta', 'Vivek Kr. ', 'Mehta', 'vkmehta@tezu.ernet.in', 'ME'),
('vknath', 'Vijay Kumar ', 'Nath', 'vknath@tezu.ernet.in', 'ECE'),
('xoumik', 'Soumik', ' Roy', 'xoumik@tezu.ernet.in', 'ECE'),
('zk', 'Zahnupriya', 'Kalita', 'zk@tezu.ernet.in', 'ME');

-- --------------------------------------------------------

--
-- Table structure for table `offers_project`
--

CREATE TABLE `offers_project` (
  `O_PRJ_ID` varchar(10) NOT NULL,
  `O_P_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers_project`
--

INSERT INTO `offers_project` (`O_PRJ_ID`, `O_P_ID`) VALUES
('CSE_17_1', 'BTECH(CS)'),
('CSE_18_1', 'MCA'),
('CSE_18_2', 'MCA');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `P_ID` varchar(10) NOT NULL,
  `P_NAME` varchar(60) NOT NULL,
  `P_DURATION` int(11) NOT NULL,
  `P_D_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`P_ID`, `P_NAME`, `P_DURATION`, `P_D_ID`) VALUES
('BTECH(CIV)', 'BACHELOR OF TECHNOLOGY', 4, 'CE'),
('BTECH(CS)', 'BACHELOR OF TECHNOLOGY', 4, 'CSE'),
('BTECH(ECE)', 'BACHELOR OF TECHNOLOGY', 4, 'ECE'),
('BTECH(EE)', 'BACHELOR OF TECHNOLOGY', 4, 'EE'),
('BTECH(FET)', 'BACHELOR OF TECHNOLOGY', 4, 'FET'),
('BTECH(ME)', 'BACHELOR OF TECHNOLOGY', 4, 'ME'),
('BVOC(FET)', 'BACHELOR OF VOCATIONAL (FOOD PROCESSING)', 3, 'FET'),
('MCA', 'MASTER OF COMPUTER APPLICATION', 3, 'CSE'),
('MTECH(CIV)', 'MASTER OF TECHNOLOGY', 2, 'CE'),
('MTECH(CS)', 'MASTER OF TECHNOLOGY(COMPUTER SCIENCE)', 2, 'CSE'),
('MTECH(ECE)', 'MASTER OF TECHNOLOGY', 2, 'ECE'),
('MTECH(ERG)', 'MASTER OF TECHNOLOGY', 2, 'ERG'),
('MTECH(FET)', 'MASTER OF TECHNOLOGY', 2, 'FET'),
('MTECH(IT)', 'MASTER OF TECHNOLOGY(INFORMATION TECHNOLOGY)', 2, 'CSE'),
('MTECH(ME)', 'MASTER OF TECHNOLOGY', 2, 'ME'),
('PG.DIPLOMA', 'POSTt GRADUATE DIPLOMA IN RENEWABLE ENERGY AND ENERGY MANAGE', 1, 'ERG');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `PRJ_ID` varchar(10) NOT NULL,
  `PRJ_NAME` varchar(200) NOT NULL,
  `PRJ_DURATION` int(11) NOT NULL,
  `PRJ_LOCATION` varchar(50) NOT NULL,
  `PRJ_I_ID` varchar(10) NOT NULL,
  `PRJ_YEAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`PRJ_ID`, `PRJ_NAME`, `PRJ_DURATION`, `PRJ_LOCATION`, `PRJ_I_ID`, `PRJ_YEAR`) VALUES
('CE_18_1', 'Prediction model for compaction characteristics of fine grained soils in terms o', 6, 'TEZPUR UNIVERSITY', 'asaikia', 2019),
('CE_18_2', 'Design of pervious concrete pavement', 6, 'TEZPUR UNIVERSITY', 'jdb', 2019),
('CE_18_3', 'A study on the effect of grain size and moisture content on shear properties of ', 6, 'TEZPUR UNIVERSITY', 'ukrdas', 2019),
('CE_18_4', 'Removal of arsenic from drinking water using low cost adsorbent', 6, 'TEZPUR UNIVERSITY', 'kahamad', 2019),
('CE_19_1', 'Variation of geotechnical properties of soil on mixing of stone dust', 6, 'TEZPUR UNIVERSITY', 'aru243', 2019),
('CE_19_2', 'Study of hydrograph recession in vegetation covered mountainous catchment', 6, 'TEZPUR UNIVERSITY', 'rbgn', 2019),
('CE_19_3', 'Incorporation of tyre pressure and contact radios factors in design of flexible ', 6, 'TEZPUR UNIVERSITY', 'binanda', 2019),
('CE_19_4', 'Cold mix bituminous concrete mix design using bitumen emulsion', 6, 'TEZPUR UNIVERSITY', 'binanda', 2019),
('CSE_17_1', 'Facial expression recognition', 6, 'TEZPUR UNIVERSITY', 'kalitas', 2019),
('CSE_17_2', 'Machine Learning Solution for Malware\r\ndetection', 6, 'TEZPUR UNIVERSITY', 'dkb', 2019),
('CSE_17_3', 'Database Application (e.g.TU leave\r\nprocessing', 6, 'TEZPUR UNIVERSITY', 'sarat', 2019),
('CSE_17_4', 'Image classification', 6, 'TEZPUR UNIVERSITY', 'swpatra', 2019),
('CSE_18_1', 'Text Mining', 6, 'TEZPUR UNIVERSITY', 'bgb', 2019),
('CSE_18_2', 'Machine Learning', 6, 'TEZPUR UNIVERSITY', 'nazrul', 2019),
('CSE_18_3', 'Board meeting portal/software', 6, 'TEZPUR UNIVERSITY', 'sarat', 2019),
('CSE_18_4', 'Data Visualization', 6, 'TEZPUR UNIVERSITY', 'arindam', 2019),
('CSE_19_1', 'Cellular automata based Symmetry analysis in genetic code table', 6, 'TEZPUR UNIVERSITY', 'ssankar', 2019),
('CSE_19_2', 'Computational representation of information extracted from texts.', 6, 'TEZPUR UNIVERSITY', 'utpal', 2019),
('CSE_19_3', 'Blockchain', 6, 'TEZPUR UNIVERSITY', 'deb0001', 2019),
('CSE_19_4', 'Computer Vision', 6, 'TEZPUR UNIVERSITY', 'kalitas', 2019),
('ECE_17_1', 'Hardware based field type E-Nose for flavor detection of tea using MOS gas senso', 12, 'TEZPUR UNIVERSITY', 'manab', 2019),
('ECE_17_2', 'Design and development of compressed sensing based image reconstruction of proto', 6, 'TEZPUR UNIVERSITY', 'bdeka', 2019),
('ECE_17_3', 'Microwave technology based tea processing systems of NE states', 6, 'TEZPUR UNIVERSITY', 'sb', 2019),
('ECE_17_4', 'Portable peripheral nerve testing instrument', 6, 'TEZPUR UNIVERSITY', 'manab', 2019),
('ECE_18_1', 'Design and development of compressed sensing based image reconstruction of proto', 12, 'TEZPUR UNIVERSITY', 'bdeka', 2019),
('ECE_18_2', 'Modeling and Simulation of Artificial Synapse', 6, 'TEZPUR UNIVERSITY', 'xoumik', 2019),
('ECE_18_3', 'Studies of ferromagnetic resonance in spinal ferite and granets for high power', 6, 'TEZPUR UNIVERSITY', 'sb', 2019),
('ECE_18_4', 'Design of ultra low power FHSS transceiver for wireless communication applicatio', 12, 'TEZPUR UNIVERSITY', 'ananyab', 2019),
('ECE_19_1', 'Automated flushing of public toilets', 6, 'TEZPUR UNIVERSITY', 'manab', 2019),
('EE_18_1', 'A low cost portable Tea flavour detection system', 6, 'TEZPUR UNIVERSITY', 'hod_ee', 2019),
('EE_18_2', 'Development of a prototype for mute patients to control a vehicle with a set of ', 6, 'TEZPUR UNIVERSITY', 'bjsece', 2019),
('EE_18_3', 'Investigation of chaos in fractional order models of some communicable and hered', 6, 'TEZPUR UNIVERSITY', 'manabor', 2019),
('EE_19_1', 'Design and Development of a low cost circuitry for appliance automation in Educa', 6, 'TEZPUR UNIVERSITY', 'bjsece', 2019),
('EE_19_2', 'A PC based  peripheral neuropathy detection technique', 6, 'TEZPUR UNIVERSITY', 'hod_ee', 2019),
('EE_19_3', 'Investigation of chaos to detect neurological disorders from EEG signals', 12, 'TEZPUR UNIVERSITY', 'manabor', 2019),
('ERG_18_1', 'Development of high temperature fuel cells', 6, 'TEZPUR UNIVERSITY', 'dhanapati', 2019),
('ERG_18_2', 'Rural Hybrid Energy Enterprise Systems', 6, 'TEZPUR UNIVERSITY', 'sadhan', 2019),
('ERG_18_3', 'INDIA-UK Center for education and Research in clean energy', 6, 'TEZPUR UNIVERSITY', 'nabin', 2019),
('ERG_19_1', 'Upgradation of lab and library facilities of the Department of Energy', 6, 'TEZPUR UNIVERSITY', 'dhanapati', 2019),
('ERG_19_2', 'Enhancing Food Security in Rural India', 12, 'TEZPUR UNIVERSITY', 'baruahd', 2019),
('ERG_19_3', 'Instrumented solar hot air generator (ISHAG) for optimum thermal load in tea pro', 6, 'TEZPUR UNIVERSITY', 'baruahd', 2019),
('FET_18_1', 'Quality improvement of a traditional probiotic beverage of North-East\r\nIndia as ', 6, 'TEZPUR UNIVERSITY', 'sankar', 2019),
('FET_18_2', 'Comparative metagenome of human gut of North and North-eastern region\r\nof India.', 12, 'TEZPUR UNIVERSITY', 'duary', 2019),
('FET_18_3', 'Production of natural antioxidant enriched sandesh using single screw\r\nextruder.', 6, 'TEZPUR UNIVERSITY', 'kshirod', 2019),
('FET_18_4', 'Pilot Scale Process Technology for ‘Bhim Kol’ (Musa Balbisiana) Slice,\r\nGrits an', 6, 'TEZPUR UNIVERSITY', 'brijesh', 2019),
('FET_19_1', 'Development of active packaging film from food processing wastes ', 6, 'TEZPUR UNIVERSITY', 'badwaik', 2019),
('FET_19_2', 'Development of technology for quick cooking rice production through up\r\ngradatio', 6, 'TEZPUR UNIVERSITY', 'mkhazarika', 2019),
('ME_18_1', 'Processing and Mechanical Property Evaluation of Microalloyed 2219 Al Alloys', 6, 'TEZPUR UNIVERSITY', 'sanjibb', 2019),
('ME_18_2', 'Study of performance, combustion and emission characteristics of a turbocharged ', 12, 'TEZPUR UNIVERSITY', 'tapan_g', 2019),
('ME_19_1', 'Fabrication of Calcium Carbonate filled composites and Optimization of their man', 6, 'TEZPUR UNIVERSITY', 'satadru', 2019),
('ME_19_2', 'Model of Combined Heat and Power from Purely Producer Gas Based Engine Alternato', 6, 'TEZPUR UNIVERSITY', 'ppdutta', 2019),
('ME_19_3', 'Characterization of producer gas generated from different locally available wood', 12, 'TEZPUR UNIVERSITY', 'ppdutta', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `project_request`
--

CREATE TABLE `project_request` (
  `STU_ROLL` varchar(15) NOT NULL,
  `STU_PROG` varchar(15) NOT NULL,
  `CHOICE1` varchar(20) NOT NULL,
  `CHOICE2` varchar(20) NOT NULL,
  `CHOICE3` varchar(20) NOT NULL,
  `CHOICE4` varchar(20) NOT NULL,
  `CHOICE5` varchar(20) NOT NULL,
  `CHOICE6` varchar(20) NOT NULL,
  `CHOICE7` varchar(20) NOT NULL,
  `CHOICE8` varchar(20) NOT NULL,
  `CHOICE9` varchar(20) NOT NULL,
  `CHOICE10` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_request`
--

INSERT INTO `project_request` (`STU_ROLL`, `STU_PROG`, `CHOICE1`, `CHOICE2`, `CHOICE3`, `CHOICE4`, `CHOICE5`, `CHOICE6`, `CHOICE7`, `CHOICE8`, `CHOICE9`, `CHOICE10`) VALUES
('CSM18006', 'MCA', 'CSE_18_2', 'CSE_18_1', '', '', '', '', '', '', '', ''),
('CSM18012', 'MCA', 'CSE_18_2', 'CSE_18_1', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_F_NAME` varchar(25) NOT NULL,
  `S_L_NAME` varchar(25) NOT NULL,
  `ROLL_NO` varchar(9) NOT NULL,
  `SEM_NO` int(11) NOT NULL,
  `CGPA` float NOT NULL,
  `S_EMAIL` varchar(40) NOT NULL,
  `S_PASSWORD` varchar(15) NOT NULL,
  `S_D_ID` varchar(10) NOT NULL,
  `S_P_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_F_NAME`, `S_L_NAME`, `ROLL_NO`, `SEM_NO`, `CGPA`, `S_EMAIL`, `S_PASSWORD`, `S_D_ID`, `S_P_ID`) VALUES
('BHARGAB CHANDRA', ' BARUAH', 'BVE18001', 3, 6.31, 'BVE18001@gmail.com', 'BHARGAB CHANDRA', 'ERG', ''),
('YUBARAJ ', 'BARMAN', 'CEB18002', 3, 6.11, 'CEB18002@gmail.com', 'YUBARAJ ', 'CE', ''),
('ROSHAN', ' PRADHAN', 'CEB18015', 3, 5.67, 'CEB18015', 'ROSHAN', 'CE', ''),
('Gaurav', 'Bhutani', 'CSB17006', 4, 7.54, 'bhutani@yahoo.com', 'Gaurav', 'CSE', ''),
('Manab', 'Das', 'CSB18014', 3, 6.46, 'manab12@gmail.com', 'Manab', 'CSE', ''),
('Mohit', 'Deb', 'CSB18017', 3, 7.2, 'manabdeb@hotmail.com', 'Mohit', 'CSE', ''),
('Vinod', 'Khan', 'CSI16001', 7, 8.7, 'vinodk@gmail.com', 'Vinod', 'CSE', ''),
('Pritam', 'Dahal', 'CSI17018', 5, 7.87, 'pritamdahal62@gmail.com', 'Pritam', 'CSE', ''),
('Jay', 'Debnath', 'CSM18006', 3, 8.45, 'jaydebnath99@gmail.com', 'Jay', 'CSE', 'MCA'),
('Binoy Kr.', 'Singh', 'CSM18012', 4, 8, 'binoylikes22@gmail.com', 'binoy', 'CSE', 'MCA'),
('Arindam', 'Saha', 'CSM19035', 1, 0, 'arindam@gmail.com', 'arindam', 'CSE', 'MCA'),
('ADITTYA ', 'DEY', 'ECB18001', 3, 8.33, 'ECB18001@gmail.com', 'ADITTYA ', 'ECE', ''),
('MRIGANKA KUMAR ', 'KALITA', 'ECB18011', 3, 5.22, 'ECB18011@gmail.com', 'MRIGANKA KUMAR ', 'ECE', ''),
('AMLAN', 'KASHYAP', 'EEB16001', 7, 8.4, 'amlankashyap222@gmail.com', 'AMLAN', 'EE', ''),
('ANKAN ', 'PHUKAN', 'EEB16018', 7, 7.87, ' ankanphukan16@yahoo.com', 'ANKAN ', 'EE', ''),
('ANGSHU PLAVAN', ' NATH', 'ENE17002', 5, 8.72, 'ENE17002@gmail.com', 'ANGSHU PLAVAN', 'ERG', ''),
('KUMUDHINI ', 'AKASAPU', 'FPL17007', 5, 9.27, 'FPL17007@gmail.com', 'KUMUDHINI ', 'FET', ''),
('JAIKLONG', ' NARZARY', 'FPL17018', 5, 7.02, 'FPL17018@gmail.com', 'JAIKLONG', 'FET', ''),
('NAYANITA', ' KALITA', 'MEB16002', 7, 8.04, 'MEB16002@gmail.com', 'NAYANITA', 'ME', ''),
('SUBHANKAR ', 'MAITRA', 'MEB16009', 7, 8.44, 'MEB16009@gmail.com', 'SUBHANKAR ', 'ME', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_email`);

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`A_PRJ_ID`,`A_ROLL_NO`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`I_ID`);

--
-- Indexes for table `offers_project`
--
ALTER TABLE `offers_project`
  ADD PRIMARY KEY (`O_PRJ_ID`,`O_P_ID`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`P_ID`) USING BTREE;

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`PRJ_ID`);

--
-- Indexes for table `project_request`
--
ALTER TABLE `project_request`
  ADD PRIMARY KEY (`STU_ROLL`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ROLL_NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
