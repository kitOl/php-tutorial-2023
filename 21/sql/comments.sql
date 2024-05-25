CREATE TABLE comments (
  id INT(11) NOT NULL auto_increment,
  username VARCHAR(30) NOT NULL,
  comment_text TEXT NOT NULL,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
  users_id INT(11),
  PRIMARY KEY (id),
  Foreign Key (users_id) REFERENCES users (id) ON DELETE SET NULL
);