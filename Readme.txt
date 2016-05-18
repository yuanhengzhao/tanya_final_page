In this project, I create a templete.php to handle the image uploading function and extract 3 description parts in gallery block out of index.php and put them into description folder.

For image uploading function, I use "move_uploaded_file" to upload the iamge to server side, asserts folder.

For description, I use 3 html files to store the desctription contents since I am not sure if the your server has a db server. In templete, houseDescriptionWriter could open and rewrite those 3 html files. Since those files are always there, so I don't put any create function. 