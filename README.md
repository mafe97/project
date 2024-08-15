# Project
Front-End Angular, BackEnd PHP and Python (API)

### Angular execute (Configuring environment)
Requeriments: NPM or YARN, NODEJS and AngularCLI
- Clone repo 
- Use `npm install` command for install all dependencies
- Open your browser https://localhost:4200/ 

### PHP execute (Configuring environment)
Requeriments: MYSQL, XAMPP, LAMP or WAMP and manager databases (phpmyadmin)
- Clone repo
- Configuring the ports(default): MSQL:3306, XAMPP, LAMP AND WAMP:80 PHPMYADMIN:3306 (You can change the port)
- Use `netstat` command and verify the ports are running
- Windows executing: move project into xampp/htdocs/ folder
- Linux executing: move project into var/www/ folder
- Mac executing: move project into Library/WebServer/ folder

1. Create the databases students
2. Go to folder backuser/db/ and import the db file in the manager databases to create the table student and insert the data
- Open your browser https://localhost/xampp/htdocs/api.php

- If you want to test the API:
- Go to the folder connEndpointsphp/collPostmanTests
- Open Postman and create a collection
- Export the file Students.postman_collection and run test option

### Python execute (Configuring environment)
Requeriments: MYSQL, PYTHON OR PYTHON3
- Clone repo
- Use `pip install` command **requests**, **mysql-connector-python** and **Flask**
1. Execute the file conn.py with command `python coon.py`
2. Execute the file rickmorty.py with command `python rickmorty.py`
3. Execute the file app.py with command `python app.py`
  
