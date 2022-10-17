CREATE TABLE `users` (
  `user_id` int,
  `role_id` int,
  `name` varchar(255),
  `email` varchar(255),
  `nid` numeric,
  `contact_no` numeric,
  `password` varchar(255)
);

CREATE TABLE `roles` (
  `role_id` int,
  `role_name` varchar(255),
  `is_active` boolean
);

CREATE TABLE `userDetails` (
  `user_details_id` int,
  `user_id` int,
  `gender` varchar(255),
  `dob` date,
  `address` varchar(255),
  `occupation` varchar(255)
);

CREATE TABLE `homes` (
  `home_id` int,
  `user_id` int,
  `location_id` int,
  `is_available` varchar(255)
);

CREATE TABLE `flats` (
  `flat_id` int,
  `home_id` int,
  `flat_images` varchar(255),
  `is_available` varchar(255)
);

CREATE TABLE `flat_details` (
  `flat_details_id` int,
  `flat_id` int,
  `floor` varchar(255),
  `flat_no` varchar(255),
  `available_from` datetime,
  `price` numeric,
  `bedroom_no` numeric,
  `kitchen_no` numeric,
  `bathroom_no` numeric,
  `dining_room_no` numeric,
  `short_description` text
);

CREATE TABLE `locations` (
  `location_id` int,
  `district` varchar(255),
  `thana` varchar(255),
  `ward` varchar(255),
  `road_no` varchar(255),
  `house` varchar(255)
);

CREATE TABLE `posts` (
  `post_id` int,
  `user_id` int,
  `flat_id` int,
  `short_description` varchar(255),
  `is_active` boolean
);

CREATE TABLE `booking` (
  `booking_id` int,
  `user_id` int,
  `payment_id` int,
  `flat_id` int,
  `booking_date` datetime,
  `duration` varchar(255),
  `no_of_guest` numeric,
  `payment_type` varchar(255)
);

CREATE TABLE `payments` (
  `payment_id` int,
  `user_id` int,
  `payment_method` varchar(255)
);

ALTER TABLE `flat_details` ADD FOREIGN KEY (`flat_id`) REFERENCES `flats` (`flat_id`);

ALTER TABLE `flats` ADD FOREIGN KEY (`home_id`) REFERENCES `homes` (`home_id`);

ALTER TABLE `locations` ADD FOREIGN KEY (`location_id`) REFERENCES `homes` (`location_id`);

ALTER TABLE `homes` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `posts` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `flats` ADD FOREIGN KEY (`flat_id`) REFERENCES `posts` (`flat_id`);

ALTER TABLE `users` ADD FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

ALTER TABLE `users` ADD FOREIGN KEY (`user_id`) REFERENCES `booking` (`user_id`);

ALTER TABLE `flats` ADD FOREIGN KEY (`flat_id`) REFERENCES `booking` (`flat_id`);

ALTER TABLE `booking` ADD FOREIGN KEY (`payment_id`) REFERENCES `payments` (`payment_id`);

ALTER TABLE `users` ADD FOREIGN KEY (`user_id`) REFERENCES `userDetails` (`user_id`);
