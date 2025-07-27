# 🎒 Lost & Found Campus Portal

**Lost & Found** is a web-based portal designed to help students and staff report, browse, and retrieve lost or found items within a college campus. It ensures transparency, quick item recovery, and centralized listing — powered by an admin panel and secure user accounts.

🔧 **Developed as a mini-project** by Second Year Computer Engineering students at **SVKM’s Institute of Technology, Dhule** (Academic Year 2024–25).

---

## 📖 Table of Contents

- [🔍 Project Overview](#-project-overview)
- [✨ Key Features](#-key-features)
- [🧱 System Architecture](#-system-architecture)
- [📸 Screenshots](#-screenshots)
- [🧰 Tech Stack](#-tech-stack)
- [🧪 Sample Workflow](#-sample-workflow)
- [🚀 Future Scope](#-future-scope)
- [🙌 Authors](#-authors)
- [📄 License](#-license)

---

## 🔍 Project Overview

The **Lost & Found Campus Portal** acts as a digital bulletin board that enables:

- Reporting of lost or found items
- Browsing of reported items by category/date
- Admin moderation and approval
- Student registration and secure login

By digitizing the lost & found system, it enhances campus safety, organization, and community support.

---

## ✨ Key Features

| Feature            | Description |
|--------------------|-------------|
| 📝 Report Items     | Users can report **Lost** or **Found** items |
| 🧾 Item Description | Upload item title, category, date, and description |
| 📸 Image Upload     | Upload actual image of lost/found item |
| 🗂️ Category Filter   | Filter items by type: Electronics, Books, Wallets, etc. |
| 🔍 Item Browsing    | Publicly viewable item listing with status |
| 🔐 User Login       | New user registration and secure login |
| 🧑‍💼 Admin Panel     | Admins can view, verify, and approve listings |

---

## 🧱 System Architecture

### 🧑‍💻 Frontend

- **HTML, CSS, Bootstrap** — Layout and responsive UI
- **JavaScript** — Interactive filtering and validations

### 🖥 Backend

- **PHP** — Form handling, authentication, admin panel
- **MySQL** — Stores users, item reports, categories

### 📊 Database Design

- **Users Table**: `id`, `name`, `email`, `password`, `role`, `created_at`
- **Items Table**: `id`, `title`, `type` (Lost/Found), `category`, `description`, `image_path`, `date_reported`, `status`, `user_id`

---

## 📸 Screenshots

> Screenshots from working demo of the portal.

### 🏠 Home Page  
<img width="1911" height="921" alt="Home page" src="https://github.com/user-attachments/assets/58b483b7-e666-4a9e-a46d-840559b16ddf" />

### 🔍 Browse Items  
Lost Item
<img width="1919" height="911" alt="Screenshot 2025-07-27 223852" src="https://github.com/user-attachments/assets/5e3ec3c4-6828-497a-bde0-6e095094f9a3" />

Found item
<img width="1917" height="904" alt="Screenshot 2025-07-27 223909" src="https://github.com/user-attachments/assets/f942e23f-f7b4-41d2-94b9-a07722ee52ba" />

### 📝 Report Lost Item  
<img width="1879" height="913" alt="Screenshot 2025-07-27 223646" src="https://github.com/user-attachments/assets/ca685ead-746e-4014-a7b6-ce92d0a3d826" />

### 🎒 Report Found Item  
<img width="1879" height="913" alt="Screenshot 2025-07-27 223646" src="https://github.com/user-attachments/assets/1f289c54-c71e-49b5-9deb-735aba1b3651" />

### 🔐 User Login 
<img width="1917" height="909" alt="Screenshot 2025-07-27 223359" src="https://github.com/user-attachments/assets/30456c67-5429-47d4-b773-8d337eb6e288" />

### 🆕 Register User  
<img width="1917" height="910" alt="image" src="https://github.com/user-attachments/assets/db9af6dd-6b19-48cb-ad2b-317f6aa674b0" />

### 🧑‍💼 Admin Panel  
<img width="1898" height="908" alt="Screenshot 2025-07-27 224235" src="https://github.com/user-attachments/assets/19da99d4-af49-4b71-bb2f-9b93f8e0fce8" />

---

## 🧰 Tech Stack

| Layer     | Technology |
|-----------|------------|
| Frontend  | HTML, CSS, JS, Bootstrap |
| Backend   | PHP |
| Database  | MySQL |
| Hosting   | XAMPP / LAMP Stack |
| Media     | Manual image upload |
| Browser   | Chrome, Firefox, Edge |

---

## 🧪 Sample Workflow

### 👤 User Registration

- Fill in name, email, password
- System validates and stores new user
- Redirected to dashboard

### 🎒 Reporting Lost/Found Item

- Enter title, select type and category
- Upload image and description
- Admin verifies and posts item publicly

### 🔍 Browsing Items

- All users can search and filter by type/category/date
- Contact info shown if needed (optional future scope)

---

## 🚀 Future Scope

- 📱 Android App Integration
- 📧 Email Alerts on Match
- 🛰️ Location Tagging via Maps API
- 🔁 Claim Request System
- 📦 QR Code for Item Tags

---

## 🙌 Authors

Project developed by Second Year Computer Engineering Students (2024–25):

- 👤 Vaishnavi Pachpute
- 👤 Rajeshwari Mahale
- 👤 Sakshi Avasekar

🧑‍🏫 **Guide:** Prof. Rinku Sharma

---

## 📄 License

This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for more information.

---

> “A connected campus is a safer campus. Let’s find what’s lost together.” 🌟
# Campus-lost-and-Found
