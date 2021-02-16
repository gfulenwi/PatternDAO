# Data Access Object Pattern
## Implementation of the Data Access Object (DAO) Pattern in PHP

<img src="images/DAO-Pattern.png" alt="DAO Pattern">

This repository project illustrates the use of the Data Access Object(DA0) design pattern in PHP. I use this pattern in just about every program I write that requires management of a persistance layer.  The persistance or storage for programs is typically on the file system or in a database.  The DAO pattern:

* *Separates your application into a **Front-End (view) and a Back-End (model)*** by adding an interface layer between the front-end code, which is the user inteface, and the back-end code, which is where the data is stored.

* Creates an **interface layer** that *abstracts the storage details of the backed-end (model)from the front-end (view)* by creating a class that represents a row of columns in a database table, or the fields of a record in a file. One instance of the class represents one row in the table or one record in the file.  A collection of rows or records is represented by an array of objects (one object for each row or record). This class is referred to as a Data Transfer Object (DTO).  It is the data container that is passed between the front-end and the back-end. 

* Creates a **DAO layer** that *implements all of the storage specific data operations by defining methods for all of the CRUD operations.* Methods are defined for each of the required operations. Data is passed from the front-end(view) to the DAO by calling the DAO method and encapsulating the data in a Data Transfer Object(or array of DTOs) and passing it as an argument to the DAO method.  The Back-End (model) sends data to the front-end by encapsulating the data in a Data Transfer Object(or array of DTOs) and passing as a return value.

    Operation | SQL Query
    --------- | --------
    **C**reate | Insert
    **R**ead | Select
    **U**pdate | Update
    **D**elete | Delete


The advantages of using the DAO pattern for your application include:
* **Application Structure:** Your model for a table will consist of the DTO class that defines a row in the contact table, named Contact.php and a DAO class that will define all of the operations on that table named ContactDAO.php.  Both of them will be defined in the model directory.
* **Maintainability:** By defining a directory structure and naming standards for your application.  Changes made to the application will be easy to locate the appropriate files.
* **Reusability:** To create another application that accesses the same data, you just need to copy the model directory to the new application.  You can change the front-end without changing the back-end or change the back-end without changing the front-end.
* **Teamwork:** Now that the application has a defined structure and naming standards, it is easier to distribute coding tasks and testing without creating code conflicts between team members.
* **Web Services:** The DAO concept and structure will make it very easy to understand and transition to REST Web Services later in the course.

## Code Example
The project in this repository implements a very basic contact list that supports two of the CRUD operations.  It allows you to see all of the contacts in the contacts table (Read) and it allows you to add a contact to the table (Create).  The DTO, Contact.php, and the DAO, ContactDAO.php are in the model directory. There are two different versions of the application.  One with the contact listing and add form on the same page, *index.php*. The other version has the listing on one page, *listContacts.php*, and the form on another page, *addContact.php*.


Click on the link to run Version 1 on the Boole Server, https://boole.cs.uafs.edu/patternDAO

#### index.php
<img src="images/patternDAOss1.png" alt="Screenshot">


Click on the link to run Version 2 on the Boole Server, https://boole.cs.uafs.edu/patternDAO/listContacts.php

#### listContacts.php
<img src="images/daoss2.png" alt="Screenshot 2">

#### addContact.php
<img src="images/daoss3.png" alt="Screenshot 2">
