-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL,
  `match_lvl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`user_1`, `user_2`, `match_lvl`) VALUES
(1, 3, 2),
(1, 4, 4),
(1, 5, 1),
(1, 6, 3),
(2, 3, 4),
(2, 4, 1),
(2, 5, 3),
(2, 6, 2),
(3, 1, 1),
(3, 2, 2),
(4, 1, 2),
(4, 2, 1),
(5, 1, 1),
(5, 2, 2),
(6, 1, 2),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pic` varchar(500) NOT NULL,
  `tribe` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `match_gender` char(1) NOT NULL,
  `min_match_age` int(11) NOT NULL,
  `max_match_age` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `gender`, `age`, `city`, `profession`, `country`, `pic`, `tribe`, `education`, `religion`, `score`, `match_gender`, `min_match_age`, `max_match_age`, `distance`, `hash`) VALUES
(1, 'Ayo', 'M', 31, 'London', 'Banking', 'Nigeria', 'USER1.jpg', 'Yoruba', 'Batchelors', 'Christian', 3, 'F', 25, 35, 2, '$2a$10$/87Us.3zjBsyWX943cOeYu/fudW64DQiFe2BGrAC7shcufVk12sCG'),
(2, 'Obi', 'M', 28, 'London', 'Administration', 'Nigeria', 'USER2.jpg', 'Igbo', 'Batchelors', 'Christian', 1, 'F', 25, 30, 2, '$2a$10$zs2XSSx0..NZ2KBZkUGWNO3YGDsD/wxK40fc/log9aPv9gtWkemVi'),
(3, 'Sarah', 'F', 30, 'London', 'Solicitor', 'Ghana', 'USER3.jpg', 'Ashanti', 'Batchelors', 'Christian', 2, 'M', 25, 35, 1, '$2a$10$c0I/DZeNs0bNGfuvHVufHOCHwbFlk5zL.5Zfy72iuGSYf4LQjkbUq'),
(4, 'Chima', 'F', 24, 'London', 'Management', 'Nigeria', 'USER4.jpg', 'Igbo', 'Batchelors', 'Christian', 2, 'M', 25, 35, 1, '$2a$10$8H8jDEMTr0zi799kVzAL/.OhPUf1XD.70W.bdVZ254prh.NIGOyfO'),
(5, 'Tola', 'F', 30, 'London', 'Doctor', 'Nigeria', 'USER5.jpg', 'Yoruba', 'Doctorate', 'Christian', 2, 'M', 25, 35, 3, '$2a$10$CctkZPLXJU4f8NVgQwkkFuvpPIJvarRWyWzNcl.ieX.DCvPCz6eTu'),
(6, 'Lola', 'F', 28, 'London', 'Student', 'Nigeria', 'USER6.jpg', 'Yoruba', 'Batchelors', 'Christian', 1, 'M', 25, 35, 8, '$2a$10$cRuNHo4KKoMX6QLHvyIsE.mN0plLBkHKTE0TURrTMlfHAaICwqCoq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`user_1`,`user_2`),
  ADD KEY `user_2` (`user_2`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`user_1`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `matches_ibfk_2` FOREIGN KEY (`user_2`) REFERENCES `users` (`user_id`);
