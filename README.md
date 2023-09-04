# task
Simple Laravel CRUD Task

#### Create a simple CRUD Api  with Laravel that implements the below model:

- Migrations:
  - Customer {Firstname, Lastname, DateOfBirth, PhoneNumber, Email, BankAccountNumber}

- Practices and patterns (Must):
  - TDD
  - DDD
  - BDD
  - Clean architecture
  - CQRS pattern (Event sourcing).
  - Clean git commits that shows your work progress.
  - Use PHP 8.2.x only
  
- Validations (Must)
  - During Create; validate the phone number to be a valid mobile number only (Please use Google LibPhoneNumber to validate number at the backend).
  - A Valid email and a valid bank account number must be checked before submitting the form.
  - Customers must be unique in database: By Firstname, Lastname and DateOfBirth.
  - Email must be unique in the database.

- Storage (Must)
  - Store the phone number in a database with minimized space storage (choose varchar/string, or bigInt unsigned whichever store less space).
  - Docker-compose project that loads database service automatically with docker-compose up

- Presentation (Must)
  - Web UI
  - Swagger
