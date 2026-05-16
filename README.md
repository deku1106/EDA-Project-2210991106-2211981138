# 🏥 eDoc — Doctor Appointment System

> A web-based Doctor Appointment & E-Channeling System built with **PHP**, **MySQL**, **HTML & CSS**

![PHP](https://img.shields.io/badge/PHP-7.3+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Apache](https://img.shields.io/badge/Apache-2.4+-D22128?style=for-the-badge&logo=apache&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

---

## 📌 About the Project

**eDoc** is an online doctor appointment and e-channeling system that allows patients to book appointments with doctors digitally. The system is designed to streamline the appointment scheduling process for hospitals, clinics, and medical facilities.

The platform supports **three user roles** — Admin, Doctor, and Patient — each with their own dedicated dashboard and functionalities.

---

## 📁 Repository Structure

```
EDA-Project/
├── 📂 EDA Project/          # Main PHP Web Application
│   ├── admin/               # Admin panel pages
│   ├── doctor/              # Doctor dashboard pages
│   ├── patient/             # Patient dashboard pages
│   ├── css/                 # Stylesheets & fonts
│   ├── img/                 # Images & icons
│   ├── connection.php        # Database connection
│   ├── login.php             # Login page
│   ├── signup.php            # Patient registration
│   ├── index.html            # Landing page
│   ├── SQL_Database_edoc.sql # Database schema & seed data
│   └── docker-compose.yml    # Docker configuration
│
├── 📂 Copyright Proof/       # Copyright registration documents
│   └── Copyright Office.pdf
│
└── 📂 PPT & Report/          # Project presentation & report
    ├── Doctor Appointment System Project Report.docx
    └── IOHE_External_PPT (2).pdf
```

---

## ✨ Features

### 👨‍💼 Admin
- Add, edit, and delete doctors
- Schedule and manage doctor sessions
- View all registered patients
- View and manage all bookings

### 👨‍⚕️ Doctor
- View upcoming appointments
- View scheduled sessions and weekly timetable
- View patient details
- Edit account settings

### 🧑‍💻 Patient (Client)
- Browse available doctors by specialty
- View doctor's weekly schedule
- Book appointments online
- View past bookings
- Edit or delete account

---

## 🔐 Demo Credentials

| Role    | Email               | Password |
|---------|---------------------|----------|
| Admin   | admin@edoc.com      | `123`    |
| Doctor  | doctor@edoc.com     | `123`    |
| Patient | patient@edoc.com    | `123`    |

---

## 🚀 Getting Started

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP)
- Web Browser (Chrome, Firefox, etc.)

### Installation Steps

1. **Start XAMPP** — Open XAMPP Control Panel and start **Apache** and **MySQL**

2. **Copy Project Files** — Copy the `EDA Project` folder and paste it into:
   ```
   C:\xampp\htdocs\
   ```
   Rename it to `edoc` for easy access.

3. **Create Database** — Open your browser and go to:
   ```
   http://localhost/phpmyadmin
   ```
   Create a new database named **`edoc`**

4. **Import SQL** — In phpMyAdmin, select the `edoc` database → click **Import** → choose the file:
   ```
   EDA Project/SQL_Database_edoc.sql
   ```

5. **Run the App** — Open your browser and visit:
   ```
   http://localhost/edoc/
   ```

---

## 🐳 Docker Setup (Alternative)

If you prefer Docker, use the included `docker-compose.yml`:

```bash
cd "EDA Project"
docker-compose up -d
```

Then visit `http://localhost` in your browser.

---

## 🛠️ Tech Stack

| Technology     | Version  |
|----------------|----------|
| PHP            | 7.3.5+   |
| MySQL          | 5.7.26+  |
| Apache         | 2.4.39+  |
| HTML & CSS     | 5 / 3    |

---

## 📸 Screenshots

| Home Page | Admin Dashboard |
|-----------|----------------|
| ![Home](EDA%20Project/Screenshots/Screenshot%20(1).png) | ![Admin](EDA%20Project/Screenshots/Screenshot%20(3).png) |

| Doctor Dashboard | Patient Dashboard |
|-----------------|------------------|
| ![Doctor](EDA%20Project/Screenshots/Screenshot%20(9).png) | ![Patient](EDA%20Project/Screenshots/Screenshot%20(6).png) |

---

## 📄 Project Documents

- 📘 [Project Report](PPT%20%26%20Report/Doctor%20Appointment%20System%20Project%20Report.docx)
- 📊 [Presentation (PPT)](PPT%20%26%20Report/IOHE_External_PPT%20(2).pdf)
- ©️ [Copyright Certificate](Copyright%20Proof/Copyright%20Office.pdf)

---

## 📜 License

This project is licensed under the **MIT License** — see the [LICENSE](EDA%20Project/LICENSE) file for details.

---

## 🙋‍♂️ Author

**deku1106**  
📧 GitHub: [github.com/deku1106](https://github.com/deku1106)

---

> ⭐ If you found this project helpful, please give it a **star** on GitHub!
