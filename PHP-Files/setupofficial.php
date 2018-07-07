<?php


$conn = new mysqli('localhost','root','mysql','DATABASEPT1') 
                        or die( '<h2>Could not connect to MySQL with mysqli</h2></body></html>');
                        
                       
$ctstudent = ("CREATE TABLE IF NOT EXISTS `STUDENT` (
  `STUDENTID` int(12) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `IMAGE` text NOT NULL,
  `DATEOFMEM` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

if ($conn->query($ctstudent) === TRUE) {
    echo " table 1 created successfully. ";
} else {
    echo "Error creating first table. " . $conn->error;
}

$valstudent = ("INSERT INTO `STUDENT` (`STUDENTID`, `NAME`, `IMAGE`, `DATEOFMEM`) VALUES
(1001, 'Jessica Smart', 'jessica-smart1.jpg', '0003-04-16'),
(1002, 'Stan Lee', 'Stan_Lee2.jpg', '0001-04-16'),
(1003, 'Paula Creamer', 'paula-creamer1.jpg', '0004-05-16'),
(1004, 'Vladimir Lenin', 'vladimir_lenin1.jpg', '0009-12-16');");

$pkstudent = ("ALTER TABLE `STUDENT`
  ADD PRIMARY KEY (`STUDENTID`);");

if ($conn->query($valstudent) === TRUE) {
    echo "table 1 populated. ";
} else {
    echo "Already imported values or error. " . $conn->error;
}


if ($conn->query($pkstudent) === TRUE) {
    echo "primary key added for table 1. ";
} else {
    echo "Error adding primary key. " . $conn->error;
}
// End of first table


$ctmember = ("CREATE TABLE IF NOT EXISTS `MEMBER` (
  `MEMBERID` int(20) NOT NULL,
  `STUDENTID` int(20) NOT NULL,
  `GROUPNAME` varchar(30) NOT NULL,
  `MEETINGQTY` varchar(20) NOT NULL,
  `MEMERSHIPCOST` smallint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

if ($conn->query($ctmember) === TRUE) {
    echo "ctmember successful. ";
} else {
    echo "Error ctmember " . $conn->error;
}
    
$valmember = ("INSERT INTO `MEMBER` (`MEMBERID`, `STUDENTID`, `GROUPNAME`, `MEETINGQTY`, `MEMERSHIPCOST`) VALUES
(1234, 1001, 'Hiking', 'FULL', 30),
(1235, 1001, 'Dancing', 'PART', 20),
(1236, 1001, 'Golf', 'SEMIMONTHLY', 12),
(1237, 1002, 'Happiness_Meeting', 'WEEKLY', 50),
(1238, 1002, 'SKIING', 'SEMI_ANNUALLY', 40),
(1239, 1002, 'GEOGRAPHY', 'WEEKLY', 0),
(1240, 1003, 'PHILOSOPHY', 'SEMI_WEEKLY', 10),
(1241, 1003, 'EXTREME_SPORTS', 'DAILY', 0),
(1242, 1003, 'MIND_BODY_CLUB', 'BI_MONTHLY', 60),
(1243, 1004, 'COMMUNISM', 'DAILY', 0),
(1244, 1004, 'MARX_HATERS_CLUB', 'BI_WEEKLY', 20),
(1245, 1004, 'LENIN_APPRECIATION_CLUB', 'SEMI_ANNUALLY', 30);");

if ($conn->query($valmember) === TRUE) {
    echo "valmember successful. ";
} else {
    echo "Error valmember " . $conn->error;
}


$pkmember = "ALTER TABLE `MEMBER`
  ADD PRIMARY KEY (`MEMBERID`),
  ADD UNIQUE KEY `MEMBERID` (`MEMBERID`);";

if ($conn->query($pkmember) === TRUE) {
    echo "pkmember successful. ";
} else {
    echo "Error pkmember " . $conn->error;
	}

$fkmember = ("ALTER TABLE `MEMBER`
  ADD CONSTRAINT `student_studentid_fk` FOREIGN KEY (`STUDENTID`) REFERENCES `STUDENT` (`STUDENTID`);");

if ($conn->query($fkmember) === TRUE) {
    echo "fkmember successful. ";
} else {
    echo "Error fkmember " . $conn->error;
}




mysqli_close($conn);

?>