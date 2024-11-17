#Create DB
sudo mysql -e "DROP DATABASE IF EXISTS lab8";
sudo mysql -e "CREATE DATABASE lab8";

#Create user
sudo mysql -e "CREATE USER 'user'@'localhost' IDENTIFIED BY 'Oks_2024'";

#Grant privileges
sudo mysql -e "GRANT ALL ON lab8.* TO 'user'@'localhost'";

#seed the db
sudo mysql lab8 < ./seed.sql;