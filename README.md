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

## Quick Start (รันครั้งแรก)

สำหรับผู้ที่ติดตั้งครั้งแรก ทำตามขั้นตอนนี้:

### 1. ติดตั้ง Docker Desktop
- ดาวน์โหลดและติดตั้ง [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- เปิด Docker Desktop และรอจนกว่าจะเริ่มทำงาน

### 2. Clone Repository
```bash
git clone https://github.com/your-username/Laravel11-Dormitory-Management.git
cd Laravel11-Dormitory-Management
```

### 3. ตั้งค่า Environment
แก้ไขไฟล์ `.env` เพิ่ม/แก้ไขค่าเหล่านี้:
```env
# Database Configuration
DB_CONNECTION=mysql
DB_HOST=mysql
DB_DATABASE=dormitory_management
DB_USERNAME=sail
DB_PASSWORD=password

# Docker Configuration
WWWGROUP=1000
WWWUSER=1000
FORWARD_DB_PORT=3307

# App Configuration
APP_PORT=80
VITE_PORT=5173
```

### 4. สร้างและเริ่ม Docker Containers
```bash
docker compose up -d
```
รอจนกว่า containers จะสร้างเสร็จ (ครั้งแรกอาจใช้เวลา 5-10 นาที)

### 5. รัน Database Migrations
```bash
sail php artisan migrate
```

### 6. เพิ่มข้อมูลทดสอบ (ถ้าต้องการ)
```bash
sail php artisan db:seed
```

### 7. ติดตั้ง Frontend Dependencies
```bash
sail npm install
```

### 8. รัน Development Server
```bash
sail npm run dev
```

### 9. เปิดใช้งานแอปพลิเคชัน
เปิด browser และไปที่:
- **แอปพลิเคชัน:** http://localhost
- **phpMyAdmin:** http://localhost:8080 (Username: `sail`, Password: `password`)

### 10. Login (ถ้ารัน db:seed)
- **Email:** test@example.com
- **Password:** password

**หมายเหตุ:** ครั้งต่อไปที่เปิดเครื่องใหม่ ให้รันเพียง:
```bash
docker compose up -d
sail npm run dev
```

---

## Installation

### วิธีที่ 1: ติดตั้งด้วย Docker (แนะนำสำหรับ Windows)

#### 1. ติดตั้ง Prerequisites
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) สำหรับ Windows

#### 2. Clone Repository
```bash
git clone https://github.com/your-username/Laravel11-Dormitory-Management.git
cd Laravel11-Dormitory-Management
```

#### 3. ตั้งค่า Environment
แก้ไขไฟล์ `.env` และเพิ่ม/แก้ไขค่าต่อไปนี้:

```env
# Database Configuration
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=dormitory_management
DB_USERNAME=sail
DB_PASSWORD=password

# Docker Configuration
WWWGROUP=1000
WWWUSER=1000
FORWARD_DB_PORT=3307

# App Configuration
APP_PORT=80
VITE_PORT=5173
```

#### 4. Start Docker Containers
```bash
docker compose up -d
```

#### 5. Run Migrations
```bash
sail php artisan migrate
```

#### 6. Install Frontend Dependencies
```bash
sail npm install
sail npm run dev
```

#### 7. เข้าใช้งาน
- แอปพลิเคชัน: http://localhost
- Vite Dev Server: http://localhost:5173
- MySQL Database: localhost:3307

#### Sail Wrapper (Windows)

โปรเจคนี้มาพร้อมกับไฟล์ `sail.bat` ที่ช่วยให้รันคำสั่ง Docker ได้ง่ายขึ้นบน Windows:

**ความสามารถของ sail.bat:**
- ตรวจสอบว่า Docker กำลังรันอยู่หรือไม่
- Start containers อัตโนมัติถ้ายังไม่ได้รัน
- ลดความยาวของคำสั่งให้สั้นลง

