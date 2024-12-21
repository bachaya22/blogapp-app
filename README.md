
# Blog Application

A dynamic and user-friendly blog platform where users can create and post blogs. Blogs submitted by users go through an admin approval process to ensure content quality before they are published.

---

## Features

- **User Roles**:
  - Users: Create and submit blogs for approval.
  - Admins: Approve or reject submitted blogs for publication.
- **Blog Management**:
  - Create, edit, and delete blogs.
  - Admin approval system for user-posted blogs.
- **Responsive Design**: Accessible and functional across all devices.
- **Secure Backend**: Powered by Laravel for robust functionality.

---

## Tech Stack

### Frontend:
- **HTML5**: Structure and content of the application.
- **CSS3**: Styling for a visually appealing interface.
- **Bootstrap**: Ensures responsive and mobile-first design.
- **JavaScript**: Adds interactivity to the user experience.

### Backend:
- **Laravel**: Framework for backend logic and database management.
- **PHP**: Server-side scripting.
- **MySQL**: Database to store users, blogs, and approval statuses.

---

## Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/blog-application.git
   cd blog-application
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Set Up Environment**
   - Copy the `.env.example` file to `.env`.
   - Update database credentials in the `.env` file:
     ```
     DB_DATABASE=your_database_name
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

4. **Run Migrations**
   ```bash
   php artisan migrate
   ```

5. **Serve the Application**
   ```bash
   php artisan serve
   ```

6. Open your browser and navigate to `http://127.0.0.1:8000`.

---

## Usage

1. **Users**:
   - Register or log in to create and submit blogs.
   - View the status of submitted blogs (Pending, Approved, or Rejected).
2. **Admins**:
   - Log in to manage submitted blogs.
   - Approve or reject blogs for publication.

---

## Contribution

Contributions are welcome! Please fork this repository and submit a pull request.  
For major changes, open an issue to discuss your ideas first.

---

## License

This project is licensed under the [MIT License](LICENSE).

---

## Contact

For inquiries or feedback, reach out via:  
- **Email**: bachayasb1@gmail.com  
- **GitHub**: https://github.com/bachaya22/
- **LinkedIn**: www.linkedin.com/in/allah-bachaya
```

Replace placeholders such as `your-username`, `your_database_name`, and `path/to/screenshots` with your actual project details.
