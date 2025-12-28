– Laravel REST API

Project ini adalah **backend REST API menggunakan Laravel 12**  
yang dibuat untuk keperluan **tugas / pembelajaran fullstack**.

---

## 🚀 Tech Stack
- **Laravel 12**
- **MySQL**
- **PHP 8.2+**
- **REST API**
- (Frontend bisa terpisah: React / Postman)

---

## 📂 Fitur API
API ini menyediakan CRUD data **User**:

| Method | Endpoint | Keterangan |
|------|--------|-----------|
| GET | `/api/users` | Ambil semua user |
| POST | `/api/users` | Tambah user |
| PUT | `/api/users/{id}` | Update user |
| DELETE | `/api/users/{id}` | Hapus user |

---

## ⚙️ Instalasi

### 1️⃣ Clone Repository
```bash
git clone git@github.com:galang-afk/tugas_masdeka.git
cd tugas_masdeka
2️⃣ Install Dependency
bash
Copy code
composer install
3️⃣ Copy Environment
bash
Copy code
cp .env.example .env
php artisan key:generate
4️⃣ Setting Database (.env)
env
Copy code
DB_DATABASE=tugas_masdeka
DB_USERNAME=root
DB_PASSWORD=
5️⃣ Migrasi Database
bash
Copy code
php artisan migrate
6️⃣ Jalankan Server
bash
Copy code
php artisan serve
🧪 Testing API
Gunakan:

Postman

Thunder Client

Frontend React

Base URL:

arduino
Copy code
http://127.0.0.1:8000/api

👤 Author

Galang
Repository: https://github.com/galang-afk/tugas_masdeka
