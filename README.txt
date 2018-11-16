THE QUINTESSENTIAL GAMER!

HOW TO RUN VIA WEB SERVER:
-first open vanilla CMD
-the type "php -S localhost:4000"
-Then when you type into browser....
"http://localhost:4000/The_quintessential_gamer/index.php"

FIX: put cave johnson picture in proper file and fix the pinter in the code

Final:
-Make sure its server side
-Database that reads and writes
-Security
  -Authentication
  -What the database needs to hide(encrypt)
  -No hard coded passwords

Presentations:
-December 2nd to the 10th
-no need for PowerPoint
-screen shots for comformation it works.




storedb code
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `storedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `review` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
 
--
-- Data is performed for table `store`
--

INSERT INTO `store` (`id`, `name`, `type`, `price`, `size`, `image`, `review`) VALUES
(1, 'Pullover', 'hoodie', 60.00, 'FITS ALL', 'images/store/hood1.jpg', 'Keeps you warm when your too busy to turn the heat on.'')'),
(2, 'Zip-up', 'Hoodie', 60.00, 'FITS ALL', 'images/store/hood2.jpg', 'Kickin it old school.'),
(3, 'Evloution', 'tshirt', 20.00, 'FITS ALL', 'images/store/tshirt1.jpg', '.'),
(4, 'No Mom', 'tshirt', 25.00, 'FITS ALL', 'images/store/tshirt2.jpg', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
