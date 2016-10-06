USE cms;
####################################Pages ####################################################
CREATE TABLE pages (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
creatorId INT UNSIGNED NOT NULL,
title VARCHAR(100) NOT NULL,
content TEXT NOT NULL,
dateUpdated DATETIME DEFAULT NOW() ON UPDATE NOW(),
dateAdded DATETIME DEFAULT NOW() NOT NULL,
PRIMARY KEY (id),
INDEX (creatorId),
INDEX (dateUpdated),
FOREIGN KEY FKpages (creatorId) REFERENCES users (id)

); 

INSERT INTO pages VALUES
(NULL, 2, 'This is a post', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', NULL,
NOW()); 

SELECT username,creatorId FROM user JOIN pages ON users.id = pages.creatorId;