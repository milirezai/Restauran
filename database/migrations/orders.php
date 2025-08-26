<?php


return [

    "

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `product_id` varchar(191) NOT NULL,
  `price` int(20) NOT NULL DEFAULT '1',
   `order_number` int(20) NOT NULL DEFAULT '1',
  `status` tinyint(5) NOT NULL DEFAULT '0',
  `is_active` tinyint(5) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

    "


];