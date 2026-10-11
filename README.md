# Application Description

This is an app I built To go along The development of renewable energy, specifically PV plants, and how they are linked to private investments. I built this app to allow users to see all the PV plants that were built, and I also built this as an organization tool To allow a team to allocate investors to specific plants. As an exercise, I also added a many-to-many connection, by which I mean that investors can own multiple or can be part of multiple plants, and plants can have multiple investors. This is closest to what reality looks like because, in reality, PV plants that are privately funded are not always owned by one entity but, in many cases, are split between many different investors. At the same time, investors in green and renewable energy invest in different projects, so this many-to-many connection was necessary. 

# Features

Visitor

Visitors are able to view all plants that were created on the public website. 

Users

Users are able to log in. They're able to see their investors. They're able to see all of the plants. They're able to create new investors. And they're able to allocate investors to plants. 

Admin

The admin is able to do everything that the users can, but he's also able to create plants. 

# Test logins, after seeding:

| Role  | Email             | Password |
|-------|-------------------|----------|
| User  | test@example.com  | password |
| Admin | admin@example.com | password |

# Installation 
```bash
git clone https://github.com/cicada1996/pvregister.git
cd pvregister
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate:fresh --seed
```
The app then runs via Herd at http://pvregister.test, or with php artisan serve.

# AI sources

- Claude (Anthropic) as a tutor: explanations, error analysis, code review
- Code written by Claude: the dropdown fields in resources/views/userzone/allocations/create.blade.php and the plant list in resources/views/welcome.blade.php
- GitHub Copilot (inline suggestions in VS Code) was active during development. I accepted some of its suggestions, e.g. parts of store() in AllocationController, and reviewed and corrected them (it suggested an allocations() relation that didn't exist).