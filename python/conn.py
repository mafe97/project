import mysql.connector

# Step 1: Connect to MySQL database
db_config = {
    'user': 'root',
    'password': '',
    'host': 'localhost',
}

conn = mysql.connector.connect(**db_config)
cursor = conn.cursor()

# Step 2: Create database if it does not exist

cursor.execute("CREATE DATABASE IF NOT EXISTS cartoons")