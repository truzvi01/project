CREATE TABLE admin(
    user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(256) NOT NULL , 
    password VARCHAR(32) NOT NULL , 
    last_name VARCHAR(256) NOT NULL ,
    first_name VARCHAR(256) NOT NULL,
    upload_image VARCHAR(1024) NOT NULL
    );