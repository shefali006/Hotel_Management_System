SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'Shefali', 'Shefali'),
(2, 'admin', 'admin');




CREATE TABLE `feedback` (
  `name` varchar(30) DEFAULT NULL,
  `feedback` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `feedback` ( `name`, `feedback`) VALUES
('yash', 'good'),
('harsh', 'excellent');



CREATE TABLE `dining` (
  `User_Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Table_name` varchar(20) NOT NULL,
  `Guest` tinyint(4) NOT NULL,
  `Event_date` date NOT NULL,
  `Event_time` time NOT NULL,
  `Request` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `dining` (`User_Id`,`Name`, `Table_name`, `Guest`, `Event_date`, `Event_time`, `Request`) VALUES
(12,'Shefali Chaudhary', 'BreakFast Times', 5, '2022-07-08', '18:30:00', 'no');

CREATE TABLE `event_book` (
  `User_Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Hall_name` varchar(30) NOT NULL,
  `Event_name` text NOT NULL,
  `Guest` tinyint(4) NOT NULL,
  `Event_date` text NOT NULL,
  `Start_time` time NOT NULL,
  `End_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `event_book` (`User_Id`, `Name`,`Hall_name`, `Event_name`, `Guest`, `Event_date`, `Start_time`, `End_time`) VALUES
(12,'Shefali Chaudhary', 'Banquet Hall', 'Festivities', 200, '15/7/2022', '16:00:00', '12:00:00'),
(12, 'Shefali Chaudhary', 'Banquet Hall', 'Festivities', 200, '15/7/2022', '16:00:00', '12:00:00');

CREATE TABLE `registration` (
  `User_Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Mob_no` bigint(12) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Age` int(11) NOT NULL,
  `Country` varchar(5) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Locality` varchar(20) NOT NULL,
  `Birth_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `registration` (`User_Id`, `Name`, `Gender`, `Mob_no`, `Email`, `Password`, `Age`, `Country`, `State`, `City`, `Locality`, `Birth_date`) VALUES
(12, 'Shefali Chaudhary', 'Female', 1234567809, 'abc@gmail.com', 'Shefali01@', 22, 'India', 'jharkhand', 'ghatsila', 'new colony', '05-06-2001');


CREATE TABLE `room_book` (
  `User_Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Room_name` varchar(30) NOT NULL,
  `Arrival` text NOT NULL,
  `Departure` text NOT NULL,
  `Rooms` tinyint(4) NOT NULL,
  `Adults` tinyint(4) NOT NULL,
  `Children` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `room_book` (`User_Id`,`Name`, `Room_name`, `Arrival`, `Departure`, `Rooms`, `Adults`, `Children`) VALUES
(12,'Shefali', 'Double Room', '0000-00-00', '0000-00-00', 1,2 , 1),
(12,'Yash', 'Double Room', '0000-00-00', '0000-00-00', 1,2 , 1),
(13,'Bishnu', 'Single Room', '2022-07-18','2022-07-21',2,4,2);


ALTER TABLE `registration`
  ADD PRIMARY KEY (`User_Id`),
  ADD UNIQUE KEY `Email` (`Email`);


ALTER TABLE `registration`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;



