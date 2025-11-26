# Desa Motoling Dua - Village Information System

<p align="center">
  <img src="public/img/logo.png" alt="Desa Motoling Dua Logo" width="120">
</p>

<p align="center">
  <strong>A comprehensive village information system built with Laravel 12</strong>
</p>

<p align="center">
  <a href="#features">Features</a> •
  <a href="#tech-stack">Tech Stack</a> •
  <a href="#installation">Installation</a> •
  <a href="#usage">Usage</a> •
  <a href="#project-structure">Structure</a> •
  <a href="#license">License</a>
</p>

---

## 📋 Overview

**Desa Motoling Dua** is a modern village information system designed for Indonesian villages (Desa) to manage and display village data, demographics, budgets, public services, and transparency information. The system provides both a public-facing website and an administrative content management system.

### Key Highlights

- 📊 **Interactive Infographics** - Visual data representations for demographics, budgets (APBDes), IDM, SDGs, stunting, and social assistance
- 🏛️ **Village Governance** - Complete profile including history, vision & mission, organizational structure
- 📰 **News & Information** - Dynamic news management with categories, tags, and views tracking
- 🔄 **Public Services** - Online service request system with tracking and email notifications
- 🛡️ **Anti-Corruption** - Transparency sections for governance, supervision, service quality, and local wisdom
- 👥 **Visitor Analytics** - Daily unique visitor tracking system
- 📧 **Email Notifications** - Automated emails for service status updates

---

## ✨ Features

### Public Website

#### 1. **Village Profile**
- Historical timeline of the village
- Vision and mission statements
- Organizational structure and officials
- Village deliberation system (BPD)
- Function-based official listings

#### 2. **Interactive Infographics**
- **Demographics (Penduduk)**
  - Population breakdown by age groups
  - Gender distribution
  - Education levels
  - Employment statistics
  - Marital status
  - Religious demographics
  - Hamlet/sub-village distribution
  - Must-select statistics
  
- **Village Budget (APBDes)**
  - Income sources and allocations
  - Shopping/spending by category
  - Financing sources
  - Development realization tracking
  - Budget surplus/deficit analysis
  
- **IDM (Village Development Index)**
  - IKS (Social Index) indicators
  - IKE (Economic Index) indicators
  - IKL (Environmental Index) indicators
  
- **SDGs (Sustainable Development Goals)**
  - Progress tracking for SDG indicators
  
- **Stunting Data**
  - Child malnutrition statistics
  
- **Social Assistance**
  - Distribution of government aid programs

#### 3. **News & Information**
- Article management with rich text editor
- Category-based organization
- Tag system for content discovery
- View counter
- Archive by month/year
- Search functionality
- Facebook integration ready

#### 4. **Public Services**
- Online service request submission
- Document upload support
- Real-time tracking system with unique tracking numbers
- Service status updates (Pending → Verified → Processing → Completed/Rejected)
- Email notifications at each status change
- Public service tracking without login

#### 5. **Village Potential**
- Showcase of local economic opportunities
- Tourist attractions
- Natural resources

#### 6. **Legal Products**
- Village regulations (Perdes)
- Village head decisions (Perkades)
- Category-based organization

#### 7. **Anti-Corruption Section**
- Governance principles
- Supervision mechanisms
- Service quality standards
- Community participation
- Local wisdom integration
- Official statement (Maklumat)

#### 8. **Gallery**
- Village photos and documentation
- Activity galleries

### Administrative Panel

#### Content Management
- **Dashboard** with visitor statistics
- **Master Data Management**
  - Education levels
  - Gender types
  - Hamlets (sub-villages)
  - Job types
  - Marriage status
  - Religion types
  - Income categories
  - Shopping categories
  - Financing types
  - Stunting categories
  - Social assistance types
  - IDM status types
  - News categories
  - Legal product categories
  - Village official positions

#### Infographics Management
- Complete CRUD operations for all infographic types
- Year-based data management
- Percentage calculations
- Budget tracking

#### Content Publishing
- News article creation and editing
- HTML content sanitization (XSS protection)
- Image upload and management
- Category and tag assignment
- Publication scheduling

