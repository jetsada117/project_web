CREATE TABLE `Users` (
  `uid` int AUTO_INCREMENT PRIMARY KEY,
  `user_name` nvarchar(255) NOT NULL,
  `email` nvarchar(255) UNIQUE NOT NULL,
  `password` nvarchar(255) NOT NULL,
  `phone` nvarchar(20),
  `gender` nvarchar(10),
  `date_of_birth` date
);

CREATE TABLE `Events` (
  `eid` int AUTO_INCREMENT PRIMARY KEY,
  `name` nvarchar(255) NOT NULL,
  `description` TEXT,  -- ใช้ TEXT แทน nvarchar(MAX)
  `category` nvarchar(255),
  `event_date` date,
  `start_time` time,
  `image` nvarchar(255),
  `created_by` int NOT NULL,
  CONSTRAINT `fk_events_users` FOREIGN KEY (`created_by`) REFERENCES `Users` (`uid`) ON DELETE CASCADE
);

CREATE TABLE `enroll` (
  `pid` int AUTO_INCREMENT PRIMARY KEY,
  `uid` int NOT NULL,
  `eid` int NOT NULL,
  `status` nvarchar(50) DEFAULT 'pending',
  `feedback` nvarchar(255),
  `rating` int,
  `is_participated` bit DEFAULT 0,
  `enroll_date` datetime DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT `fk_enroll_users` FOREIGN KEY (`uid`) REFERENCES `Users` (`uid`) ON DELETE CASCADE,
  CONSTRAINT `fk_enroll_events` FOREIGN KEY (`eid`) REFERENCES `Events` (`eid`) ON DELETE CASCADE
);
