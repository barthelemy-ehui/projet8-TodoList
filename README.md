ToDoList
========

Base du projet #8 : Améliorez un projet existant

https://openclassrooms.com/projects/ameliorer-un-projet-existant-1

#Symfony version 3.4
All bundles used in this project are available inside composer.json

#Docker Installation

Install docker with this link
https://docs.docker.com/install/

then start the project with this command

 - docker-compose up -d to start the project

During authentification, Symfony call getRoles form user entity which is used to check the "access_control roles" under security file.


#Where are user informations and how to access them

This project comes with the ability to add user and update them.
All users are available under the link /users. 
This page allows editing a selected user.

#Authorization and Roles
There are 2 roles available when adding a new user.
 - ROLE_USER will permit a user to add, delete, edit task
 - ROLE_ADMIN has the same functionality as ROLE_USER with the exception that you can delete an anonymous task.

#Database configuration and generation of file

Inside the folder app/config, copy and rename the file parameters.yml.dist to parameters.yml.
Once the new file is created, update to add the database name, database user and database password.

#Generate database by using bin/console

 - bin/console doctrine:database:create for configured database
 - bin/console doctrine:schema:create will add all the table base on the entities inside the project
 
#Performance with blackfire

The performance is measured with blackfire. 
The following is the command used for checking the performance

 - docker exec -it -e BLACKFIRE_CLIENT_ID -e BLACKFIRE_CLIENT_TOKEN [containerId] blackfire curl http://[CONTAINERIP]//web/app.php/users
 
 #PHPUNIT
 
 See the code coverage inside 
  - ./coverage folder
 