In this project, I create a templete.php to handle the image uploading function and extract 3 description parts in gallery block out of index.php and put them into description folder.

For image uploading function, I use "move_uploaded_file" to upload the iamge to server side, asserts folder.

For description, I use 3 html files to store the desctription contents since I am not sure if the your server has a db server. In templete, houseDescriptionWriter could open and rewrite those 3 html files. Since those files are always there, so I don't put any create function. 

Update
======================================================================
This is a version with mysql database. Database's name is description_db. There are two tables
in it: Descriptions and Users. Descriptions table is used to store image description and url link. 
Users table is used to store username and password.

How to implement the database
======================================================================
Before deployed all the php code, Please run following mysql statement.
"
CREATE DATABASE description_db;



CREATE TABLE Descriptions ( id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
content1 VARCHAR(255) NOT NULL,
content2 VARCHAR(255) NOT NULL,
content3 VARCHAR(255) NOT NULL,
content4 VARCHAR(255) NOT NULL,
content4 VARCHAR(255) NOT NULL
)

CREATE TABLE Users ( id INT(3)
UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL UNIQUE,
password VARCHAR(30) NOT NULL
)

"

Open editImage.php to access the image uploader. But please initialize the database first. 
