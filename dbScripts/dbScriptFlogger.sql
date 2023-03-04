
-- --------------------------------------------------------

--
-- Drop Tables
--

DROP TABLE IF EXISTS `tbl_item`;
DROP TABLE IF EXISTS `tbl_user`;

--
-- Table structure for table `tbl_user`
--


CREATE TABLE `tbl_user` (
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL PRIMARY KEY,
  `password` varchar(200) NOT NULL,
  `ResigtrationDate` DATE NOT NULL,
  `VerificationCode` varchar(16),
  `IsVerified` tinyint(1)
) ENGINE=InnoDB;

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `Item_Category` varchar(20) NOT NULL,
  `Item_Name` varchar(20) NOT NULL,
  `Item_Description` varchar(1000) NOT NULL,
  `Price` DOUBLE NOT NULL,
  `Owner_Email` varchar(50) NOT NULL
) ENGINE=InnoDB;

ALTER TABLE tbl_item
ADD FOREIGN KEY (Owner_Email) REFERENCES tbl_user(email);


