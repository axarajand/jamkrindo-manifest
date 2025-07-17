# Jamkrindo Manifest

Jamkrindo Manifest is a web-based system designed to manage event participants, vehicle assignments, and room allocations. It features an integrated attendance tracking system for participants and an admin dashboard to monitor attendance records in real time.

This project provides a lightweight and efficient solution for managing events, making it suitable for small to medium-sized organizations.

---

## Project Structure
```
jamkrindo-manifest/
├── assets/        # Static assets such as CSS, JS, images
├── db/            # PHP scripts for CRUD operations
├── sql/           # Database schema (.sql files)
├── views/         # HTML/PHP views for frontend
├── index.php      # Main entry point
├── LICENSE        # MIT License file for open source usage
└── README.md      # Project overview and installation instructions
```

---

## Features
- Manage event participants, vehicles, and room assignments
- Integrated attendance tracking system
- Admin dashboard for monitoring participant attendance
- CRUD operations for participant data
- Clean and modular folder structure

---

## Installation

1. **Clone this repository**
   ```bash
   git clone https://github.com/axarajand/jamkrindo-manifest.git
   ```

2. **Navigate to the project folder**
   ```bash
   cd jamkrindo-manifest
   ```

3. **Setup the Database**
   - Import the SQL schema from the `sql/` folder into your MySQL server.

4. **Run the Application**
   - Make sure you have a local server like XAMPP or WAMP installed.
   - Place the project folder inside the `htdocs` directory.
   - Start Apache and MySQL services.
   - Access the app in your browser at:  
     ```
     http://localhost/jamkrindo-manifest
     ```

---

## License
This project is licensed under the [MIT License](LICENSE).  
You are free to use, modify, and distribute this software for personal or commercial purposes.

---

## Technologies Used
- PHP
- MySQL
- HTML/CSS
- JavaScript