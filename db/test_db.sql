-- Create a Database Name it: `test_db`


-- Basic Setting
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Create Table
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
  `number` varchar(50) NOT NULL;
  `email` varchar(50) NOT NULL;
  `address` varchar(200) NOT NULL;
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--Set Primary key
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

