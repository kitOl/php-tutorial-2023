CREATE TABLE users (
  id INT(11) NOT NULL auto_increment,
  username VARCHAR(30) NOT NULL,
  pwd VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIME
);