**วิธีใช้:**
```bash
# แทนที่จะพิมพ์
docker exec laravel11-dormitory-management-laravel.test-1 php artisan migrate

# ใช้แค่
sail php artisan migrate
```

#### คำสั่งที่ใช้บ่อยกับ Docker

```bash
# รัน Artisan commands
sail php artisan migrate
sail php artisan db:seed
sail php artisan storage:link

# รัน Composer
sail composer install
sail composer require package-name

# รัน NPM
sail npm install
sail npm run dev
sail npm run build

# เข้า Shell ใน Container
sail bash

# ดู Logs
docker logs laravel11-dormitory-management-laravel.test-1 -f

# หยุด Containers
docker compose down

# Restart Containers
docker compose restart
```

---

### วิธีที่ 2: ติดตั้งแบบปกติ (Local Environment)

#### 1. Clone the Repository

```bash
git clone https://github.com/your-username/Laravel11-Dormitory-Management.git
cd Laravel11-Dormitory-Management
```

#### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

#### 3. Environment Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

#### 4. Database Configuration

Edit `.env` file and configure your database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dormitory_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

#### 5. Run Migrations

```bash
php artisan migrate
```

#### 6. Start Development Server

```bash
# Terminal 1: Start Laravel server
php artisan serve

# Terminal 2: Start Vite development server
npm run dev
```

#### 7. Access Application

Open your browser and navigate to: `http://localhost:8000`

---

## การใช้งาน (Usage)

### เข้าใช้งานแอปพลิเคชัน

หลังจากติดตั้งเสร็จแล้ว สามารถเข้าใช้งานได้ที่:

- **แอปพลิเคชัน:** http://localhost
- **Vite Dev Server:** http://localhost:5173
- **phpMyAdmin:** http://localhost:8080
- **MySQL Database:** localhost:3307

### จัดการฐานข้อมูล

#### 1. เพิ่มข้อมูลทดสอบ (Seeding)

```bash
# เพิ่มข้อมูลทดสอบ
sail php artisan db:seed

# หรือ Reset database และเพิ่มข้อมูลใหม่
sail php artisan migrate:fresh --seed
```

#### 2. เข้าใช้งาน phpMyAdmin

- URL: http://localhost:8080
- Server: `mysql`
- Username: `sail`
- Password: `password`

#### 3. เข้าใช้งาน MySQL CLI

```bash
sail mysql

# แล้วรันคำสั่ง SQL
SHOW TABLES;
SELECT * FROM users;
exit;
```

#### 4. ใช้ Laravel Tinker

```bash
sail php artisan tinker

# สร้าง User ใหม่
User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'password' => bcrypt('password')
]);

# ดูข้อมูล
User::all();
exit;
```

### ข้อมูล Login (Test Account)

หลังจากรัน `sail php artisan db:seed`:

- **Email:** test@example.com
- **Password:** password (default จาก factory)

### คำสั่งที่ใช้บ่อย

```bash
# ดูสถานะ containers
docker compose ps

# ดู logs
docker logs laravel11-dormitory-management-laravel.test-1 -f

# รัน migration
sail php artisan migrate

# Clear cache
sail php artisan cache:clear
sail php artisan config:clear
sail php artisan route:clear

# สร้าง symbolic link สำหรับ storage
sail php artisan storage:link
```

### Troubleshooting

#### ปัญหา: Port ถูกใช้งานแล้ว

```bash
# เปลี่ยน port ใน .env
FORWARD_DB_PORT=3307
APP_PORT=80
FORWARD_PHPMYADMIN_PORT=8080
```

#### ปัญหา: npm install error

```bash
# ลบและติดตั้งใหม่
sail rm -rf node_modules package-lock.json
sail npm install
```

#### ปัญหา: Permission denied

```bash
# ตรวจสอบ WWWGROUP และ WWWUSER ใน .env
WWWGROUP=1000
WWWUSER=1000
```

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
