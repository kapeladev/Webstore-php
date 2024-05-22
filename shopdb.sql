CREATE TABLE `products` (
  `id` integer PRIMARY KEY,
  `name` varchar(50),
  `image` blob,
  `markid` integer,
  `subcategory_id` integer
);

CREATE TABLE `users` (
  `id` integer PRIMARY KEY,
  `username` varchar(20),
  `password` varchar(20),
  `gmail` varchar(50),
  `created_at` timestamp
);

CREATE TABLE `category` (
  `id` integer PRIMARY KEY,
  `name` varchar(30)
);

CREATE TABLE `mark` (
  `id` integer PRIMARY KEY,
  `name` varchar(20)
);

CREATE TABLE `subcategory` (
  `id` integer PRIMARY KEY,
  `name` varchar(30),
  `category_id` int
);

ALTER TABLE `products` ADD FOREIGN KEY (`markid`) REFERENCES `mark` (`id`);

ALTER TABLE `subcategory` ADD FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

ALTER TABLE `products` ADD FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`);

