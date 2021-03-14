-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 01:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software_engg`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(12) NOT NULL,
  `pharmacy_id` varchar(20) NOT NULL,
  `med_name` varchar(50) NOT NULL,
  `med_qty_type` varchar(50) NOT NULL,
  `med_type` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `company` varchar(100) NOT NULL,
  `chemicals` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `mfd_date` date NOT NULL DEFAULT current_timestamp(),
  `category` text NOT NULL,
  `image_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pharmacy_id`, `med_name`, `med_qty_type`, `med_type`, `price`, `company`, `chemicals`, `description`, `mfd_date`, `category`, `image_name`) VALUES
('m101', '', 'Dabur Honitus Herbal Remedy', 'bottle of 200 ml syrup', 'syrup', '98.00', 'Dabur India Ltd.', 'Tulsi (O. sanctum, Lf.), Yashti (G. glabra, Rt.), Kantakari (Solanum xanthocarpum, Pl.), Banaphsa (V. odorata, Aerial.), Shunthi (Z. officinale, Rz.), Pippali (P. longum, Fr.), Vasa (A. vasica, Lf.)', 'Tulsi act as anti-tussive.\r\nSunthi helps to relieve cough.\r\nMulethi provides relief from sore throat.\r\nHoney helps in relieving cough and throat irritation.\r\nBanapsha possesses expectorant property.', '2020-10-16', 'general_purpose', 'image1.jpg\r\n'),
('m102', '', 'Himalaya Respiratory Wellness Tulsi Syrup', 'bottle of 200 ml syrup', 'syrup', '90.00', 'Himalaya', 'Tulsi (O. sanctum, Lf.), Yashti (G. glabra, Rt.), Kantakari (Solanum xanthocarpum, Pl.), Banaphsa (V. odorata, Aerial.), Shunthi (Z. officinale, Rz.), Pippali (P. longum, Fr.), Vasa (A. vasica, Lf.)', 'Seasonal cold\r\nRecurrent respiratory infections\r\nChronic obstructive lung diseases, asthma and bronchitis (as a supportive therapy)', '2020-10-16', 'general_purpose', 'image2.jpg\r\n'),
('m104', '', 'Vicks Cough Drops Honey Flavour', 'jar of 190 lozenges', 'lozenges', '185.00', 'Procter & Gamble', ' Karpoor, Pudinah Ke Phool, Nilgiri Tel, Ajwain Ke Phool, and Flavoured Sugar', 'Works as anesthetic and cough suppressant\r\nRelieves the tingling sensation even before cough starts', '2020-10-12', 'general_purpose', 'image4.jpg'),
('m105', '', 'Calpol 650 mg tablet', 'strip of 15 tablets', 'tablets', '30.00', 'Glaxo SmithKline Pharmaceuticals Ltd', 'paracetamol', 'Calpol 500mg Tablet is a medicine used to relieve pain and to reduce fever. It is used to treat many conditions such as headache, body ache, toothache and common cold. It works by inhibiting the release of certain chemical that cause pain and fever. USES OF CALPOL TABLET\r\nPain relief\r\nFever', '2020-10-08', 'general_purpose', 'image5.jpg'),
('m106', '', 'Parachute Coconut Hair Oil', 'bottle of 600ml ', 'oil', '225.00', 'Marico Ltd', 'coconut', 'Scientifically proven to give you long & strong hair\r\nMade with the finest hand-picked coconuts\r\nExtracted from naturally sun-dried coconuts\r\nLong lasting fresh aroma\r\nEnriched with Vitamin E. Vitamin E natural anti-oxidant properties that help in maintaining hair growth', '2020-10-08', 'personal_care', 'pc1.jpg'),
('m107', '', 'Scalpe+ Expert Anti Dandruff Shampoo', 'bottle of 75ml shampoo', 'shampoo', '234.00', 'Glenmark Pharmaceuticals Ltd', 'Ketoconazole', 'Used in the treatment of dandruff related issues\r\nHelps to prevent itching, flaking and scaling\r\nUseful in preventing hair fall due to dandruff\r\nContains conditioning base that keeps the hair soft', '2020-10-01', 'personal_care', 'pc2.jpg'),
('m108', '', 'Dr. Juneja\'s Cough Rahat Ayurvedic Cough Syrup', 'bottle of 100ml syrup', 'syrup', '93.00', 'Divisa Herbal Care Pvt Ltd', 'Tulsi (O. sanctum, Lf.), Yashti (G. glabra, Rt.), Kantakari (Solanum xanthocarpum, Pl.), Banaphsa (V. odorata, Aerial.), Shunthi (Z. officinale, Rz.), Pippali (P. longum, Fr.), Vasa (A. vasica, Lf.)', 'The cough syrup is beneficial in dry cough\r\nHelps in the treatment of stuffy nose, coughs, and bronchitis\r\nUsed in breaking up the chest congestion by thinning mucous and making it easier to cough up', '2020-10-08', 'general_purpose', 'image5.png'),
('m109', '', 'Dencorub Menthol Gel', '220g of tub', 'Gel', '150.00', 'Dencorub', 'menthol, methylsalicylate (oil of evergreen), and camphor', 'It acts as a soothing pain relief gel', '2020-08-14', 'general_purpose', 'deno.jpg'),
('m110', '', 'Eucalyptus Oil', '250ml bottle', 'Essential Oil', '98.00', 'Nilgiri', 'Eucalyptus essential oil', ' Antiseptic, repellent, flavouring, fragrance', '2020-09-11', 'personal_care', 'euca.jpg'),
('m111', '', 'Dispirin Tablets', '300mg', 'Tablet', '56.00', 'Dispirin', ' Non-Steroidal Anti-Inflammatory Drugs', 'Reduction of temperature in feverishness, influenza and colds.', '2020-06-17', 'general_purpose', 'dis.jpg'),
('m112', '', 'Mucosolvan', '100ml bottle', 'syrup', '112.00', 'Mucosolvan', 'Ambroxol hydrochloride Ambroxol HCl Mucoangin Mucosolvan', 'This Pediatric Syrup helps treat cough with phlegm in children', '2020-10-01', 'general_purpose', 'muco.png'),
('m113', '', 'Dabur Almond Shampoo', '350ml', 'shampoo', '270.00', 'Dabur', 'Ketoconazole', 'This shampoo helps strengthen your hair fibres, leaving your hair healthier, softer, and shinier.', '2020-10-09', 'personal_care', 'dabsh.jpg'),
('m114', '', 'Crocin', '15 Tablets', 'Tablets', '50.00', 'GlaxoSmithKline Asia Private Limited', 'paracetamol', 'Crocin Advance is used to relief fever and mild to moderate pain', '2019-11-14', 'general_purpose', 'cro.jpg'),
('m115', '', 'Boroplus cream', '40ml bottle', 'Cream', '68.00', 'Boro Plus', 'Natural herbs and ingredients ', 'Antiseptic cream,Moisturiser,Winter protection,Natural and safe cream', '2020-10-01', 'personal_care', 'boro.jpg'),
('m116', '', 'Rely Spray', '35g Spray', 'Spray', '100.00', 'Healing Pharma ind pvt ltd', 'Relispray DR Spray contains Diclofenac, and Ayurvedic oils like wintergreen oil, clove oil, mint flower, nilgiri oil, and camphor', 'Relispray has an amazing ayurvedic formulation', '2020-05-13', 'general_purpose', 'reli.jpg'),
('m117', '', 'Glycodin Syrup', '100 ml bottle', 'syrup', '48.00', 'Alembic Ltd', 'Codeine(Fioricet With Codeine)', 'Glycodin Syrup is used to treat dry cough. It works by reducing the activity of cough center in the brain.', '2019-08-16', 'general_purpose', 'gly.jpg'),
('m118', '', 'Iodex Balm', '35gm', 'Balm', '50.00', 'GSK Consumer Healthcare INDIA', 'Gandapuro Tel, Pudina ka Phool, Nilgiri Tel, Turpine ka Tel, & Lavanga ka Tel. ', 'Iodex, a trusted pain relief brand helps provide effective relief ', '2020-04-08', 'general_purpose', 'iodex.jpg'),
('m119', '', 'Neurokind', '5 Tablets packet', 'Tablets', '150.00', 'Neurokind', 'Mecobalamin, a Vitamin B12 coenzyme', 'its used for Vitamin D defeciency', '2020-09-23', 'general_purpose', 'nuerokind.jpg'),
('m120', '', 'Dermicool', '50gm', 'Heat powder', '88.00', 'Dermicool', 'Jasat Bhasma, Tankan Amla, Vetasa, Yavanala', 'Dermicool is a long lasting cooling treatment of itching sensation, heat rash and burning sensation of the skin ', '2020-10-02', 'personal_care', 'dermi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
