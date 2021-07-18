# hackos-freelancer
Hackos Freelancer Themes Powered by Hackosphere Framework

## Server Setup Process

# Installation of Apache, MySQL,PHP manually step by step using putty

 - login as : root
 - Update the system

    ```sh
        apt-get update
    ```
- Upgade the system

    ```sh
        apt-get upgrade
    ```
    > then press y
    
- Apache Installation
    
     ```sh
        apt-get install apache2
    ```
     > then press y
     
- Apache start and Enable
     
    ```sh
        systemctl start apache2
        systemctl enable apache2
    ```
- To check Apache Status
     
    ```sh
        systemctl status apache2
    ```
##### Copy the IP and paste in Browser you will find Apache default Ubuntu Page

- Installation of MySQL database server
     
    ```sh
        apt-get install mysql-server
    ```
    
     > then press y
     
- Secure installation of mysql
     
    ```sh
      mysql_secure_installation
    ```
    
    > then press y
    
- Choose the password policy: 
- Enter 0 for Low , Enter 1 for Medium, Enter 2 for Strong
        -you can select password according to your choice low,medium,strong.
- select your choice Yes-y or No-n (by default you can select Yes- y 5 times) 
        according to you provide security

- Start and Enable mysql
     
    ```sh
       systemctl start mysql
       systemctl enable mysql

    ```
- find mysql file under etc folder
     
    ```sh
     cd /etc
     ls
    ```
- find mysql.conf.d file under mysql folder
     
    ```sh
     cd mysql
     ls
    ```
- Edit mysql.conf.d file
     
    ```sh
     nano mysqld.cnf
    ```
- Add in mysqld.cnf file the default authentication plugin in mysqld section
     
    ```sh
     default_authentication_plugin= mysql_native_password
    ```
- Exit the editor with CTRL+X ->Y->Enter
- Back to root
- Start and Enable mysql
  
    ```sh
      systemctl start mysql
      systemctl enable mysql
    ```
#### INSTALL PHP
- Install php using following Command
     ```sh
     sudo apt-get install python-software-properties 
    ```
    ```sh
    sudo add-apt-repository ppa:ondrej/php  
    ```
    ```sh
   sudo apt-get update 
    ```
     ```sh
   sudo apt-get install -y php7.0
    ```
     ```sh
   sudo apt-get install php7.0-mysql php7.0-curl php7.0-json php7.0-cgi php7.0-xsl
    ```
     ```sh
   apt-get install php7.0 libapache2-mod-php7.0 php7.0-mysql php7.0-curl php7.0-mbstring php7.0-gd php7.0-xml php7.0-xmlrpc php7.0-intl php7.0-soap php7.0-zip
    ```
    > then press y
- Create info.php and edit it
     ```sh
        nano /var/www/html/info.php
    ```
- Copy the content
     ```sh
         <?php
            phpinfo();
        ?>
    ```
- restart apache
     ```sh
        systemctl restart apache2
    ```

- Open the Browser copy the ip and add info.php in URL bar(like 127.90.11/info.php)
