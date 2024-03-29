Table structure for table 'appointment'
--

CREATE TABLE IF NOT EXISTS 'appointment' (
  'doctor' varchar(100) NOT NULL,
  'patient' varchar(100) NOT NULL,
  'registrationNumber' int(10) NOT NULL,
  'day' varchar(10) NOT NULL,
  'time' varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

Dumping data for table 'appointment'
--

INSERT INTO `appointment` ('doctor', 'patient', 'registrationNumber', 'day', 'time') VALUES
('Dr. Rupak Das ( General Physician ) ', 'Anubhav Saxena', 120546520, 'wednesday', '10-10:30 AM');

Table structure for table 'department'
--

CREATE TABLE IF NOT EXISTS 'department' (
'id' int(11) NOT NULL,
  'name' varchar(50) NOT NULL,
  'field' varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

Dumping data for table 'department'
--

INSERT INTO 'department' ('id', 'name', 'field') VALUES
(1, 'Dr. Rupak Das', 'General Physician'),
(2, 'Dr. Gnana Haokip', 'ENT Specialist'),
(3, 'Dr. Dana Lepcha', 'Cardiologist'),
(4, 'Dr. Akash Saxena', 'Neurologist'),
(5, 'Dr. Sudha Bharti', 'Child Specialist'),
(6, 'Dr. Meena Sharma', 'General Physician'),
(7, 'Dr. Byomkesh Dutt', 'Pathologist'),
(8, 'Dr. Tara Sarkar', 'Dermatologist'),
(9, 'Dr. Bimal Chateerjee', 'Surgeon'),
(10, 'Dr. AB Kumar', 'Surgeon'),
(11, 'Dr. David Hume', 'Neurologist'),
(12, 'Dr. Ajay Yadav', 'Gynaecologist'),
(13, 'Dr. BL Sharma', 'Cardiologist'),
(14, 'Dr. TP Yadav', 'ENT Specialist'),
(15, 'Dr. Neha Gupta', 'Gastroenterologist'),
(16, 'Dr. Virat Kohli', 'Child Specialist');

Indexes for table 'department'
--
ALTER TABLE 'department'
 ADD PRIMARY KEY ('id');
 
 AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17; 