#### Service Management
- Service listing and descriptions
- Submission management
- Status workflow control
- Document review
- Email notification triggers

#### User Management
- Admin user accounts
- Authentication system

#### Settings
- Village information
- Contact details
- Social media links
- Homepage customization

---

## 🛠️ Tech Stack

### Backend
- **Framework**: Laravel 12.x
- **PHP**: 8.2+
- **Database**: MySQL
- **Authentication**: Custom middleware with session-based auth
- **Email**: Laravel Mailables with queue support
- **HTML Sanitization**: mews/purifier
- **Database Schema**: doctrine/dbal

### Frontend
- **Build Tool**: Vite 7.x
- **CSS Framework**: Tailwind CSS 4.x (Native Vite integration)
- **JavaScript**: Vanilla JS + Alpine.js patterns
- **Charts**: Chart.js
- **Maps**: Leaflet 1.9.4
- **Carousel**: Swiper 11
- **Icons**: Font Awesome 6.5.1

### Development Tools
- **Package Manager**: Composer + npm
- **Testing**: PHPUnit 11.5
- **Code Quality**: Laravel Pint
- **Process Management**: Concurrently (for dev environment)

---

## 📦 Installation

### Prerequisites

- PHP 8.2 or higher
- Composer 2.x
- Node.js 18+ and npm
- MySQL 5.7+ or MariaDB 10.3+
- Git

### Step-by-Step Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ndraa124/web-village-mtg2.git
   cd web-village-mtg2
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment configuration**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Configure database**
   
   Edit `.env` file and set your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_motoling2_village
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

7. **Run database migrations**
   ```bash
   php artisan migrate
   ```

8. **Seed master data (optional)**
   ```bash
   php artisan db:seed
   ```

9. **Create storage symlink**
   ```bash
   php artisan storage:link
   ```

10. **Build frontend assets**
    ```bash
    npm run build
    ```

---

## 🚀 Usage

### Development Mode

**Option 1: Run all services concurrently (recommended)**
```bash
composer dev
```
This command starts:
- Laravel development server (port 8000)
- Queue listener for email processing
- Vite dev server with HMR

**Option 2: Run services separately**

Terminal 1 - Laravel server:
```bash
php artisan serve
```

Terminal 2 - Queue worker:
```bash
php artisan queue:listen --tries=1
```

Terminal 3 - Vite dev server:
```bash
npm run dev
```

### Production Build

```bash
npm run build
```

### Testing

```bash
composer test
```

Or directly:
```bash
php artisan test
```

### Code Formatting

```bash
./vendor/bin/pint
```

---

## 📁 Project Structure

```
web-motoling2-village/
├── app/
│   ├── Helpers/                    # Global helper functions
│   │   └── HelpersInfographicsResident.php
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/             # Admin panel controllers
│   │   │   └── *.php              # Public site controllers
│   │   ├── Middleware/
│   │   │   ├── UserIsAuthenticated.php
│   │   │   └── LogVisitor.php
│   │   └── Requests/              # Form validation requests
│   ├── Mail/                      # Mailable classes
│   │   ├── ContactFormMail.php
│   │   ├── ServiceConfirmationMail.php
│   │   ├── ServiceNewSubmissionMail.php
│   │   ├── ServiceCompletedMail.php
│   │   └── ServiceRejectedMail.php
│   └── Models/                    # Eloquent models
├── bootstrap/
│   └── app.php                    # Application bootstrap & middleware config
├── config/                        # Configuration files
├── database/
│   ├── factories/                 # Model factories for testing
│   ├── migrations/                # Database migrations
│   └── seeders/                   # Database seeders
├── public/
│   ├── admin/                     # Admin panel assets
│   ├── main/                      # Public site assets
│   └── storage -> ../storage/app/public
├── resources/
│   ├── css/
│   │   └── app.css               # Tailwind CSS entry point
│   ├── js/
│   │   └── app.js                # JavaScript entry point
│   └── views/
│       ├── admin/                # Admin panel Blade templates
│       ├── emails/               # Email templates
│       └── main/                 # Public site Blade templates
├── routes/
│   ├── admin.php                 # Admin routes (prefix: /admin)
│   ├── auth.php                  # Authentication routes (prefix: /auth)
│   ├── console.php               # Artisan commands
│   └── web.php                   # Public web routes
├── storage/
│   ├── app/
│   │   └── public/               # User-uploaded files
│   ├── framework/                # Framework cache/sessions
│   └── logs/                     # Application logs
├── tests/                        # PHPUnit tests
├── .env.example                  # Environment variables template
├── composer.json                 # PHP dependencies
├── package.json                  # Node.js dependencies
├── phpunit.xml                   # PHPUnit configuration
└── vite.config.js               # Vite configuration
```

