# CMS Blog (Laravel + Filament)

CMS Blog is a content management system built with **Laravel 10**, **Jetstream**, **Livewire**, and **FilamentPHP v3**.

The project provides an admin panel for managing pages, blog posts, translations, roles and permissions, as well as a public-facing frontend for content delivery.

This CMS was designed as a modular system using modern Laravel tooling and several ecosystem packages to simplify content management and administration.

---

# Tech Stack

## Backend

- Laravel 10
- PHP 8.1+
- Jetstream
- Livewire
- FilamentPHP v3

## Frontend

- Blade
- TailwindCSS
- Vite

## Additional packages

- Spatie Laravel Permissions
- Spatie Translatable
- Filament Flexible Content Blocks
- Filament Translation Manager
- Laravel Localization
- SEO Tools

---

# Main Features

- Admin panel built with **FilamentPHP**
- Role and permission management
- Multilingual content (English / Spanish)
- Dynamic page builder using **Flexible Content Blocks**
- Blog with posts, categories and comments
- Translation management interface
- SEO metadata generation
- Contact form with email notifications
- Moderation system for blog comments
- Dynamic page routing

---

# Project Structure

```
app/
    Actions
    Filament
    Http
    Models
    Policies

config/
database/
lang/
lang-custom/

resources/
    views
    css
    js

routes/
    web.php
    api.php
```

The project follows the typical Laravel application structure, extended with **Filament admin resources and plugins**.

---

# Multilingual Support

The CMS supports multiple languages.

Currently available languages:

- English
- Spanish

Translations are handled using:

- Laravel Localization
- Filament Translation Manager
- Spatie Translatable

Language configuration can be found in:

```
config/laravellocalization.php
config/filament-translation-manager.php
config/filament-flexible-content-blocks.php
```

---

# Installation

Clone the repository:

```
git clone https://github.com/JamDesigns/cms
```

Navigate to the project directory:

```
cd cms
```

Install the project:

```
composer install
```

The `composer install` script automatically performs the following tasks:

- installs PHP dependencies
- installs Node dependencies
- builds frontend assets
- copies `.env.example` to `.env`
- generates the application key
- runs database migrations and seeders
- synchronizes roles and permissions
- creates the storage symbolic link

After installation, start the frontend development server:

```
npm run dev
```

Then start Laravel:

```
php artisan serve
```

The application will now be available locally.

---

# Default Admin Credentials

After installation, the database seeder creates a default administrator account.

Email:

```
admin@cms.test
```

Password:

```
password
```

For security reasons, it is recommended to create a new administrator and remove this default user.

---

# Admin Panel

The CMS includes a full **Filament admin panel** where administrators can manage:

- pages
- blog posts
- categories
- translations
- users
- roles and permissions

The admin panel is available at:

```
/admin
```

---

# Content Management

Administrators can create dynamic pages using **Flexible Content Blocks**, allowing different page layouts and sections to be built without writing code.

Pages can include:

- text blocks
- images
- SEO metadata
- translated content

Blog posts support comments and moderation.

---

# SEO Integration

The CMS includes SEO tools to generate metadata for pages and blog posts.

Optional AI-assisted SEO generation can be configured using OpenAI by setting credentials in the `.env` file.

Example configuration:

```
OPENAI_API_KEY=
OPENAI_ORGANIZATION=
```

---

# Educational Purpose

This project was created as a **learning and experimentation project with Laravel and Filament**.

It demonstrates how to build a modern CMS using the Laravel ecosystem, including admin panels, multilingual support and modular content management.

---

# License

MIT