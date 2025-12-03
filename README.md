<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

<h1 align="center">Dormitory Management System</h1>

<p align="center">
  <strong>ระบบจัดการหอพักและอพาร์ทเมนต์ครบวงจร</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 11">
  <img src="https://img.shields.io/badge/Livewire-3-FB70A9?style=for-the-badge&logo=livewire&logoColor=white" alt="Livewire 3">
  <img src="https://img.shields.io/badge/Tailwind_CSS-3-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2+">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

---

## Overview

Dormitory Management System เป็นระบบจัดการหอพักที่พัฒนาด้วย Laravel 11 และ Livewire 3 ออกแบบมาเพื่อช่วยให้เจ้าของหอพักสามารถบริหารจัดการห้องพัก ผู้เช่า การเรียกเก็บเงิน และการเงินได้อย่างมีประสิทธิภาพ

---

## Features

| Module | Description |
|--------|-------------|
| **Dashboard** | แสดงภาพรวมรายได้ ห้องว่าง ยอดค้างชำระ พร้อมกราฟรายงานรายเดือน/รายปี |
| **Room Management** | จัดการห้องพัก เพิ่มห้องเดี่ยวหรือหลายห้องพร้อมกัน กำหนดราคารายวัน/รายเดือน |
| **Customer Management** | จัดการข้อมูลผู้เช่า ย้ายห้อง ติดตามสถานะการเข้าพัก |
| **Billing System** | ออกบิลค่าเช่า ค่าน้ำ ค่าไฟ ค่าอินเทอร์เน็ต และค่าใช้จ่ายอื่นๆ |
| **Payment Management** | บันทึกรายจ่าย จัดหมวดหมู่ ติดตามประวัติการชำระเงิน |
| **Company Settings** | ตั้งค่าข้อมูลหอพัก โลโก้ อัตราค่าน้ำ/ค่าไฟต่อหน่วย |
| **User Management** | จัดการผู้ใช้งานระบบ แบ่งระดับสิทธิ์ Admin/User |
| **Print Documents** | พิมพ์ใบแจ้งหนี้และใบเสร็จรับเงิน |

---

## Tech Stack

<table>
  <tr>
    <td align="center" width="96">
      <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="48" height="48" alt="Laravel" />
      <br>Laravel 11
    </td>
    <td align="center" width="96">
      <img src="https://avatars.githubusercontent.com/u/51960834?s=200&v=4" width="48" height="48" alt="Livewire" />
      <br>Livewire 3
    </td>
    <td align="center" width="96">
      <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" width="48" height="48" alt="Tailwind CSS" />
      <br>Tailwind CSS
    </td>
    <td align="center" width="96">
      <img src="https://cdn.worldvectorlogo.com/logos/vitejs.svg" width="48" height="48" alt="Vite" />
      <br>Vite
    </td>
    <td align="center" width="96">
      <img src="https://www.vectorlogo.zone/logos/mysql/mysql-icon.svg" width="48" height="48" alt="MySQL" />
      <br>MySQL
    </td>
  </tr>
</table>

---

## Requirements

- **PHP** >= 8.2
- **Composer** >= 2.0
- **Node.js** >= 18.0
- **npm** >= 9.0
- **MySQL** >= 8.0

---

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/Laravel11-Dormitory-Management.git
cd Laravel11-Dormitory-Management
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Configuration

Edit `.env` file and configure your database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dormitory_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 5. Run Migrations

```bash
php artisan migrate
```

### 6. Start Development Server

```bash
# Terminal 1: Start Laravel server
php artisan serve

# Terminal 2: Start Vite development server
npm run dev
```

### 7. Access Application

Open your browser and navigate to: `http://localhost:8000`

---

## Database Schema

```
┌──────────────────┐     ┌──────────────────┐     ┌──────────────────┐
│      users       │     │      rooms       │     │    customers     │
├──────────────────┤     ├──────────────────┤     ├──────────────────┤
│ id               │     │ id               │     │ id               │
│ name             │     │ name             │     │ room_id (FK)     │
│ email            │     │ price_per_day    │     │ name             │
│ password         │     │ price_per_month  │     │ phone            │
│ level            │     │ status           │     │ address          │
│ timestamps       │     │ is_empty         │     │ stay_type        │
└──────────────────┘     └──────────────────┘     │ status           │
                                                   └──────────────────┘
┌──────────────────┐     ┌──────────────────┐     ┌──────────────────┐
│    billings      │     │       pays       │     │    pay_logs      │
├──────────────────┤     ├──────────────────┤     ├──────────────────┤
│ id               │     │ id               │     │ id               │
│ room_id (FK)     │     │ name             │     │ pay_id (FK)      │
│ amount_rent      │     │ remark           │     │ amount           │
│ amount_water     │     │ status           │     │ pay_date         │
│ amount_electric  │     └──────────────────┘     │ remark           │
│ amount_internet  │                               │ status           │
│ status           │     ┌──────────────────┐     └──────────────────┘
│ payed_date       │     │  organizations   │
└──────────────────┘     ├──────────────────┤
                          │ id               │
                          │ name             │
                          │ address          │
                          │ phone            │
                          │ tax_code         │
                          │ logo             │
                          │ amount_water     │
                          │ amount_electric  │
                          └──────────────────┘
```

---

## User Roles & Permissions

| Role | Dashboard | Rooms | Customers | Billing | Payments | Users | Settings |
|:----:|:---------:|:-----:|:---------:|:-------:|:--------:|:-----:|:--------:|
| **Admin** | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| **User** | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌ |

---

## Project Structure

```
├── app/
│   ├── Livewire/          # Livewire Components
│   │   ├── Dashboard.php
│   │   ├── Room.php
│   │   ├── Customer.php
│   │   ├── Billing.php
│   │   ├── Pay.php
│   │   └── ...
│   └── Models/            # Eloquent Models
│       ├── User.php
│       ├── RoomModel.php
│       ├── CustomerModel.php
│       └── ...
├── resources/
│   └── views/             # Blade Templates
│       ├── livewire/
│       ├── components/
│       └── ...
├── database/
│   └── migrations/        # Database Migrations
└── routes/
    └── web.php            # Web Routes
```

---

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

---

## License

This project is open-sourced software licensed under the [MIT License](LICENSE).

---

<p align="center">
  Made with ❤️ using Laravel
</p>
