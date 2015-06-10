# login
Simple Login Script for use with MySQL using MySQLi OOP

Add the below table to whichever database you would like to create.

```MySQL
CREATE TABLE users(  
  user_ID   MEDIUMINT UNSIGNED  NOT NULL  AUTO_INCREMENT,  
  username  VARCHAR(30)         NOT NULL,  
  fname     VARCHAR(50),  
  lname     VARCHAR(60),  
  email     VARCHAR(255),  
  PRIMARY KEY(user_ID)  
);
```
Once your Database and table has been setup, make sure to edit classes/cxn.php with Database Login Credentials.  

