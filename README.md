
# 🤖 Robot Arm Control Panel

This is a web-based control panel for a 6-motor robotic arm built using HTML, CSS, JavaScript, PHP, and MySQL.

## 📋 Features
- Control 6 motors using sliders
- Save motor positions (poses) to the database
- Load and run saved poses
- Delete poses from the list
- Reset motor values to default
- Status control for execution

## 📁 Folder Structure
```
robot_arm_project/
├── index.html
├── get_run_pose.php
├── save_pose.php
├── update_status.php
├── load_pose.php
├── remove_pose.php
└── database.sql
```

## 🛠 Requirements
- XAMPP (or any local server with PHP and MySQL)
- Web browser

## 🚀 Installation Steps
1. Extract the project folder into your XAMPP `htdocs` directory:
   ```bash
   C:/xampp/htdocs/robot_arm_project
   ```

2. Open **XAMPP Control Panel** and start **Apache** and **MySQL**.

3. Import the database:
   - Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Click on **Import**
   - Select the file `database.sql` from the project folder and click **Go**

4. Open the control panel in your browser:
   ```bash
   http://localhost/robot_arm_project/index.html
   ```

## 🧪 Usage
- Adjust motor values using sliders
- Click **Save Pose** to store the current values
- Use **Load** to apply a saved pose
- Click **Run** to mark pose for execution (status = 0)
- Use **Remove** to delete any pose from the list

## 🗑 Optional: Drop Database (dev only)
You can add a `drop_db.php` file if you want to delete the database for testing.

## 📌 Notes
- Default MySQL credentials used: user = `root`, password = *(empty)*
- Make sure your PHP server is running

## 📦 Author
Smart Methods Training Task

