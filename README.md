# How to
1. clone the project
2. run the sql script in the sql folder
3. create a file called connection.json in the db folder with the structure:
```json
    {
      "servername": "server ip or name",
      "username": "the username for the db",
      "password": "the password for the user",
      "dbname": "the database name"
    }
```
4. add a user in the person table of the database with a php password_hash($password, PASSWORD_BCRYPT) encoded password