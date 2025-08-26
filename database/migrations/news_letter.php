<?php


return [

    "

CREATE TABLE `news_letter` (
  `id` bigint(20) NOT NULL,
  `email` varchar(191) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

    "


];