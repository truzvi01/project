CREATE TABLE patients(
    user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(256) NOT NULL , 
    password VARCHAR(32) NOT NULL , 
    confirm_password VARCHAR(32) NOT NULL ,
    status VARCHAR(6) NOT NULL , 
    last_name VARCHAR(256) NOT NULL ,
    first_name VARCHAR(256) NOT NULL,
    gender VARCHAR(256) NOT NULL ,   
    dob DATE NOT NULL , 
    birth_place VARCHAR(256) NOT NULL , 
    home_address VARCHAR(256) NOT NULL , 
    city VARCHAR(256) NOT NULL , 
    county VARCHAR(256) NOT NULL , 
    postcode VARCHAR(32) NOT NULL , 
    email VARCHAR(256) NOT NULL , 
    telephone INT(30) NOT NULL ,
    user_type VARCHAR(6) NOT NULL , 
    file_1 VARCHAR(1024) NOT NULL,
    file_2 VARCHAR(1024) NOT NULL,
    upload_image VARCHAR(1024) NOT NULL
    activated TINYINT(1) NOT NULL Default 1
    last_updated TIMESTAMP NOT NULL
    );
