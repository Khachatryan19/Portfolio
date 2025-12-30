# Portfolio Website

A modern, professional portfolio website built with Laravel showcasing backend development experience and projects.

## Features

- **Modern UI/UX**: Beautiful gradient design with smooth animations and responsive layout
- **About Section**: Professional introduction and experience overview
- **Technologies**: Showcase of skills organized by category
- **Projects**: Highlighted projects and work experience
- **Responsive Design**: Works seamlessly on desktop, tablet, and mobile devices

## Technologies Used

- **Backend**: Laravel 10
- **Frontend**: HTML, CSS, JavaScript
- **Styling**: Custom CSS with modern design patterns

## Requirements

- PHP >= 8.1
- Composer
- Node.js & NPM (for asset compilation)

## Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd Portfolio
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node dependencies (if using Vite):
```bash
npm install
```

4. Copy environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. (Optional) Build assets:
```bash
npm run build
```

## Running the Application

### Development Server

Start the Laravel development server:

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

### With Vite (for asset compilation)

In one terminal, start the Laravel server:
```bash
php artisan serve
```

In another terminal, start Vite:
```bash
npm run dev
```

## Project Structure

```
Portfolio/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PortfolioController.php    # Portfolio controller
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php               # Main layout
│       └── portfolio/
│           └── index.blade.php             # Portfolio homepage
├── routes/
│   └── web.php                             # Web routes
└── public/                                  # Public assets
```

## Customization

To update your portfolio information, edit the `PortfolioController.php` file:

```php
app/Http/Controllers/PortfolioController.php
```

Modify the `$data` array to update:
- About section
- Technologies
- Projects
- Experience description

## Deployment

For production deployment:

1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false` in `.env`
3. Run `php artisan config:cache`
4. Run `php artisan route:cache`
5. Run `php artisan view:cache`
6. Build production assets: `npm run build`

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