---

## 🗂️ Database Schema

### Master Data Tables (Prefix: `m_`)
- `m_education` - Education levels
- `m_gender` - Gender types
- `m_hamlet` - Sub-village/hamlet data
- `m_job` - Job/occupation types
- `m_marriage` - Marriage status types
- `m_religion` - Religion types
- `m_income` - Budget income categories
- `m_shopping` - Budget spending categories
- `m_financing` - Financing source types
- `m_stunting` - Stunting categories
- `m_social_assistance` - Social assistance types
- `m_idm_status` - IDM status indicators
- `m_village_officials_position` - Official position types

### Infographics Tables (Prefix: `infographics_`)

**Resident/Demographics:**
- `infographics_resident` - Summary statistics
- `infographics_resident_age` - Age group breakdown
- `infographics_resident_hamlet` - Distribution by hamlet
- `infographics_resident_education` - Education level distribution
- `infographics_resident_job` - Employment distribution
- `infographics_resident_must_select` - Special categories
- `infographics_resident_marriage` - Marriage status distribution
- `infographics_resident_religion` - Religious distribution

**Village Budget (APBDes):**
- `infographics_apbd` - Budget summary
- `infographics_apbd_year` - Year-based tracking
- `infographics_apbd_income` - Income breakdown
- `infographics_apbd_shopping` - Spending breakdown
- `infographics_apbd_financing` - Financing sources
- `infographics_apbd_development_realization` - Project completion rates

**Other Infographics:**
- `infographics_stunting` - Stunting data
- `infographics_social_assistance` - Social aid distribution
- `infographics_idm` - IDM summary
- `infographics_idm_indicator_iks` - Social indicators
- `infographics_idm_indicator_ike` - Economic indicators
- `infographics_idm_indicator_ikl` - Environmental indicators
- `infographics_sdgs` - SDG progress

### Content Tables
- `villages` - Village information and settings
- `users` - Admin users
- `news` - News articles
- `categories` - News categories
- `tags` - Content tags
- `news_tag` - Many-to-many relationship
- `services` - Public service types
- `service_submissions` - Service requests
- `sliders` - Homepage slider images
- `galleries` - Photo galleries
- `village_potentials` - Village opportunities
- `legal_products` - Village regulations
- `legal_products_categories` - Regulation categories
- `visitors` - Daily visitor logs

### Profile Tables
- `history_villages` - Village history content
- `history_timelines` - Historical timeline events
- `vision` - Village vision statements
- `mission` - Village mission statements
- `organization_structure` - Organizational chart
- `organization_deliberation` - BPD structure
- `organization_officials` - Village officials
- `organization_function_officials` - Function-based officials

### Anti-Corruption Tables
- `anti_corrupt_maklumat` - Official statements
- `anti_corrupt_governance` - Governance principles
- `anti_corrupt_supervision` - Supervision mechanisms
- `anti_corrupt_service_quality` - Service standards
- `anti_corrupt_participate` - Community participation
- `anti_corrupt_local_wisdom` - Local wisdom integration

---

## 🔐 Authentication & Authorization

### Authentication System
- Custom middleware: `UserIsAuthenticated`
- Session-based authentication
- Single admin role (no role-based permissions)
- Login endpoint: `/auth/login`
- Protected routes use `authenticate` middleware alias

