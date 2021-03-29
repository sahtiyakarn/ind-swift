-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 10:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediacon_indswift`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canonical` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `keyword`, `canonical`, `title`, `created_at`, `updated_at`) VALUES
(1, 'this is about page', 'work is nice', 'www.ind-swift.com', 'ind-swift | About', '2021-01-04 06:50:39', '2021-01-04 06:50:39'),
(2, 'hello is the best work', 'sahitya smart class', 'www. im sahtiya karn', 'working', '2021-01-04 06:56:40', '2021-01-04 06:56:40'),
(3, 'summer is good for work', 'for incharge', 'www.confiazamedia.com', 'this is my compy', '2021-01-06 05:04:28', '2021-01-06 05:04:28'),
(4, 'summer is good for work', 'sahitya smart class', 'www. im sahtiya karn', 'this is my compy', '2021-01-06 05:09:57', '2021-01-06 05:09:57'),
(5, 'coder is the best', 'sahitya smart class', 'www.ind-swift.com', 'this is my compy', '2021-01-06 05:34:02', '2021-01-06 05:34:02'),
(9, 'b', 'c', 'd', 'a', '2021-03-15 03:45:28', '2021-03-15 03:45:28'),
(10, 'a', 'a', 'a', 'a', '2021-03-15 03:51:18', '2021-03-15 03:51:18'),
(12, 'two', 'three', 'four', 'one', '2021-03-15 04:19:48', '2021-03-15 04:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE `approvals` (
  `id` int(11) NOT NULL DEFAULT 0,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `photo1` varchar(500) DEFAULT NULL,
  `photo2` varchar(500) DEFAULT NULL,
  `photo3` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `boardofdirectors`
--

CREATE TABLE `boardofdirectors` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `designtion` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boardofdirectors`
--

INSERT INTO `boardofdirectors` (`id`, `name`, `designtion`, `photo`) VALUES
(1, 'MR. SANJEEV RAI MEHTA', 'CHAIRMAN', 'Mr.S.R.Mehta.png'),
(2, 'DR. GOPAL MUNJAL', 'MANAGING DIRECTOR & CEO', 'Dr.Gopal-Munjal.png'),
(3, 'MR. NAV RATTAN MUNJAL', 'DIRECTOR', 'Nav-Rattan-Munjal.png'),
(4, 'DR. VIKRANT RAI MEHTA', 'JOINT MANAGING DIRECTOR', 'Dr.Vikrant-Rai-Mehta.jpg'),
(5, 'MR. HIMANSHU JAIN\r\n', 'DIRECTOR', 'Himanshu-jain.jpg'),
(6, 'MR. RISHAV MEHTA\r\n', 'DIRECTOR', 'Rishav-Mehta.png'),
(7, 'DR. J.K. KAKKAR\r\n', 'INDEPENDENT DIRECTOR\r\n', 'my.jpg'),
(8, 'MR. J.S. AHLUWALIA\r\n', 'INDEPENDENT DIRECTOR\r\n', 'my.jpg'),
(9, 'MR. S.P.SHARMA\r\n', 'INDEPENDENT DIRECTOR	', 'my.jpg'),
(10, 'MR. V.K.ARORA\r\n', 'INDEPENDENT DIRECTOR	', 'v_k_arora.jpg'),
(11, 'MR. S.C. GALHOTRA\r\n', 'INDEPENDENT DIRECTOR	', 'my.jpg'),
(12, 'MS. ANOOP MICHRA\r\n', 'INDEPENDENT WOMAN DIR\r\n', 'my.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chairmans`
--

CREATE TABLE `chairmans` (
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `companys`
--

CREATE TABLE `companys` (
  `id` int(11) NOT NULL DEFAULT 0,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquirys`
--

CREATE TABLE `enquirys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquirys`
--

INSERT INTO `enquirys` (`id`, `name`, `email`, `phone`, `place`, `info`, `created_at`, `updated_at`) VALUES
(1, 'sahitya karn', 'sahityakarn@gmail.com', '09599007788', 'Delhi', 'asdasd', '2021-01-06 04:54:39', '2021-01-06 04:54:39'),
(2, 'sahitya karn', 'sahityakarn@gmail.com', '09599007788', 'Bihar', 'asdfasfdas', '2021-01-06 04:55:29', '2021-01-06 04:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genericproducts`
--

CREATE TABLE `genericproducts` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `composition` varchar(500) NOT NULL,
  `pkg` varchar(500) NOT NULL,
  `form` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(50) DEFAULT NULL,
  `keyword` varchar(500) DEFAULT NULL,
  `canonical` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genericproducts`
--

INSERT INTO `genericproducts` (`id`, `name`, `composition`, `pkg`, `form`, `updated_at`, `title`, `keyword`, `canonical`, `description`) VALUES
(1, 'Aclofen  MR (In house)', 'Diclofenac Potassium 50mg + Pcm 325mg +\nChlorzoxazone 250mg', '100x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(2, 'Aclofen Plus', 'Each tablet contains:Aceclofenac 100mg + Pcm 325mg', '20x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(3, 'Aclofen Plus', 'Each 5ml contains:Aceclofenac 50mg + Paracetamol\n125mg', '60 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(4, 'Aclofen SP (Alu Alu)', 'Aceclofenac 100mg + Paracetamol 325 mg+\nSerratiopeptidase IP 10mg.', '20x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(5, 'Agiceff 200', 'Each Film Coated tablet Contains : Cefixime Trihydrate IP eq. To Cefixime (Anhydroous) 200mg Colour : Titanium\nDioxide IP', '10X1X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(6, 'Alconol', 'Disulfiram tablet IP 500mg', '25 x 4', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(7, 'Alice', 'Paracetamol 150mg', '2 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(8, 'Alice 500', 'Each Uncoated tablet. Contains :Paracetamol IP 500mg', '10X5X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(9, 'Alice DS Susp.', 'Each 5 ml Contains : Paracetamol IP 250mg (In A\nFlavoured Syrup Base), Colour-Ponceau 4R', '100 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(10, 'Alice DS Susp.', 'Each 5 ml Contains : Paracetamol IP 250mg (In A\nFlavoured Syrup Base), Colour-Ponceau 4R', '60 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(11, 'Amibex TZ', 'Each film coated tablet contains: Norfloxacin\n400mg+Tinidazole 600mg', '20x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(12, 'Amtop 500', 'Each ml Contains :  Amikacin (As Sulphate) IP-250mg\nInj.Vial', '2 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(13, 'Amyclox LB', 'Amoxicillin 250mg + Cloxacillin 250mg +Lactobacillus\n100 million spores', '20x10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(14, 'Amyclox LB D', 'Amoxicillin 250mg + Cloxacillin 250mg +Lactobacillus 1.7\nbillion spores', '20x10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(15, 'Azovid 250', 'Each film coated tablet contains: Azithromycin Dihydrate IP eq. To Azithromycin Anhydrous-250mg Colours: Yellow Oxide of Iron & Titanium Dioxide IP\nExcipients Qs', '20x1x6', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(16, 'Azovid 500', 'Each film coated tablet contains: Azithromycin Dihydrate IP eq. To Azithromycin Anhydrous-500mg Colours: Yellow Oxide of Iron & Titanium Dioxide IP\nExcipients Qs', '20x1x3', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(17, 'Becmet N Cream', 'Beclomethasone 0.025% w/w + Neomycin 0.50% w/w', '15 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(18, 'Becmet S Cream', 'Beclomethasone 0.025% w/w + Salicylic 3% w/w', '10 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(19, 'C Tin Plus', 'Each uncoated tablet contains: Cetirizine Hcl 5mg +\nPhenylephrine 5mg + PCM 325mg', '30X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(20, 'C Tin Plus Ds (With Mono)', 'Chlorpheniramine Maleate 2mg + Phenylepherine Hcl\n5mg + Pcm 250mg', '60 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(21, 'C Tin Plus Ds (Without Mono)', 'Chlorpheniramine Maleate 2mg + Phenylepherine Hcl\n5mg + Pcm 250mg', '60 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(22, 'Cafzone 1Gm', 'Ceftriaxone 1Gm', 'Vial', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(23, 'Cafzone S 1.5Gm', 'Ceftrixone 1Gm + Sulbactam 500 mg', 'Vial', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(24, 'Calswift SG', 'Each softgelatin capsule contains: Calcium 500mg+\nVitamin D3 250 IU', '15x10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(25, 'Calswift D', 'Calcium carbonate 250mg + Vit D3 125 I.U', '200 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(26, 'Cazol B', 'Clotrimazole  IP-1.0% w/w, Beclomethasone\nDIPropionate IP-0.025% w/w,Chlorocresol Solution IP- 0.1% w/w,', '15 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(27, 'Cazol Cream', 'Clotrimazole  IP-1% w/w,Chlorocresol Solution\n(Preservativeative) IP-0.1% w/w,', '15 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(28, 'Cetin', 'Each Film Coated tablet Contains : Cetirizine Dihydrochloride B.P-10mg. Colour : Titanium Dioxide IP', '10X3X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(29, 'Cetin Plus (W/out Mono)', 'Each 5 ml Contains : Cetirizine Hcl-2mg, Phenylephrine\nHcl-2.5 mlg, Paracetamol-125 mlg', '60 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(30, 'Cetin Plus(With Mono)', 'Each 5 ml Contains : Cetirizine Hcl-2mg, Phenylephrine\nHcl-2.5 mlg, Paracetamol-125 mlg', '60 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(31, 'Clav Den 625', 'Each tablet contains: Amoxycillin 500mg+Clavulanic 125mg\nwith mono Carton Alu-Alu', '10x1x6', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(32, 'Clav Den 625', 'Each tablet contains: Amoxycillin 500mg+Clavulanic 125mg\nwith mono Carton Alu-Alu', '10x1x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(33, 'Clav Den DS', 'Each 5ml contains : Amoxycillin 200mg+ Clavulanic\n28.5mg', '30 ml', 'Dry syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(34, 'Clobenate Gm Cream', 'Clobetasole Propionate-0.05% w/w, Miconazole Nitrate- 2% w/w, Neomycin-0.5% w/w, Zinc sulphate IP 0.1%\nw/w', '10 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(35, 'Clobenate Gm Cream', 'Clobetasole Propionate-0.05%, Miconazole Nitrate-2%, Neomycin-0.5% , Zinc  Sulphate IP-0.1%', '20 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(36, 'Cracknil Cream', 'For Healing & Soothing Cracked Heels', '25 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(37, 'Delin Inj', 'Each ml contains: Etophylline IP 84.75mg and\nTheophylline 25.3mg', '2 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(38, 'Dermaswift 5', 'Clotrimazole IP 1.0% w/w, Iodochlorohydroxyquinoline 1.0% w/w, Tolnaftate IP 1.0% w/w, Gentamycin sulphate IP 0.10% w/w, Clobetasol propionate IP 0.5% w/w, Chlorocresol 0.1% w/w', '15 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(39, 'Dexaswift', 'Each ml Contains : Dexamethasone Sodium Phosphate IP eq.. to Dexamethasone Phosphate 4mg, Sodium Methyl Paraben IP 0.15% w/v, Sodium Propyl Paraben IP 0.02% w/v, water for Inj. qs.', '30 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(40, 'Dexaswift', 'Each ml Contains : Dexamethasone Sodium Phosphate IP eq.. to Dexamethasone Phosphate 4mg, Sodium Methyl Paraben IP 0.15% w/v, Sodium Propyl Paraben IP 0.02% w/v, waterl for Inj. qs.', '2 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(41, 'Dicoliv  MR', 'Each uncoated tablet contains: Diclofenac Potassium 50mg + Pcm 325mg + Chlorzoxazone 250mg', '100x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(42, 'Dicoliv AQ', 'Diclofenac sodium 75mg, Benzyl Alcohol IP 4% v/v', '1 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(43, 'Dicoliv Gel', 'Diclofenac Diethylamine B.P-1.16%w/w eq. To Diclofenac Sodium 1% w/w, Oleum Liniment 3% w/w, Menthol IP 5% w/w, Methyl Salicylate IP 10% w/w,\nMethyl Paraben IP 0.25% w/w', '10 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(44, 'Dicoliv Gel', 'Diclofenac Diethylamine B.P-1.16%w/w eq. To Diclofenac Sodium 1% w/w, Oleum Liniment 3% w/w, Menthol IP 5% w/w, Methyl Salicylate IP 10% w/w,\nMethyl Paraben IP 0.25% w/w', '30 Gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(45, 'Dicoliv Hot Gel', 'Diclofenac Diethylamine BP-1.16% w/w (eq. To Diclofenac Sodium 1% w/w), Linseed Oil BP-3% w/w, Methyl Salicylate-10%w/w, capsulesaicin Usp 0.025% w/w, Menthol IP-5%w/w (As Preservative), Benzyle Alcohol B.P-1%w/w In Gel Base', '', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(46, 'Dicoliv Inj', 'Each ml Contains : Diclofenac Sodium IP-25 mlg ,Benzyle\nAlcohol IP-4% w/v', '3 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(47, 'Dicoliv Plus Green', 'Each Uncoated tablet Contains : Diclofenac Sodium IP\n50mg, Paracetamol IP-325 mlg', '25X2X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(48, 'Dicoliv Plus Yellow', 'Each Uncoated tablet Contains : Diclofenac Sodium IP\n50mg, Paracetamol IP-325 mlg', '25X2X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(49, 'E Coff', 'Each 5ml Contains : CPM IP-2.5 mlg,  Ammonium\nChloride IP-125 mlg, Sodium Citrate IP-55 mlg', '100 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(50, 'Feritop S', 'Ferric hydroxide 20mg', '5 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(51, 'Ferritop Syp.', 'Each 15ml contains: Ferric Ammonium Citrate 55mg + Folic Acid 0.5 mg + Cyanocobalamine 0.5mcg', '200 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(52, 'Footcare Cream', 'Urea 10% w/w + Lactic 10% w/w + Propylene  Glycol 10% w/w + Paraffin 10% w/w', '25 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(53, 'Frutop Syp.', 'Each 15ml contains :Protein Hydrolysate 0.333G + Sucrose 3.00G + Niacinamide 10.0mg + Iron 15mg + Magnesium 3.333 mg + Manganese 0.033mg + Zinc\n0.60mg', '200 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(54, 'Gasgon Cap', 'Fennel Oil 10mg+Ajowan Oil 10mg+Caraway Oil 10mg+ Coriander Oil 10mg+Cardamom Oil 10mg+Menthol 5mg', '10x10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(55, 'Gentaswift Inj.', 'Each ml Contains : Gentamicin Sulphate IP eq. To Gentamycin Base-40mg. (40000 I.U.), Methyl Paraben IP- 0.18%w/v,  Propyl Paraben IP-0.02% w/v (As\nPreservativeative), Waterl For Inj. IP- Qs.', '10 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(56, 'Gentaswift Inj.', 'Each ml Contains : Gentamycin Sulphate IP eq..to Gentamycin Base-40mg. (40000I.U),Methyl Paraben IP- 0.18% w/v Propyl Paraben IP-0.02% w/v (As\nPreservativeative), Water for Inj. IP- qs.', '20 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(57, 'Gentaswift Inj.', 'Each ml Contains : Gentamycin Sulphate IP eq..to Gentamycin Base 40mg. (40000 I.U), Methyl Paraben IP- 0.18%w/v, Propyl Paraben IP-0.02%w/v (As Preservativeative), Water for Inj. IP- qs.', '2 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(58, 'Glymat', 'Each uncoated tablet contains: Gliclazide 80mg +\nMetformin Hcl 500mg', '15x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(59, 'Hyoswift', 'Each ml Contains : Hyoscine Butyl Bromide IP-20mg, Sodium Methylparaben IP(As Preservativeative), Waterl\nFor Inj. IP-Qs.', '1 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(60, 'L Oxo 500', 'Each tablet contains : Levofloxacin Hemihydrate IP eq.\nTo Levofloxacin 500mg', '10 x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(61, 'Lurico Cream 10Gm', 'Luliconazole 1% w/w', '10 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(62, 'Monocet F (A/A)', 'Montelukast sodium 10mg+ Fexofenadine 120mg', '10x1x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(63, 'Monocet LC', 'Montelukast Sodium IP eq.. to Montelukast 10mg,\nLevocetirizine Dihydrochloride IP 5mg', '10x1x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(64, 'N Vit 12 Inj', 'Combikit:-\nPart 1 Amp Of Vitamin C 150 mg/1.5 ml, Part 2 Amp Of Vitamin B12 2500 Mcg, Folic Acid 0.7 mg, Nicotinamide IP 12mg/ml', 'Combikit', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(65, 'N Vit Cap', 'Multivitamineral softgels', '10X2X15', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(66, 'N Vit Chocolate', 'Protein Powder +DHA', '200 gm', 'protein supplement', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(67, 'Namovit D3', 'Cholecalciferol Soft Gelatin capsulesules', '10X1X4', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(68, 'Nelsid', 'Nimesulide 100mg', '25X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(69, 'Nelsid Plus Golden', 'Each Uncoated tablet Contains : Nimesulide B.P-100mg,\nParacetamol IP-325mg', '20x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(70, 'Nelsid Plus Green', 'Each Uncoated tablet Contains : Nimesulide B.P-100mg,\nParacetamol IP-325mg', '20x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(71, 'Nelsid Plus Yellow', 'Each Uncoated tablet Contains : Nimesulide B.P-100mg,\nParacetamol IP-325mg', '20x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(72, 'Neo Becmet CG', 'Beclomethasone dipropionate  0.025%  w/w +\nClotrimazole 1% w/w + Neomycin 0.5% w/w', '20 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(73, 'Neo Becmet CG', 'Beclomethasone dipropionate  0.025% w/w+\nClotrimazole 1% w/w+ Neomycin 0.5% w/w', '10 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(74, 'Neo N Vit', 'Multivitamins & Multimineral', '20X1X10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(75, 'Neo Protamine', 'Multivitamin', '20X1X10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(76, 'Neurobex', 'Multivitamin Drops', '15ml', 'Dry syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(77, 'Neurobex Cap', 'Each Hard Gelatin capsules Contains : Vitamin B1(As Hcl)- 10mg, Vitamin B2 -10 mg, Vitamin B6 -3mg, Vitamin C -\n7.5 mlg, Folic Acid -1mg, Calcium Pantothenate -12.5\nmlg, Mecobalamin-1.5 mcg', '15x10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(78, 'Neurobex L', 'Each 15 ml Contain : Thiamine Hcl - 0.75 mg., Pyridoxine Hcl - 1.00mg, Riboflavine (As Phosphate) -0.75 mlg, D- Panthenol -2.5 mg, Niacunamide - 7.5 mlg, Cyanocobalmin ? 0.5 mlcg, L-Lysine Hcl-15 mg, Carbohydrate-4.10G, Energy- 16.40 Kcal, In A Flavoured\nSyrup Base', '200 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(79, 'Neurobex SG', 'Multivitamineral softgels', '10x2x15', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(80, 'Neurobex Syp', 'Each 5 ml Contains : Thiamine Hcl -0.75 mlg, Riboflavine Sodium Phosphate eq. To Riboflavine-0.75 mcg, Pyridoxine Hcl-1.0mg, Nicotinamide-7.5 mcg, Mecobalamin-0.5 mlcg, L-Lysine Monohydrochloride-5 mlcg, Carbohydrate 2.78 Gm, Energy 11.12 Kcal. In A Flavoured Syrupy Base', '200 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(81, 'Ovidine Jar 125Gm', 'Povidone Iodine IP ? 5%w/w(0.5% w/w Available Iodine),\nWater soluble Ointment Base- qs.', '125 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(82, 'Ovidine Jar 250Gm', 'Povidone Iodine IP ? 5%w/w(0.5% w/w Available Iodine),\nWaterl soluble Ointment Base- qs.', '250 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(83, 'Ovidine Ointment  5 %', 'Povidone Iodine 5% w/w', '15 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(84, 'Ovidine Ointment 10%', 'Povidone Iodine 10% w/w', '15 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(85, 'Ovidine Solution (10 %)', 'Povidone Iodine 10% w/w', '100 ml', 'lotions', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(86, 'Ovidine Solution (5 %)', 'Povidone Iodine 5 % w/w', '100 ml', 'lotions', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(87, 'Oxo  200  (Blister)', 'Ofloxacin 200mg', '30x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(88, 'Oxo  200 (A/A)', 'Each Film Coated tablet Contains : Ofloxacin IP?200mg,\nColour:Titanium Dioxide IP', '20X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(89, 'Oxo ORD', 'Ofloxacin 200mg + Ornidazole 500mg', '10x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(90, 'Oxo OTC', 'Ofloxacin 0.75% w/w+ Ornidazole 2% w/w + Terbinafine 1% w/w + Clobetasol 0.05% w/w + Methyl\n0.2% w/w + Propyl 0.02% w/w', '15 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(91, 'Oxo Susp.', 'Each 5 ml Contains : Ofloxacin IP 50mg. In A Flavoured Non Syrupy Base?Qs. Colour :Sunset Yellow FCF.', '60 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(92, 'Oxo Susp.', 'Each 5 ml Contains : Ofloxacin IP 50mg. In A Flavoured Non Syrupy Base?Qs. Colour :Sunset Yellow FCF.', '30 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(93, 'Ozo 20', 'Each tablet contains: Omeprazole (as enteric coated\npellets) 20mg', '20x15', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(94, 'Ozo D', 'Each tablet contains: Omeprazole (as enteric coated\npellets) 20mg+ Domperidone 10mg', '20x15', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(95, 'Panswift D (A/A)', 'Each tablet contains: Pantoprazole 40mg +\nDomperidone IP 10mg', '20x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(96, 'Panswift DSR (A/A)', 'Each hard gelatin capsule.contains: Pantoprazole sodium\n40mg + Domperidone IP 30mg', '20x10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(97, 'Pentagon 40', 'Each Enteric Coated tablet Contains : Pantoprazole Sodium Sesquihydroate eq. To Pantoprazole-40mg,\nColour: Erythrosine.', '10x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(98, 'Pentagon DSR (A/A)', 'Each hard gelatin capsule.contains: Pantoprazole 40mg +\nDomoeridone 30mg', '20X10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(99, 'Primecet 5', 'Levocetirizine Dihydrochloride IP 5mg', '20x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(100, 'Protamine (Chocolate)', 'Protein Powder', '200 gm', 'protein supplement', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(101, 'Protamine Soft Gel', 'Multivitamineral softgels', '20x15', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(102, 'Rabifin  DSR (A/A)', 'Each hard gelatin capsule.contains: Rabeprazole 20mg\n(as enteric coated pellets) + Domperidone (as sustained release pellets) 10mg', '20X10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(103, 'Rabifin 20 (A/A)', 'Each enteric coated tablet contains :Rabeprazole 20mg', '20X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(104, 'Rabifin D (A/A)', 'Each film coated tablet contains: Rabeprazole 20mg +\nDomperidone10mg', '20X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(105, 'Reeveta Cap', 'Ginseng, Multivitamin and Minerals softgels', '10x1x10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(106, 'Roxy 150', 'Each Film Coated tablet Contains : Roxithromycin IP- 150mg. Colour: Brilliant Blue Lake & Titanium Dioxide.', '20X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(107, 'Roxy 50', 'Roxithromycin 50mg', '30 ml', '', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(108, 'Roxy 50 KT', 'Each film coated tablet contains: Roxithromycin 50mg', '10x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(109, 'Stemin', 'Betamethasone 4mg + Phenol 0.5% w/v', '1 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(110, 'Stemin Drops', 'Betamethasone 0.5mg', '15 ml', 'Dry syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(111, 'Swidril Sf Syp', 'Diphenhydramine HCL 14.08mg + Ammonium chloride 138.0mg + Sodium citrate 57.03mg + Menthol 1.14mg', '100 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(112, 'Swidril Syp', 'DIPhenhydramine HCL 14.08mg + Ammonium 138.0 mg\n+ Sodium citrate 57.03mg + Menthol 1.14mg', '100 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(113, 'Swidrill DX', 'Chlorampheniramine maleate 4 mg, Dextromethorphan\nhydrobormide 10 mg', '100 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(114, 'Swiflox 250', 'Each Film Coated tablet Contains : CIProfloxacin Hcl IP eq. To CIProfloxacin-250mg. Colour:Titanium Dioxide.', '20x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(115, 'Swiflox 500', 'Each Film Coated tablet Contains : CIProfloxacin Hcl IP eq. To CIProfloxacin- 500mg, Colour : Titanium Dioxide.', '20x10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(116, 'Swiflox TZ', 'Each Film Coated tablet Contains :- CIProfloxacin 500 mg\n+ Tinidazole 600mg', '20X10', 'Tablet', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(118, 'Swift Anacid Mint', 'Each 10ml contains: Dried Aluminium Hydroxide 200mg\n+ Magnesium Hydroxide 200mg + Activated Dimethicone 25mg', '170 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(119, 'Swift Anacid Orange', 'Each 10ml contains: Dried Aluminium Hydroxide 200mg\n+ Magnesium Hydroxide 200mg + Activated Dimethicone 25mg', '170 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(120, 'Swift Anacid Saunf', 'Each 10ml contains: Dried Aluminium Hydroxide 200mg\n+ Magnesium Hydroxide 200mg + Activated Dimethicone 25mg', '170 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(124, 'Swift Neoclobenate KT5', 'Ketconazole  IP.2.0% w/w, Iodochlorhydroxyquinoline IP 1.0% w/w,Tolnaftate IP 1.0% w/w,Neomycin Sulphate eq.to Neomycin IP 0.1% w/w, Clobetasol Propionate IP 0.05% w/w, Preservative.IP, Cream Base q.s.', '10 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(125, 'Swift Neoclobenate OF', 'Itraconazole USP 1.00% w/w,Ofloxacin IP 0.75% , Ornidazole IP 2.00% IP, Clobetasole Propionate IP 0.05% w/w Preservatives:, Methyl Paraben IP 0.20% w/w\n,Propyl Paraben IP 0.02% w/w, Cream Base q.s.', '10 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(126, 'Swift Succee', 'Each chewable tablet contains (approx.):Vitamin C 500mg, Zinc 5mg, Excipients', '10*10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(127, 'Swift Neoclobenate TCM', 'Ciprofloxacin IP 1.0% w/w, Metronidazole Benzoate IP, eq. To Metronidazole 1.0% w/w, Terbinafine Hydrochloride IP 1.0% w/w,Clobetasol Propionate IP\n.0.05% w/w, In Cream Base q.s.', '10 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(129, 'Swift Voomini Gel 30Gm', 'Diclofenac Diethylamine BP 1.16% w/w + Methyl\nSalicylate 10%  w/w + Menthol 5% w/w', '30 Gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(133, 'Swilactin', 'Cyproheptadine Hcl 2mg + Tricholine\n0.275Gm + Sorbitol 3.575Gm', '200 ml', 'Syrup', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(134, 'Swimox 250', 'Each Hard Gelatin capsulesules contains : Amoxycillin Trihydrate IP eq. To Amoxycillin-250mg', '10x3x10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(135, 'Swimox 500', 'Each Hard Gelatin capsulesule contains : Amoxycillin Trihydrate IP eq. To Amoxycillin-500mg', '10x2x10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(136, 'Swiscab Lotin', 'Gamma Benzene Hexachloride IP-1.0% w/v, Cetrimide IP- 0.1%w/v, Excipients-Qs, In Emulsion Base', '100 ml', 'lotions', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(137, 'Ulsore Gel', 'Choline Salicylate Solution eq.. to Choline Salicylate B.P 8.70% w/w, Lignocaine Hcl IP-2.0% w/w, Benzalkonium Chloride Solution 0.01% w/w IP, In Pleasant Flavoured\nBase- qs.', '10 gm', 'ointment', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(138, 'Vitaroj', 'Multivitamin & Multiminerals softgels', '10x3x10', 'capsule', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(139, 'Vomigo Inj.', 'Each ml contains : Ondansetron IP 2mg', '10 ml', 'Injection', '2021-01-18 11:56:21', NULL, NULL, NULL, NULL),
(140, 'Vomigo Inj.', 'Each ml contains : Ondansetron IP 2mg', '2 ml', 'Injection', '2021-01-18 12:28:57', 'generic', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `canonical` varchar(200) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`id`, `title`, `description`, `keyword`, `canonical`, `updated_at`, `created_at`) VALUES
(1, 'hello', 'summer is good for work', 'sahitya smart class', 'www. im sahtiya karn', '2020-12-15 11:49:44', '2020-12-15 11:49:44'),
(2, 'this is my page', 'i am sahitya karn', 'this is my compter', 'wwww.sahtiya.com', '', ''),
(4, 'ind-swift | Home', 'coder is the best', 'for medician', 'www.ind-swift.com', '2020-12-15 12:38:30', '2020-12-15 12:38:30'),
(18, 'myfile', 'hello', 'this', 'www.abc.com', '2021-03-15 08:24:48', '2021-03-15 08:24:48'),
(20, 'a', 'b', 'c', 'd', '2021-03-15 09:00:51', '2021-03-15 09:00:51'),
(21, 'hello', 'summer is good for work', 'sahitya smart class', 'www.ind-swift.com', '2021-03-15 09:02:36', '2021-03-15 09:02:36'),
(22, 'a', 'a', 'c', 'c', '2021-03-15 09:16:21', '2021-03-15 09:16:21'),
(23, 'j', 'j', 'j', 'j', '2021-03-15 09:17:17', '2021-03-15 09:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `id` int(11) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `upload_file` varchar(500) DEFAULT NULL,
  `year` varchar(250) NOT NULL,
  `investor_name` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`id`, `file_name`, `upload_file`, `year`, `investor_name`, `created_at`) VALUES
(1, 'AGM-Notice', 'AGM-Notice.pdf', '2021', 'agm', '2021-02-02 11:48:10'),
(2, 'Notice_EGM', 'Notice_EGM.PDF', '2021', 'egm', '2021-02-02 11:48:49'),
(3, 'Related Party Transactions (As on 31-03-2019)', '31-03-2019.pdf', '2019', 'related_party_transactions', '2021-01-28 11:14:33'),
(6, 'Voting Result AGM 2016', 'Voting-results-AGM-2016.pdf', '2016', 'voting_results', '2021-01-28 11:19:52'),
(7, 'Insider-Trading-Code', 'Insider-Trading-Code.pdf', '2021', 'insider_trading_code', '2021-02-03 06:48:13'),
(8, 'AGM Transcript 30.09.2020', 'AGM-Transcript-30-09-2020.pdf', '2020', 'general_meeting_transcripts', '2021-01-28 11:21:23'),
(10, 'Credit_Rating', 'Credit_Rating.pdf', '2021', 'credit_rating', '2021-02-02 11:48:03'),
(20, 'Unclaimed Dividends', 'Unclaimed Dividends2005.pdf', '2005', 'unclaimed_dividends', '2021-02-02 11:55:37'),
(27, 'annual report', 'Voting-results-AGM-2016.pdf', '2016', 'annual_reports', '2021-01-28 11:19:52'),
(28, 'Unclaimed Dividends', 'Unclaimed Dividends2005.pdf', '2005', 'unclaimed_deposits', '2021-02-02 11:55:37'),
(29, 'Boad meetings', '', '2016', 'board_meetings', '2021-01-28 11:19:52'),
(30, 'Transfer of share to iepf', '', '', 'transfer_of_share_to_iepf', '2021-02-05 07:52:32'),
(31, 'annexure_1st_to_12th_of_petitions', NULL, '', 'annexure_1st_to_12th_of_petitions', '2021-02-03 08:17:05'),
(32, 'annexure_13st_list_of_depositors', NULL, '', 'annexure_13th_list_of_depositors', '2021-02-05 08:24:05'),
(33, 'annexure_14th_to_16th_of_petitions', NULL, '', 'annexure_14th_to_16th_of_petitions', '2021-02-03 08:17:27'),
(34, 'policies_on_meteriatity_of_events', NULL, '', 'policies_on_meteriatity_of_events', '2021-02-03 08:24:56'),
(35, 'policies_on_preservations_of_documents', NULL, '', 'policies_on_preservations_of_documents', '2021-02-03 08:24:56'),
(36, 'code_of_fair_disclosure', NULL, '', 'code_of_fair_disclosure', '2021-02-03 08:25:52'),
(37, 't_and_c_of_appointment', NULL, '', 't_and_c_of_appointment', '2021-02-03 08:25:52'),
(38, 'party_transcation_policies', NULL, '', 'party_transcation_policies', '2021-02-03 08:26:36'),
(39, 'risk_management_policies', NULL, '', 'risk_management_policies', '2021-02-03 08:26:36'),
(40, 'metrails_subsidiary', NULL, '', 'metrails_subsidiary', '2021-02-03 08:27:34'),
(42, 'familiarization_programme', NULL, '', 'familiarization_programme', '2021-02-03 08:29:06'),
(43, 'whistle_blower_policies', NULL, '', 'whistle_blower_policies', '2021-02-03 08:29:06'),
(44, 'compostion_of_committees', NULL, '', 'compostion_of_committees', '2021-02-03 08:30:40'),
(45, 'Quarter 1', 'Quarter 1.pdf', '2003-04', 'quaterly_results', '2021-02-04 08:22:06'),
(46, 'Quarter 2', 'Quarter 2.pdf', '2003-04', 'quaterly_results', '2021-02-04 08:22:06'),
(47, 'Quarter 3', 'Quarter 3.pdf', '2003-04', 'quaterly_results', '2021-02-04 08:22:06'),
(48, 'Quarter 4', 'Quarter 4.pdf', '2003-04', 'quaterly_results', '2021-02-04 08:22:06'),
(49, 'Quarter 1', 'Quarter 1.pdf', '2004-05', 'quaterly_results', '2021-02-04 08:22:06'),
(50, 'Quarter 2', 'Quarter 2.pdf', '2004-05', 'quaterly_results', '2021-02-04 08:22:06'),
(51, 'Quarter 3', 'Quarter 3.pdf', '2004-05', 'quaterly_results', '2021-02-04 08:22:06'),
(52, 'Quarter 4', 'Quarter 4.pdf', '2004-05', 'quaterly_results', '2021-02-04 08:22:06'),
(53, 'Quarter 1', 'Quarter 1.pdf', '2005-06', 'quaterly_results', '2021-02-04 08:22:06'),
(54, 'Quarter 2', 'Quarter 2.pdf', '2005-06', 'quaterly_results', '2021-02-04 08:22:06'),
(55, 'Quarter 3', 'Quarter 3.pdf', '2005-06', 'quaterly_results', '2021-02-04 08:22:06'),
(56, 'Quarter 4', 'Quarter 4.pdf', '2005-06', 'quaterly_results', '2021-02-04 08:22:06'),
(57, 'Quarter 1', 'Quarter 1.pdf', '2006-07', 'quaterly_results', '2021-02-04 08:22:06'),
(58, 'Quarter 2', 'Quarter 2.pdf', '2006-07', 'quaterly_results', '2021-02-04 08:22:06'),
(59, 'Quarter 3', 'Quarter 3.pdf', '2006-07', 'quaterly_results', '2021-02-04 08:22:06'),
(60, 'Quarter 4', 'Quarter 4.pdf', '2006-07', 'quaterly_results', '2021-02-04 08:22:06'),
(61, 'annual report', 'Voting-results-AGM-2016.pdf', '2016', 'annual_reports', '2021-01-28 11:19:52'),
(62, 'annual report', 'Voting-results-AGM-2016.pdf', '2016', 'annual_reports', '2021-01-28 11:19:52'),
(63, 'annual report', 'Voting-results-AGM-2016.pdf', '2016', 'annual_reports', '2021-01-28 11:19:52'),
(64, 'isl_nclt_petitions', 'isl_nclt_petitions.pdf', '2001', 'isl_nclt_petitions', '2021-02-04 11:48:14'),
(65, 'advertisments', 'advertisments.jpg', '2021', 'advertisments', '2021-02-05 07:42:23'),
(66, 'share_holding_patterns-1', 'share_holding_patterns-1.pdf', '2004', 'share_holding_patterns', '2021-02-05 07:56:17'),
(67, 'share_holding_patterns-1', 'share_holding_patterns-1.pdf', '2005', 'share_holding_patterns', '2021-02-05 07:56:17'),
(68, 'share_holding_patterns-2', 'share_holding_patterns-2.pdf', '2005', 'share_holding_patterns', '2021-02-05 07:56:17'),
(69, 'share_holding_patterns-3', 'share_holding_patterns-3.pdf', '2005', 'share_holding_patterns', '2021-02-05 07:56:17'),
(83, 'related party tran', 'related party tran2021.pdf', '2021', 'related_party_transactions', '2021-02-18 10:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturings`
--

CREATE TABLE `manufacturings` (
  `id` int(11) NOT NULL DEFAULT 0,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL DEFAULT 0,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_12_14_104959_create_sessions_table', 1),
(9, '2020_12_22_105953_create_abouts_table', 2),
(10, '2020_12_22_111710_create_aboutuss_table', 3),
(11, '2020_12_22_113025_update_aboutuss_table', 4),
(12, '2020_12_22_113504_add_rate_to_aboutuss_table', 4),
(13, '2021_01_06_101152_create_enquirys_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qualitys`
--

CREATE TABLE `qualitys` (
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HZJ2fndjkydK7y7Us0fEJxis7fxHus9NMBL9uTZq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiakJxWjYyQ3ZaUUc2RlllaVZWMlZrakFCRlFRVVU5YVp1Q1ZLbFpZQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkYVcyZWUxN0FySU1mdjdUNXNERXRaZVFwQS5yL0VnTThYT2hXSnozU3ZJLkhCYXhqNW1hMHkiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGFXMmVlMTdBcklNZnY3VDVzREV0WmVRcEEuci9FZ004WE9oV0p6M1N2SS5IQmF4ajVtYTB5Ijt9', 1615797826),
('njPa772ZjwCaQlYvtjSCVP0VgnreoUrmkQ8k9T7V', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQk9tbWdZVHd2aG5BNW9Qc2VaMUF2Q2xOcmFETmpxellSZVhNcEx2cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9ob21lZWRpdC8yMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRxSlNSRXluZkVyS1l1WkYvQmNDdmF1eG42Z3lpLnFTLlhDVDFwL2wxL0VzN2o3bUVORVdQUyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkcUpTUkV5bmZFcktZdVpGL0JjQ3ZhdXhuNmd5aS5xUy5YQ1QxcC9sMS9FczdqN21FTkVXUFMiO30=', 1615802329);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'sahitya\'s Team', 1, '2020-12-15 04:14:02', '2020-12-15 04:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'info@indswift.com', 'info@indswift.com', NULL, '$2y$10$qJSREynfErKYuZF/BcCvauxn6gyi.qS.XCT1p/l1/Es7j7mENEWPS', NULL, NULL, NULL, 1, NULL, '2021-03-15 03:15:15', '2021-03-15 03:15:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boardofdirectors`
--
ALTER TABLE `boardofdirectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chairmans`
--
ALTER TABLE `chairmans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquirys`
--
ALTER TABLE `enquirys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genericproducts`
--
ALTER TABLE `genericproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `qualitys`
--
ALTER TABLE `qualitys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `boardofdirectors`
--
ALTER TABLE `boardofdirectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chairmans`
--
ALTER TABLE `chairmans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquirys`
--
ALTER TABLE `enquirys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genericproducts`
--
ALTER TABLE `genericproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qualitys`
--
ALTER TABLE `qualitys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
