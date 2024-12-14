-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 04:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `empid` varchar(10) NOT NULL,
  `empname` varchar(10) NOT NULL,
  `actiontype` varchar(10) NOT NULL,
  `actiondate` varchar(10) NOT NULL,
  `reason` varchar(10) NOT NULL,
  `comments` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`empid`, `empname`, `actiontype`, `actiondate`, `reason`, `comments`) VALUES
('EMP-5', 'praveen', 'normal', '2024-08-26', 'fight', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appid` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `todaydate` date NOT NULL,
  `phone` varchar(10) NOT NULL,
  `appdate` date NOT NULL,
  `time` time(6) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `docid` varchar(10) NOT NULL,
  `docname` varchar(100) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `roomno` varchar(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `reasonforvisit` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appid`, `id`, `name`, `todaydate`, `phone`, `appdate`, `time`, `duration`, `docid`, `docname`, `speciality`, `location`, `roomno`, `type`, `reasonforvisit`, `status`) VALUES
('AID-7', 'PID-12', 'Anand', '2024-08-25', '9894820383', '2024-08-28', '13:00:00.000000', '1', '10', 'kumar', '', 'thoothukudi', '3', 'followup', 'sick', 'Approvedfor'),
('AID-7', 'PID-12', 'Anand', '2024-08-25', '9894820383', '2024-08-28', '13:00:00.000000', '1', '10', 'kumar', '', 'thoothukudi', '3', 'followup', 'sick', 'Approvedfor'),
('AID-5', 'PID-12', 'Anand', '0000-00-00', '9894820383', '0000-00-00', '00:00:00.000000', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` varchar(10) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `category` varchar(10) NOT NULL,
  `hiredate` date NOT NULL,
  `empgender` varchar(10) NOT NULL,
  `martialstatus` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `emergencycontact` varchar(20) NOT NULL,
  `emergencyname` varchar(20) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `jobdesc` varchar(100) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `schedule` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `salaryamt` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `degreegrade` varchar(20) NOT NULL,
  `passout` varchar(20) NOT NULL,
  `wrkexp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `empname`, `jobtitle`, `dept`, `category`, `hiredate`, `empgender`, `martialstatus`, `address`, `phone`, `email`, `emergencycontact`, `emergencyname`, `relationship`, `code`, `jobdesc`, `shift`, `schedule`, `grade`, `salaryamt`, `degree`, `degreegrade`, `passout`, `wrkexp`) VALUES
