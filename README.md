### E-learning Management System

This project is an E-learning management system designed to provide a comprehensive and user-friendly platform for online education. The system includes both front-end and back-end components, ensuring a complete and functional experience for users. The front-end is built using HTML, CSS, and JavaScript, while the back-end is developed using PHP, with data stored in a MySQL database managed via phpMyAdmin.

#### Features:

- **Front-End and Back-End Integration**: Seamlessly integrates both the front-end user interface and back-end server functionalities to provide a cohesive user experience.
  
  - **Front-End**:
    - **HTML**: Structures the content and layout of the web pages.
    - **CSS**: Styles the web pages for a visually appealing and responsive design.
    - **JavaScript**: Adds interactivity and dynamic content to enhance the user experience.

  - **Back-End**:
    - **PHP**: Handles server-side logic, processes user inputs, and interacts with the database.
    - **MySQL Database**: Stores user data, including IDs, emails, and passwords, in a structured format. Managed via phpMyAdmin for ease of use and administration.

- **Navigation Bar**: Contains the following sections to facilitate easy navigation throughout the platform:
  - **Home**: The landing page with an overview of the platform and its features.
  - **About**: Provides information about the platform, its mission, and its purpose.
  - **Courses**: Displays a detailed list of available courses, each with a description, image, and video content.
  - **Contact Us**: Features a form that allows users to get in touch with the administrators. The form is connected to Google Sheets for efficient data management.
  - **Login**: A secure login form for existing users to access their accounts. If a user does not have an account, they are prompted to sign up.
  - **Sign Up**: A registration form for new users to create an account by providing their email and password.

- **Testimonial Section**: Showcases feedback from users who have benefited from the platform, enhancing credibility and trust.
- **FAQ Section**: Provides answers to frequently asked questions, assisting users in resolving common issues and queries.

#### Database Structure:

- **Users Table**: Contains user data with the following fields:
  - **id**: A unique identifier for each user (Primary Key).
  - **email**: The user's email address, used for login and communication.
  - **password**: The user's password, stored securely using hashing algorithms for protection.

This project aims to create a robust and efficient e-learning environment that facilitates seamless access to educational resources and enhances the learning experience for users.

By combining a well-structured front-end with a powerful back-end, this E-learning management system ensures that users can easily navigate the platform, access courses, and manage their accounts securely. The integration of PHP with MySQL allows for efficient data handling and secure user authentication, providing a reliable and scalable solution for online education.
