DROP TABLE IF EXISTS lab8.users;
CREATE TABLE lab8.users (
  id INT AUTO_INCREMENT,
  name VARCHAR(255),
  username VARCHAR(255),
  PRIMARY KEY(id)
);

INSERT INTO lab8.users (name, username) VALUES ("John Doe", 'john_doe');
INSERT INTO lab8.users (name, username) VALUES ("Jane Doe", 'jane_doe');
INSERT INTO lab8.users (name, username) VALUES ("James Smith", 'james_smith');