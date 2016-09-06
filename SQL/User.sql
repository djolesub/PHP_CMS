USE CMS; 

#################################Creating User Table ########################################
CREATE TABLE users (
id INT UNSIGNED AUTO_INCREMENT,
userType ENUM('public','author','admin'),
username VARCHAR(30) NOT NULL,
email VARCHAR(40) NOT NULL,
pass CHAR(40) NOT NULL,
dateAdded DATETIME DEFAULT NOW(),
PRIMARY KEY (id),
UNIQUE (username),
UNIQUE (email),
INDEX login (email, pass)
); 

INSERT INTO users(userType,username,email,pass) VALUES
('public', 'publicUser', 'public@example.com', SHA1('publicPass')),
('author', 'authorUser', 'author@example.com', SHA1('authorPass')),
('admin', 'adminUser', 'djolesub#gmail.com', SHA1('coperman'));



