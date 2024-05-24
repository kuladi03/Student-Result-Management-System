# Student Result Management System

The Student Result Management System is a web-based application developed to manage student records, including their names, roll numbers, classes, marks, and results. The system provides functionality for teachers to add, delete, view, and manage student records, as well as for students to view their individual results.

## Features

- **Teacher Dashboard:**
  - Add new student records including name, roll number, class, marks, and result.
  - Delete existing student records by specifying the student ID.
  - View a list of all student records.

- **Student Login:**
  - Students can log in using their name and roll number to view their individual results.

## Technologies Used

- **Frontend:**
  - HTML
  - CSS

- **Backend:**
  - PHP

- **Database:**
  - MySQL

## Installation and Setup

1. **Clone the Repository:**
   ```
   git clone https://github.com/yourusername/student-result-management.git
   ```
   
2. **Database Setup:**
   - Create a MySQL database named `student_results`.
   - Import the provided SQL script (`database.sql`) to create the necessary tables.

3. **Configuration:**
   - Update the database connection details in the `db.php` file to match your MySQL credentials.

4. **Deployment:**
   - Host the project files on a web server with PHP support. You can use local servers like XAMPP, WAMP, or MAMP for development.

5. **Accessing the Application:**
   - For teachers, navigate to `teacher_login.php` to log in and access the teacher dashboard.
   - For students, navigate to `student_login.php` to log in and view their individual results.

## Usage

- **Teacher Dashboard:**
  - Log in as a teacher using the provided credentials (default username: `teacher`, password: `password`).
  - From the dashboard, you can add new student records, delete existing records, and view a list of all student records.
  
- **Student Login:**
  - Students can log in using their name and roll number (provided by the teacher) to view their individual results.


## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/new-feature`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature/new-feature`).
6. Create a new Pull Request.
