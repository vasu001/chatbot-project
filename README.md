# About this Project

This is a project for college final year. A chatbot that aims to make webpages. A simple fun project to get accustomed to Laravel and Botman. 

## Steps
1. Clone the repo.
2. Create a database named 'chatbot' using phpmyadmin or mysql cli, depending on your taste.
3. Edit env file in project to point to that database, localhost, password, etc.
4. Run command, "php artisan migrate".
5. Run notepad with administrator privilege, go to your system hosts file and add:
  127.0.0.1 localhost
  127.0.0.1 chatbot.localhost
   and save the file.
6. Go to xampp/apache/conf/extra/httpd-vhosts.conf file. Edit with following details:

        <VirtualHost *:80>
          DocumentRoot "H:/xampp/htdocs"
          ServerName localhost
        </VirtualHost>
        <VirtualHost *:80>
            DocumentRoot "H:/xampp/htdocs/chatbot/public"
            ServerName chatbot.localhost
        </VirtualHost>  
        
7. Save the file and restart apache server using xampp controller.
8. Now type chatbot.localhost/ in your browser to open the project.

## Technology

Botman Project

Laravel

## Special Credit
Full credit of 6 template themes used in this project go to W3School. The templates used here are taken from them and is not designed by me. Do checkout their W3 CSS for more.

## Licence

MIT
