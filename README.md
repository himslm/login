# login
Simple Login Script for use with MySQL using MySQLi OOP

MySQL Create table 'user': 
```MySQL
CREATE TABLE user(  
  user_ID   MEDIUMINT UNSIGNED  NOT NULL  AUTO_INCREMENT,  
  username  VARCHAR(30)         NOT NULL,  
  fname     VARCHAR(50),  
  lname     VARCHAR(60),  
  email     VARCHAR(255),  
  PRIMARY KEY(user_ID)  
);
```

