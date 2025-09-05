<?php


return [

    "

CREATE TABLE `our_team` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `avatar` varchar(191) NOT NULL,
  `position` varchar(191) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT '0',
  `is_active` tinyint(5) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `our_team`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

    "


];