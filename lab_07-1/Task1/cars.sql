
--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `yom` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `make`, `model`, `price`, `yom`) VALUES
(1, 'Holden', 'Astra', 14000, 2005),
(2, 'BMW', 'X3', 35000, 2004),
(3, 'Ford', 'Falcon', 39000, 2011),
(4, 'Toyota', 'Corolla', 20000, 2012),
(5, 'Holden', 'Commodore', 13500, 2005),
(6, 'Holden', 'Astra', 8000, 2001),
(7, 'Holden', 'Commodore', 28000, 2009),
(8, 'Ford', 'Falcon', 14000, 2007),
(9, 'Ford', 'Falcon', 7000, 2003),
(10, 'Ford', 'Laser', 10000, 2010),
(11, 'Mazda', 'RX-7', 26000, 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
