SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id;
SELECT * FROM users LEFT JOIN comments ON users.id = comments.users_id;
SELECT * FROM users RIGHT JOIN comments ON users.id = comments.users_id;
SELECT users.username, comments.comment_text, comments.created_at FROM users INNER JOIN comments ON users.id = comments.users_id;

