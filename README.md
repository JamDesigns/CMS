# CMS Blog

## Introduction

CMS Blog is developed in Laravel 10, Jetstream with Livewire and Filamentphp 3 with various plugins.

## Instalation

Clone the repository
```
git clone https://github.com/JamDesigns/cms
```

Before running composer, set up a local server like Laragon

Run composer
```
composer install
```

This process performs all the dependency installation, database creation, and a minimum of records creation. These are:
- The Home, Privacy Policy, Terms and Conditions, and About Us pages.
- The super admin credentials to access the backend and be able to manage roles, permissions, translations, and users.
User: admin@cms.test
Password: password
- 5 Roles
- The permissions needed to access the different sections of the backend
- The category: Uncategorized

## Usage
It has role and permission management, translations, page creation using flexible content blocks and language selector (English and Spanish).

Languages ​​are listed in the following files:

#### ` AppServiceProvider.php `
```php
    public function boot(): void
    {
        Carbon::setLocale(app()->getLocale());
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
        $switch
            ->locales([
                'es',
                'en',
            ]); // also accepts a closure
        });
        FilamentTranslationManager::setLocales([
            'es',
            'en',
        ]);
    }
```

#### ` AdminPanelProvider.php `
```php
    ->plugins([
    // ...
    SpatieLaravelTranslatablePlugin::make()
        ->defaultLocales([
            'es',
            'en',
        ]),
    ]);
```

#### ` filament-flexible-content-blocks.php `
```php
'supported_locales' => [
        'es',
        'en',
    ],
```

#### ` filament-translation-manager.php `
```php
'locales' => [
        'es',
        'en',
    ],
```

#### ` laravellocalization.php `
```php
    // ...
        'en'          => [
            'name' => 'English',
            'script' => 'Latn',
            'native' => 'English',
            'regional' => 'en_GB'
        ],
        //'en-AU'       => ['name' => 'Australian English',     'script' => 'Latn', 'native' => 'Australian English', 'regional' => 'en_AU'],
        //'en-GB'       => ['name' => 'British English',        'script' => 'Latn', 'native' => 'British English', 'regional' => 'en_GB'],
        //'en-CA'       => ['name' => 'Canadian English',       'script' => 'Latn', 'native' => 'Canadian English', 'regional' => 'en_CA'],
        //'en-US'       => ['name' => 'U.S. English',           'script' => 'Latn', 'native' => 'U.S. English', 'regional' => 'en_US'],
        'es'          => [
            'name' => 'Spanish',
            'script' => 'Latn',
            'native' => 'Español',
            'regional' => 'es_ES'
        ],
    // ...
```
You can also see a list of the emails you receive from the front-end contact form, as well as the email in your personal or business mailbox (depending on the configuration indicated in .env). To use the SEO included in the generation of flexible content blocks, you need to create a free account at [OpenAI API](https://platform.openai.comg). and put the credentials in the .env file.

You can see the comments made on the posts and decide whether to allow the post or not.
Categories, posts, and pages can be translated into the languages ​​active on the platform.

You can browse the front-end without registering except to post comments on posts.
All pages related to posts (Blog) do not have access unless there are active posts.
The URLs of the pages created in the back-end are generated dynamically.
