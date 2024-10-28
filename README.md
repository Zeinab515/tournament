Event Registration Application
Overview
The Event Registration Application is a PHP-based web application that allows users to register for various events, including sports and academic competitions. It features participant registration, score submission, and a leaderboard display.

Features
Individual and team participant registration
Score submission for participants
Display of leaderboard with participant scores
Responsive design for mobile and desktop users
Technologies Used
Frontend: HTML, CSS (Bootstrap)
Backend: PHP
Database: MySQL
Prerequisites
Before you begin, ensure you have the following installed:

A web server (e.g., Apache or Nginx)
PHP (version 7.0 or higher)
MySQL (version 5.6 or higher)
Installation
Clone the repository:

bash
Copy code
git clone https://github.com/yourusername/event-registration.git
cd event-registration
Set up the database:

Create a MySQL database (e.g., event_db).
Import the provided SQL scripts to create the necessary tables:
sql
Copy code
CREATE TABLE participants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    team VARCHAR(255),
    type VARCHAR(50),
    event VARCHAR(255),
    points INT DEFAULT 0
);
Configure the database connection:

Open db.php and update the database connection parameters (hostname, username, password, database name).
Upload files:

Place all project files in your web server's document root (e.g., htdocs for XAMPP).
Access the application:

Open a web browser and navigate to http://localhost/event-registration.
Usage
Register Participants:

Navigate to the registration page to register individual or team participants.
Submit Scores:

Use the score submission page to enter scores for participants.
View Leaderboard:

Access the leaderboard page to view the current standings.
Testing
Test the application using various test cases to ensure all functionalities work as expected. Refer to the Test Plan section for detailed testing scenarios.

Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your changes.

License
This project is licensed under the MIT License.

Acknowledgments
Bootstrap for responsive design.
PHP for server-side scripting.
MySQL for database management.
Contact
For any questions or issues, please contact [zeinabyismail44@gmail.com].
