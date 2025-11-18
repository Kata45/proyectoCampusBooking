![imagen](https://i.pinimg.com/1200x/55/46/e5/5546e5d850808d0f515b8bd6243dfe4f.jpg)

---

<div align="center">

<h1>🐳 CampusBooking Lite – Gestión de Espacios y Reservas </h1>

> ## 👩🏻‍💻**Kata**
> **Objetivo:** Crear un sistema interno minimalista para administrar espacios académicos y gestionar reservas de forma rápida y eficiente.*

![Status](https://img.shields.io/badge/status-active-success)
![Laravel](https://img.shields.io/badge/Laravel-10-red)
![PHP](https://img.shields.io/badge/PHP-8%2B-blue)
![License](https://img.shields.io/badge/license-MIT-green)

</div>

---

## 📘 **Descripción del Proyecto**

**CampusBooking Lite** es una aplicación interna construida en **Laravel 10** que permite gestionar:

* 🏫 **Espacios** (aulas, salas, laboratorios)
* 📅 **Reservas** asociadas a esos espacios

Es un sistema CRUD simple — sin autenticación ni reglas complejas — pensado para uso administrativo dentro de una sede.

---

## 🚀 **Características principales**

### ✔️ CRUD de Espacios

* Crear, editar, listar y eliminar.
* Validación de campos (nombre, tipo, capacidad, ubicación).
* Paginación de **10 registros por página**.
* Mensajes flash para operaciones exitosas.

### ✔️ CRUD de Reservas

* Crear reservas asociadas a un espacio mediante un `<select>`.
* Validaciones mínimas: solicitante, fecha, horas, espacio asignado.
* Relación **1–N**: un Espacio → muchas Reservas.
* Muestra el nombre del espacio en la tabla.
* Paginación y alertas flash.

---

## 🏗️ **Tecnologías utilizadas**

<div align="center">

| Tecnología           | Versión |
| -------------------- | ------- |
| PHP                  | 8+      |
| Laravel              | 10+     |
| Blade Templates      | ✔️      |
| MySQL / MariaDB      | ✔️      |
| Bootstrap (opcional) | ✔️      |

</div>

---

## 📁 **Estructura general de carpetas**

```
CampusBookingLite/
│── app/
│   ├── Http/Controllers/
│   └── Models/
│── database/
│   ├── migrations/
│── resources/
│   └── views/
│── routes/
│   └── web.php
│── public/
└── README.md
```

---

## ⚙️ **Instalación y configuración**

### 1️⃣ Clonar el repositorio

```bash
git clone https://github.com/TU-USUARIO/TU-REPO.git
cd TU-REPO
```

### 2️⃣ Instalar dependencias

```bash
composer install
```

### 3️⃣ Crear el archivo .env

```bash
cp .env.example .env
```

### 4️⃣ Generar key del proyecto

```bash
php artisan key:generate
```

### 5️⃣ Configurar base de datos

Edita en `.env`:

```
DB_DATABASE=campus
DB_USERNAME=root
DB_PASSWORD=
```

### 6️⃣ Ejecutar migraciones

```bash
php artisan migrate
```

### 7️⃣ Iniciar servidor

```bash
php artisan serve
```

📍 Ahora puedes entrar a:
👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📸 **Capturas (opcional)**

> Agrega imágenes reales del proyecto aquí

```
![Listado de Espacios](URL_DE_LA_IMAGEN)
![Formulario de Reserva](URL_DE_LA_IMAGEN)
```

---

## 🛠️ **Rutas principales**

<div align="center">

| Recurso  | Ruta        | Acción         |
| -------- | ----------- | -------------- |
| Espacios | `/espacios` | CRUD completo  |
| Reservas | `/reservas` | CRUD completo  |
| Inicio   | `/`         | Página inicial |

</div>
