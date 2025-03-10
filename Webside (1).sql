CREATE TABLE `Users` (
  `uid` INT AUTO_INCREMENT PRIMARY KEY,
  `user_name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) UNIQUE NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(20),
  `gender` VARCHAR(10),
  `date_of_birth` DATE,
  `image` VARCHAR(255)
);

CREATE TABLE `Events` (
  `eid` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `category` VARCHAR(255),
  `event_date` DATE,
  `start_time` TIME,
  `image` VARCHAR(255), 
  `created_by` INT NOT NULL,
  CONSTRAINT `fk_events_users` FOREIGN KEY (`created_by`) REFERENCES `Users` (`uid`) ON DELETE CASCADE
);

CREATE TABLE `enroll` (
  `pid` INT AUTO_INCREMENT PRIMARY KEY,
  `uid` INT NOT NULL,
  `eid` INT NOT NULL,
  `status` VARCHAR(50) DEFAULT 'pending',
  `feedback` VARCHAR(255),
  `rating` INT,
  `is_participated` TINYINT(1) DEFAULT 0,
  `enroll_date` DATETIME DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT `fk_enroll_users` FOREIGN KEY (`uid`) REFERENCES `Users` (`uid`) ON DELETE CASCADE,
  CONSTRAINT `fk_enroll_events` FOREIGN KEY (`eid`) REFERENCES `Events` (`eid`) ON DELETE CASCADE
);

CREATE TABLE `Images` (
  `image_id` INT AUTO_INCREMENT PRIMARY KEY,
  `image_path` VARCHAR(255) NOT NULL,
  `event_id` INT,
  `uploaded_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT `fk_images_events` FOREIGN KEY (`event_id`) REFERENCES `Events` (`eid`) ON DELETE CASCADE
);