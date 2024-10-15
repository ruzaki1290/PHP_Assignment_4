# PHP_Assignment_4

## Updates to the project Assignment 3

New classes and files had been added to the `technician_manager` from the Assignment 3 directory.

### Classes and Files

- **Database Class**:
  - A class named `Database` is used to get a connection to the database.  
  - This class is stored in a file named `database_oo.php`.  

- **Technician Class**:
  - A class named `Technician` is used to store data about each technician.
  - This class includes a method that returns the full name of the technician.
  - This class is stored in a file named `technician.php`.

-**TechnicianDB Class**:

- A class named `TechnicianDB` is used to interact with the database.
- This class includes methods to get all technicians, get a single technician, delete a technician, and add a technician.
- This class is stored in a file named `technician_db.php`.

### Completed Chalanges

-**14-1: Use objects**:
-Same as project 6-2. However, for the Technician List page, the First Name and Last Name columns are combined into a single Name column that contains the full name. The full name is displayed using a method in the Technician class.

### Directory Structure

``` markdwon
project_root/
├── technician_manager/
│   ├── index.php
│   ├── add_technician.php
│   ├── delete_technician.php
├── model/
│   ├── database_oo.php
│   ├── technician.php
│   ├── technician_db_oo.php
├── view/
│   ├── header.php
│   ├── footer.php
```

``` markdown

This README file provides a summary of the updates and changes made in the project, including the new directory structure and the classes used as per the assignment requests.
```
