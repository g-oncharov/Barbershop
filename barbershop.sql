SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `haircut` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `shaving` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `mustache` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `posts` (`id`, `name`, `description`, `img`, `haircut`, `shaving`, `mustache`) VALUES
(1, 'Винстон Синий', 'Как только заростаю и волосы начинают мешать видеть — бегом в Бородинский!', 'photo-4-d.jpg', 1, 0, 0),
(2, 'Владимир Иваныч', 'К зимнему сезону — готов!', 'photo-3-d.png', 0, 1, 1),
(3, 'Саша Мальцев', 'Попросил омолодить и омолодили! Кто теперь скажет, что мне 45?', 'photo-2-d.png', 1, 0, 0),
(4, 'Лжепётр Мчиславский', 'Где я только не стригся, но так как делаете это вы — не умеет никто другой! Еще раз спасибо и до скорого!', 'photo-1-d.png', 1, 1, 1);


CREATE TABLE `prices` (
  `service` varchar(100) NOT NULL,
  `cost` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `prices` (`service`, `cost`) VALUES
('beard_coloring', 2000),
('comb_beard', 1000),
('remove_gray', 2500),
('twist_a_mustache', 500),
('trim_whiskey', 500),
('polish', 500);


CREATE TABLE `records` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `beard_type` varchar(100) DEFAULT NULL,
  `cost` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `records` (`id`, `user_id`, `beard_type`, `cost`, `date`) VALUES
(5, 2, 'Адмирал', 4500, '2021-05-21 16:26:56');


CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `first-name` varchar(100) NOT NULL,
  `last-name` text NOT NULL,
  `tel` varchar(100) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `status` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `users` (`id`, `login`, `first-name`, `last-name`, `tel`, `pass`, `status`) VALUES
(1, 'admin', 'Данил', 'Гончаров', '380951373441', '$2y$10$yEYgN72VfaIVR3WKifa42eC8ONURPzBn.mnsNFGVXbmtPPSQoyMPW', 10),
(2, 'user', 'Петр', 'Петров', '380509999999', '$2y$10$.uSe65T4KNl16KjSvqDPj.Ds21a1emghGMVEKc.9VZTOvbTh2j5KW', 0);

ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