('EMP-21', 'Tharun', 'Doctor', 'dermotology', 'doctor', '2021-12-01', 'male', 'married', '1', '9894820383', 'ANAND@0383', '789', 'Anand', 'wife', '', '', '', '', '', '', '', '', '', ''),
('EMP-23', 'anand', 'lab', 'select', 'select', '0000-00-00', '', 'select', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('EMP-24', 'anand', 'lab techician', 'cardiology', 'labname', '2024-08-31', 'male', 'Unmarried', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `sno` int(100) NOT NULL,
  `expid` varchar(12) NOT NULL,
  `expdate` date NOT NULL,
  `exptype` varchar(100) NOT NULL,
  `expcategory` varchar(100) NOT NULL,
  `expdesc` varchar(100) NOT NULL,
  `expamount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`sno`, `expid`, `expdate`, `exptype`, `expcategory`, `expdesc`, `expamount`) VALUES
(1, 'EID-1', '2024-08-23', 'snacks', 'adminblock', 'for food suplies', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceno` varchar(100) NOT NULL,
  `invoicedate` date NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pcontact` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceno`, `invoicedate`, `pname`, `pcontact`, `id`, `name`, `gender`, `phone`) VALUES
('INV-51', '2024-09-03', 'laxmi Pharmacy', '6789909876', 'PID-45', 'rahul', 'male', '920022300202'),
('INV-51', '2024-09-03', 'laxmi Pharmacy', '6789909876', 'PID-45', 'rahul', 'male', '920022300202');

-- --------------------------------------------------------

--
-- Table structure for table `invoicetable`
--

CREATE TABLE `invoicetable` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoiceno` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `batchno` varchar(100) NOT NULL,
  `avblqty` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `unitprice` varchar(100) NOT NULL,
  `expdate` date DEFAULT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoicetable`
--

INSERT INTO `invoicetable` (`id`, `name`, `phone`, `invoicedate`, `invoiceno`, `mname`, `batchno`, `avblqty`, `quantity`, `unitprice`, `expdate`, `total`) VALUES
('PID-45', 'rahul', '920022300202', '2024-09-03', 'INV-51', 'parasetamal', '1', '1000', '1000', '3', '1998-10-10', '3000.00'),
('PID-45', 'rahul', '920022300202', '2024-09-03', 'INV-51', 'Array', 'Array', 'Array', 'Array', 'Array', '0000-00-00', 'Array'),
('PID-45', 'rahul', '920022300202', '2024-09-03', 'INV-51', 'Array', 'Array', 'Array', 'Array', 'Array', '0000-00-00', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `labdetails`
--

CREATE TABLE `labdetails` (
  `id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `testid` varchar(100) NOT NULL,
  `testname` varchar(10) NOT NULL,
  `empid` varchar(100) NOT NULL,
  `empname` varchar(10) NOT NULL,
  `testtype` varchar(100) NOT NULL,
  `testdesc` varchar(100) NOT NULL,
  `testprice` varchar(10) NOT NULL,
  `sampleid` varchar(10) NOT NULL,
  `sampletype` varchar(100) NOT NULL,
  `cdate` date NOT NULL,
  `receiveddate` date NOT NULL,
  `samplestatus` varchar(100) NOT NULL,
  `resultid` varchar(10) NOT NULL,
  `result` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `range` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labdetails`
--

INSERT INTO `labdetails` (`id`, `name`, `testid`, `testname`, `empid`, `empname`, `testtype`, `testdesc`, `testprice`, `sampleid`, `sampletype`, `cdate`, `receiveddate`, `samplestatus`, `resultid`, `result`, `unit`, `disease`, `range`) VALUES
('', '', 'TEST-1', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
('PID-12', 'Anand', 'TEST-2', '', 'EMP-5', 'praveen', '', 'test-1 for', '500', 'SAM-3', 'urine', '2024-08-26', '2024-08-26', 'collected', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `leaveandtimeoff`
--

CREATE TABLE `leaveandtimeoff` (
  `empid` varchar(10) NOT NULL,
  `empname` varchar(10) NOT NULL,
  `leavetype` varchar(10) NOT NULL,
  `totalleave` varchar(10) NOT NULL,
  `leaveduration` varchar(10) NOT NULL,
  `leavebalance` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaveandtimeoff`
--

INSERT INTO `leaveandtimeoff` (`empid`, `empname`, `leavetype`, `totalleave`, `leaveduration`, `leavebalance`) VALUES
('EMP-5', 'praveen', 'sick', '90', '1', '89');

-- --------------------------------------------------------

--
-- Table structure for table `maintainence`
--

CREATE TABLE `maintainence` (
  `sno` int(190) NOT NULL,
  `maintainencetype` varchar(20) NOT NULL,
  `maintainenceprovider` varchar(20) NOT NULL,
  `workorderno` varchar(20) NOT NULL,
  `workorderdate` date NOT NULL,
  `workorderdesc` varchar(20) NOT NULL,
  `workordercost` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintainence`
--

INSERT INTO `maintainence` (`sno`, `maintainencetype`, `maintainenceprovider`, `workorderno`, `workorderdate`, `workorderdesc`, `workordercost`) VALUES
(1, 'labmachine', 'anand', '100', '2024-08-08', 'repair work fault ma', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `medicalstock`
--

CREATE TABLE `medicalstock` (
  `sno` int(20) NOT NULL,
  `did` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `mtype` varchar(100) NOT NULL,
  `expdate` date NOT NULL,
  `batchno` varchar(100) NOT NULL,
  `unitprice` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `avblstock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patientrecords`
--

CREATE TABLE `patientrecords` (
  `id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `martialstatus` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mcondition` varchar(100) NOT NULL,
  `allergies` varchar(100) NOT NULL,
  `previoussurgery` varchar(100) NOT NULL,
  `typeofsurgery` varchar(100) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `pressure` varchar(10) NOT NULL,
  `temp` varchar(10) NOT NULL,
  `pulse` varchar(10) NOT NULL,
  `testtype` varchar(20) NOT NULL,
  `result` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `prange` varchar(100) NOT NULL,
  `empid` varchar(100) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `resultdate` date NOT NULL,
  `reporttype` varchar(10) NOT NULL,
  `result1` varchar(10) NOT NULL,
  `uploaddate` date NOT NULL,
  `policyno` varchar(10) NOT NULL,
  `provider` varchar(10) NOT NULL,
  `uploadreport` varchar(10) NOT NULL,
  `billingstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientrecords`
--

INSERT INTO `patientrecords` (`id`, `name`, `dob`, `gender`, `martialstatus`, `occupation`, `phone`, `mcondition`, `allergies`, `previoussurgery`, `typeofsurgery`, `height`, `weight`, `pressure`, `temp`, `pulse`, `testtype`, `result`, `unit`, `prange`, `empid`, `empname`, `resultdate`, `reporttype`, `result1`, `uploaddate`, `policyno`, `provider`, `uploadreport`, `billingstatus`) VALUES
('PID-12', 'Anand', '2024-08-01', 'male', 'unmarried', 'driver', '9894820383', '', '', '', '', '5', '67', '78', '98', 'normal', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', ''),
('PID-12', 'Anand', '2024-08-03', 'male', 'unmarried', 'driver', '9894820383', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', ''),
('PID-45', 'rahul', '2024-08-06', 'male', 'married', 'driver', '920022300202', '', 'sick problem', 'no', 'endoscopy', '10', '10', '10', '10', 'low', 'blood', 'positive', '10', 'normal', 'EMP-21', 'Tharun', '2024-08-31', '1', '1', '0000-00-00', '1', '1', 'name', '1'),
('PID-45', 'rahul', '2024-08-08', 'male', 'select', 'driver', '920022300202', '', 'sick problem', 'no', 'endoscopy', '10', '10', '10', '10', 'low', 'blood', 'positive', '10', 'normal', 'EMP-21', 'Tharun', '2024-08-31', '1', '1', '0000-00-00', '1', '1', 'name', '1'),
('PID-45', 'rahul', '2024-08-02', 'male', 'married', 'driver', '920022300202', '', 'sick problem', 'no', 'endoscopy', '10', '10', '10', '10', 'low', 'blood', 'positive', '10', 'normal', 'EMP-21', 'Tharun', '2024-08-31', '1', '1', '0000-00-00', '1', '1', 'name', '1');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `empid` varchar(10) NOT NULL,
  `empname` varchar(10) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `paydate` date NOT NULL,
  `frequency` varchar(10) NOT NULL,
  `paymentstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`empid`, `empname`, `rate`, `paydate`, `frequency`, `paymentstatus`) VALUES
('EMP-5', 'praveen', '50000', '2024-08-26', '01', 'netbanking');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `sno` int(100) NOT NULL,
  `did` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `mtype` varchar(100) NOT NULL,
  `expdate` date NOT NULL,
  `batchno` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `unitprice` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `avblqty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`sno`, `did`, `dname`, `mname`, `mtype`, `expdate`, `batchno`, `quantity`, `unitprice`, `total`, `avblqty`) VALUES
(4, 'DEALER-18', 'Mahesh', 'parasetamal', 'tablet', '1998-10-10', '1', '1000', '3', '3000', '1000'),
(5, 'DEALER-20', 'Mahesh', 'parasetamal', 'tablet', '2045-10-10', '1', '20000', '3', '60000', '21000'),
(6, 'DEALER-22', 'Mahesh', 'gelsil', 'syrub', '1998-10-10', '2', '1000', '10', '10000', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `inorout` varchar(50) NOT NULL,
  `fee` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `doorno` varchar(50) NOT NULL,
  `area` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `aadharno` varchar(20) NOT NULL,
  `marks` varchar(100) NOT NULL,
  `martialstatus` varchar(20) NOT NULL,
  `recordno` varchar(20) NOT NULL,
  `allergies` varchar(50) NOT NULL,
  `illness` varchar(50) NOT NULL,
  `ptreatment` varchar(50) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `policyno` varchar(100) NOT NULL,
  `groupno` varchar(10) NOT NULL,
  `effectivedate` date NOT NULL,
  `expirydate` date NOT NULL,
  `coverage` varchar(50) NOT NULL,
  `emergencyname` varchar(70) NOT NULL,
  `emergencyno` varchar(20) NOT NULL,
  `emergencyaddress` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `dob`, `gender`, `inorout`, `fee`, `email`, `phone`, `doorno`, `area`, `state`, `district`, `pincode`, `aadharno`, `marks`, `martialstatus`, `recordno`, `allergies`, `illness`, `ptreatment`, `bloodgroup`, `provider`, `policyno`, `groupno`, `effectivedate`, `expirydate`, `coverage`, `emergencyname`, `emergencyno`, `emergencyaddress`, `relationship`) VALUES
('PID-2', 'paramasivam', '1998-11-02', 'male', 'out', 'Rs 500', 'paramasivam@123', '9894820393', '28', 'kvk nagar', 'tuticorin', 'tamilnadu', '628002', '2342526272822978', 'MOLE ON RIGHT CHEST', 'married', 'MRN-3', 'sick problem', 'fever', 'no', 'Anegative', 'bajabj', '292982', '28202', '1198-01-01', '2030-10-10', 'health', '', '', '', ''),
('PID-45', 'rahul', '2024-08-06', 'male', 'out', 'Rs 500', 'Rahul@123', '920022300202', '89', 'KAMARAJ', 'tamilnadu', 'tuticorin', '628002', '2342526272822978', 'MOLE ON RIGHT CHEST', 'married', 'MRN-5', 'sick problem', 'fever', 'no', 'Apositive', 'muthoor', '390', '390', '1998-01-01', '2030-01-01', 'health', 'aravind', '67', 'thoothukudi', 'wife'),
('PID-46', 'harshanth', '2024-08-31', 'male', 'in', 'Rs 500', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `surgerydetails`
--

CREATE TABLE `surgerydetails` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surgeryid` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `surgerydate` date NOT NULL,
  `surgerytype` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `surgerytime` time(4) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `docid` varchar(10) NOT NULL,
  `docname` varchar(20) NOT NULL,
  `nurseid` varchar(20) NOT NULL,
  `nursename` varchar(20) NOT NULL,
  `orno` varchar(20) NOT NULL,
  `ortype` varchar(20) NOT NULL,
  `outcome` varchar(20) NOT NULL,
  `complication` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surgerydetails`
--

INSERT INTO `surgerydetails` (`id`, `name`, `surgeryid`, `age`, `surgerydate`, `surgerytype`, `gender`, `surgerytime`, `duration`, `docid`, `docname`, `nurseid`, `nursename`, `orno`, `ortype`, `outcome`, `complication`) VALUES
('PID-12', 'Anand', 'SUR-4', '26', '0000-00-00', '', 'on', '02:30:00.0000', '1', '01', '', '01', 'hkala', '90', 'scissor', 'nothing', 'none'),
('PID-12', 'Anand', 'SUR-4', '26', '0000-00-00', '', 'on', '02:30:00.0000', '1', '01', '', '01', 'hkala', '90', 'scissor', 'nothing', 'none'),
('PID-12', 'Anand', 'SUR-4', '26', '0000-00-00', '', 'on', '02:30:00.0000', '1', '01', '', '01', 'hkala', '90', 'scissor', 'nothing', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `utility`
--

CREATE TABLE `utility` (
  `sno` int(100) NOT NULL,
  `utilitytype` varchar(20) NOT NULL,
  `utilityprovider` varchar(20) NOT NULL,
  `accno` varchar(20) NOT NULL,
  `billingcycle` varchar(20) NOT NULL,
  `billingdate` date NOT NULL,
  `billingamount` varchar(20) NOT NULL,
  `paymentdate` date NOT NULL,
  `paymentamount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utility`
--

INSERT INTO `utility` (`sno`, `utilitytype`, `utilityprovider`, `accno`, `billingcycle`, `billingdate`, `billingamount`, `paymentdate`, `paymentamount`) VALUES
(1, 'water', 'arumugam', '12345689', 'weekly', '2024-08-26', '1000', '2024-08-26', '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `maintainence`
--
ALTER TABLE `maintainence`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`,`name`);

--
-- Indexes for table `utility`
--
ALTER TABLE `utility`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maintainence`
--
ALTER TABLE `maintainence`
  MODIFY `sno` int(190) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `utility`
--
ALTER TABLE `utility`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
