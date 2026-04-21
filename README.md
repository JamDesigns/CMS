# 🧩 CMS Blog (Laravel + Filament)

Content Management System built with **Laravel 10**, **FilamentPHP v3** and **Livewire**, designed to manage multilingual content, roles, permissions and dynamic pages through a modern admin panel.

This project showcases how to build a modular CMS using the Laravel ecosystem, focusing on scalability, maintainability and real-world administration workflows.

---

## 🚀 Key Highlights

- Full admin panel built with **FilamentPHP**
- Role & permission system using **Spatie Permissions**
- Multilingual content management (EN / ES)
- Dynamic page builder with flexible content blocks
- SEO metadata generation and optional AI-assisted content
- Clean and modular Laravel architecture

---

## 🛠️ Tech Stack

### Backend

- PHP 8.1+
- Laravel 10
- Jetstream
- Livewire
- FilamentPHP v3

### Frontend

- Blade
- TailwindCSS
- Vite

### Additional Packages

- Spatie Laravel Permissions
- Spatie Translatable
- Laravel Localization
- Filament Flexible Content Blocks
- Filament Translation Manager
- SEO Tools

---

## 📦 Main Features

- Admin panel for managing pages, posts and users
- Role and permission management
- Multilingual content support
- Dynamic page builder with reusable content blocks
- Blog system with categories, comments and moderation
- Translation management interface
- SEO metadata generation
- Contact form with email notifications
- Dynamic routing for pages

---

## 🧠 Architecture

The project follows a standard Laravel structure, extended with Filament resources and modular components for content management.

```
app/
    Actions
    Filament
    Http
    Models
    Policies

resources/
    views
    css
    js

routes/
    web.php
    api.php
```

---

## 🌍 Multilingual Support

Supported languages:

- English
- Spanish

Handled using:

- Laravel Localization
- Filament Translation Manager
- Spatie Translatable

Configuration files:

```
config/laravellocalization.php
config/filament-translation-manager.php
config/filament-flexible-content-blocks.php
```

---

## ⚙️ Installation

```bash
git clone https://github.com/JamDesigns/cms
cd cms
composer install
```

The installation process automatically:

- installs dependencies
- builds frontend assets
- configures environment
- runs migrations and seeders
- sets up roles and permissions

Start development servers:

```bash
npm run dev
php artisan serve
```

---

## 🔐 Admin Access

Default admin credentials:

```
admin@cms.test
password
```

⚠️ It is recommended to create a new admin user and remove the default one.

Admin panel available at:

```
/admin
```

---

## 🧩 Content Management

- Build pages using flexible content blocks
- Manage blog posts, categories and comments
- Moderate user-generated content
- Configure SEO metadata per page/post

---

## 🤖 SEO & AI Integration

The CMS supports SEO metadata generation.

Optional AI-assisted content generation can be enabled via OpenAI:

```
OPENAI_API_KEY=
OPENAI_ORGANIZATION=
```

---

## 🎯 Purpose

This project demonstrates how to build a modern CMS with:

- modular architecture
- admin panel systems
- multilingual support
- real-world content workflows

---

## 👤 Author

José Ángel Mosquera Rodríguez  
Senior PHP Backend Developer
