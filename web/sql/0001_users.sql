
CREATE TABLE `users` (
                         `id` int(11) UNSIGNED NOT NULL,
                         `email` varchar(50) DEFAULT NULL,
                         `fullName` varchar(100) DEFAULT NULL,
                         `gender` varchar(20) NOT NULL,
                         `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `email`, `fullName`, `gender`, `status`) VALUES
                                                                        (1, 'john@gmail.com', 'John Luis', 'male', 'active'),
                                                                        (2, 'stevejobs@gmail.com', 'Steve Jobs', 'male', 'inactive'),
                                                                        (3, 'katejeferson@yandex.com', 'Kate Jeferson', 'Male', 'Active'),
                                                                        (56, 'ivanovpavel@gmail.com', 'Павел ', 'Male', 'Inactive'),
                                                                        (71, 'zuzunpavel@gmail.com', 'Павел Зюзюн', 'Male', 'Active');

ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
    MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

