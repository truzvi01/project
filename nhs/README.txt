-------------------------------
 Final Year Project
-------------------------------
Author: tatendar@ymail.com
-------------------------------

To view web application:
----------------------------------
http://titan.dcs.bbk.ac.uk/~truzvi01/nhs/index.php


To view Admin web application:
----------------------------------
http://titan.dcs.bbk.ac.uk/~truzvi01/nhs/admin-login.php
username - Tait123
Password - tait123 


To view GP web application:
----------------------------------
http://titan.dcs.bbk.ac.uk/~truzvi01/nhs/gp-login.php
username - Tatenda10
Password - taenda10 


Installation
------------
After uploading the files to the server, set permissions set to 777 on the class folder otherwise it will display a message that the files are not permitted. 
You can do this in Filezilla (right-click > File permissions...) and also click where it says Recurse into sub directory and then click apply to all files and directories. 

If you update any of the files and publish it again, you have to reset it again to 777
 
A folder (where the images are stored on the server) in directory classes/images/ should remain on the server, otherwise image files will fail to upload on the file system. 


Configuration
-------------
MYSQL database is needed to connect with the PHP. Index.php is the main page. All the pages are linked to each other per each user. All the documents need to be published on one web-sever in oder for the files to work.

