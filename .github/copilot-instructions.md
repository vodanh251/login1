# Copilot Instructions for AI Agents

## Project Overview
This is a Laravel-based web application with Livewire and Volt integration. The codebase follows Laravel conventions for routing, controllers, models, and views, but includes custom patterns and directory structures that AI agents should note.

## Key Architecture & Patterns
- **Routing**: Defined in `routes/web.php` (main app routes) and `routes/auth.php` (auth-related routes). Uses controller grouping and route prefixes for modularity (e.g., `users`, `posts`).
- **Controllers**: Located in `app/Http/Controllers/`. Each resource (User, Post, Auth) has its own controller. Actions are mapped to routes using Laravel's controller syntax.
- **Models**: Found in `app/Models/`. Eloquent ORM is used for database interaction.
- **Views**: Blade templates in `resources/views/`. Subfolders organize views by feature (e.g., `users/`, `post/`, `layouts1/`).
- **Livewire & Volt**: Livewire components are in `app/Livewire/` and Volt routes are defined in `web.php` for settings pages.
- **Database**: SQLite database (`database/database.sqlite`). Migrations in `database/migrations/`, factories in `database/factories/`, and seeders in `database/seeders/`.

## Developer Workflows
- **Start Local Server**: `php artisan serve` (default port 8000)
- **Run Migrations**: `php artisan migrate`
- **Seed Database**: `php artisan db:seed`
- **Run Tests**: `php artisan test` (tests in `tests/Feature/` and `tests/Unit/`)
- **Build Frontend**: Uses Vite (`npm run build` or `npm run dev`)

## Project-Specific Conventions
- **Route Grouping**: Prefer `Route::prefix()->controller()->group()` for CRUD resources.
- **Blade Views**: Organize by feature, not just by resource. E.g., `resources/views/users/` for user-related pages.
- **Volt Settings**: Settings pages use Volt routes and are protected by `auth` middleware.
- **Auth Flow**: Registration and login routes handled by `AuthController`.
- **Custom CSS**: Additional styles in `public/file css/style.css` and `resources/css/app.css`.

## Integration Points
- **Livewire**: For reactive components, see `app/Livewire/` and `resources/views/livewire/`.
- **Volt**: For settings/profile/password/appearance, see Volt routes in `web.php`.
- **Frontend**: Vite for asset bundling, entry points in `resources/js/app.js` and `resources/css/app.css`.

## External Dependencies
- **Composer**: PHP dependencies managed in `composer.json`.
- **NPM**: JS/CSS dependencies managed in `package.json`.

## Example Patterns
- **CRUD Route Group**:
  ```php
  Route::prefix('posts')->controller(PostController::class)->group(function(){
      Route::get('/', 'index')->name('posts.index');
      Route::get('/create', 'create')->name('posts.create');
      Route::post('/', 'store')->name('posts.store');
      Route::get('/{id}/edit', 'edit')->name('posts.edit');
      Route::put('/{id}', 'update')->name('posts.update');
      Route::delete('/{id}', 'destroy')->name('posts.destroy');
  });
  ```
- **Volt Route Example**:
  ```php
  Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
  ```

## Key Files & Directories
- `routes/web.php`, `routes/auth.php`: Routing
- `app/Http/Controllers/`: Controllers
- `app/Models/`: Models
- `resources/views/`: Blade views
- `app/Livewire/`: Livewire components
- `database/migrations/`: Migrations
- `public/file css/`: Custom CSS

---

**If any section is unclear or missing important project-specific details, please provide feedback or specify which workflows, conventions, or integrations need further documentation.**