### Default Admin Access
After running migrations, create an admin user via tinker:
```bash
php artisan tinker
```
```php
App\Models\User::create([
    'name' => 'Administrator',
    'email' => 'admin@example.com',
    'password' => bcrypt('password')
]);
```

---

## 📧 Email Configuration

### Development
Default mailer is set to `log` driver (emails saved in `storage/logs/laravel.log`):
```env
MAIL_MAILER=log
```

### Production
Configure SMTP settings:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@desamotoling2.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### Queue Configuration
For production, use database or Redis queue:
```env
QUEUE_CONNECTION=database
```

Run queue worker:
```bash
php artisan queue:work --tries=3
```

---

## 🎨 Customization

### Village Information
Update village settings through Admin Panel:
1. Login to admin panel at `/auth/login`
2. Navigate to **Settings** → **Village Information**
3. Update name, address, contact details, social media links

### Theme Colors
Edit Tailwind configuration in `resources/css/app.css`:
```css
@tailwind base;
@tailwind components;
@tailwind utilities;

/* Add custom color schemes */
```

### Logo & Branding
Replace files in `public/img/`:
- `logo.png` - Main logo (used in navbar, favicon)
- Update favicon by replacing `public/img/logo.png`

---

## 🧪 Testing

### Running Tests
```bash
# Run all tests
composer test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run with coverage
php artisan test --coverage
```

### Writing Tests
Tests are located in `tests/Feature/` and `tests/Unit/`.

Example test structure:
```php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_loads(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
```

---

## 🔧 Troubleshooting

### Common Issues

**1. Storage link not working**
```bash
php artisan storage:link
```

**2. Permission errors**
```bash
# Linux/Mac
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Windows - run as administrator
icacls storage /grant "Users:(OI)(CI)F" /T
icacls bootstrap/cache /grant "Users:(OI)(CI)F" /T
```

**3. Vite manifest not found**
```bash
npm run build
```

**4. Database connection error**
- Verify MySQL service is running
- Check database credentials in `.env`
- Ensure database exists: `CREATE DATABASE db_motoling2_village;`

**5. Queue jobs not processing**
```bash
php artisan queue:restart
php artisan queue:listen
```

**6. Clear application cache**
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

---

## 📊 Performance Optimization

### Production Checklist

1. **Environment Configuration**
   ```env
   APP_ENV=production
   APP_DEBUG=false
   ```

2. **Optimize Autoloader**
   ```bash
   composer install --optimize-autoloader --no-dev
   ```

3. **Cache Configuration**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

4. **Build Assets for Production**
   ```bash
   npm run build
   ```

5. **Enable OPcache** in `php.ini`
   ```ini
   opcache.enable=1
   opcache.memory_consumption=256
   opcache.max_accelerated_files=20000
   ```

6. **Use Redis for Cache/Sessions**
   ```env
   CACHE_STORE=redis
   SESSION_DRIVER=redis
   QUEUE_CONNECTION=redis
   ```

---

## 🤝 Contributing

We welcome contributions! Please follow these guidelines:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### Code Style
- Follow PSR-12 coding standards
- Run Laravel Pint before committing: `./vendor/bin/pint`
- Write descriptive commit messages
- Add tests for new features

---

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

## 👨‍💻 Author

**Developed by ID-124**

- GitHub: [@ndraa124](https://github.com/ndraa124)
- Repository: [web-village-mtg2](https://github.com/ndraa124/web-village-mtg2)

---

## 🙏 Acknowledgments

- Built with [Laravel Framework](https://laravel.com)
- UI styled with [Tailwind CSS](https://tailwindcss.com)
- Charts powered by [Chart.js](https://www.chartjs.org)
- Maps by [Leaflet](https://leafletjs.com)
- Icons from [Font Awesome](https://fontawesome.com)

---

## 📞 Support

For questions, issues, or support:
- Open an issue on [GitHub](https://github.com/ndraa124/web-village-mtg2/issues)
- Check existing documentation
- Review Laravel documentation at [laravel.com/docs](https://laravel.com/docs)

---

<p align="center">Made with ❤️ for Indonesian Villages</p>
