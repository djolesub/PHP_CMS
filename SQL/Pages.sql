USE cms;
####################################Pages ####################################################
CREATE TABLE pages (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
creatorId INT UNSIGNED NOT NULL,
title VARCHAR(100) NOT NULL,
content TEXT NOT NULL,
dateUpdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
dateAdded TIMESTAMP NOT NULL,
PRIMARY KEY (id),
INDEX (creatorId),
INDEX (dateUpdated),
FOREIGN KEY FKpages (creatorId) REFERENCES users (id)

);