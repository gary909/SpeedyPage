# SpeedyPage Practice Project

Practice implementation for a fast affiliate/deals frontend using a Laravel-oriented structure with reusable Twig and Blade templates, Bootstrap 5 styling, and simple page caching.

## What is implemented

- Page routes for home, category, and deal detail views.
- Thin controllers that cache public page payloads.
- Fake content seeder data for categories and offers.
- Reusable offer card component templates.
- Bootstrap-based responsive UI with low-JS enhancements.
- Public CSS/JS assets that work without a build step.

## Current constraint

This machine currently has no `php`, `composer`, `brew`, or `docker` command available in PATH, so the project could not be bootstrapped with `composer create-project` yet.

## Run once PHP and Composer are installed

1. Install dependencies:

   ```bash
   composer install
   ```

2. Create environment file and key:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. Prepare SQLite for quick local setup:

   ```bash
   mkdir -p database
   touch database/database.sqlite
   ```

4. Start local server:

   ```bash
   php artisan serve
   ```

5. Open routes:
- `/`
- `/category/electronics`
- `/category/home-kitchen`
- `/category/gaming`
- `/deal/sony-wh1000xm5-noise-cancelling-headphones`

## Suggested next feature

Add a comparison-table component and place it on category pages to practice ROI-style frontend additions.
# SpeedyPage
