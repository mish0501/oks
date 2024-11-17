DROP TABLE IF EXISTS lab8.users;
CREATE TABLE lab8.users (
  id INT AUTO_INCREMENT,
  name VARCHAR(255),
  PRIMARY KEY(id)
);

INSERT INTO lab8.users (name) VALUES ("John Doe");
INSERT INTO lab8.users (name) VALUES ("Jane Doe");
INSERT INTO lab8.users (name) VALUES ("James Smith");