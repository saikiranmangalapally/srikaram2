<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class SetupProject extends Command
{
    protected $signature = 'setup';
    protected $description = 'Setup project for first time use';

    public function handle()
    {
        $this->info('====>> Starting project setup <<====');

        // Clear previous cache
        // This is important to ensure no stale cache is present before setup
        // It helps in avoiding issues with configuration and routes
        $this->info('
===> Clearing previous cache...
');
        Artisan::call('optimize:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        
        // Step 1: Copy .env if not exists
        if (!File::exists(base_path('.env'))) {
            $this->info('===> Copying .env file...');
            File::copy(base_path('.env.example'), base_path('.env'));
            
            // 🔄 Reload config after creating .env
            $this->info('===> Reloading configuration after creating .env...');
            $this->callSilent('config:clear');
            $this->callSilent('config:cache');

            // Step 2: Generate app key
            $this->info('===> Generating application key...');
            Artisan::call('key:generate', ['--force' => true]);
        } else {
            $this->warn('===> .env already exists. Skipping copy.');
        }

        // Step 3: Check if already installed
        if (File::exists(storage_path('app/installed.lock'))) {
            $this->info('To re-run setup, you must delete the lock file manually: storage/app/installed.lock');
            $this->warn('====>> Project already installed. Skipping setup <<====');
            return;
        }
        // Step 3.1: Clear laravel.log if exists and not empty
        $logPath = storage_path('logs/laravel.log');
        if (File::exists($logPath) && File::size($logPath) > 0) {
            $this->info('===> Clearing laravel.log file...');
            File::put($logPath, ''); // empty the file
        } else {
            $this->info('===> laravel.log already empty :) or not found :(');
        }

        // Step 4: Migrate
        $this->info('      
===> Running migrations... ');
        Artisan::call('migrate', ['--force' => true]);

        // Step 6.1:Fixing permissions storage
        $this->info('     
===> Fixing permissions for storage and bootstrap/cache...');
        File::chmod(storage_path(), 0775);
        File::chmod(base_path('bootstrap/cache'), 0775);

        // Step 6.1: Symlink storage
        $this->info('===> Creating storage symlink...');
        Artisan::call('storage:link');

        // Step 7: Optimize config/routes
        $this->info('===> Caching config & routes...');
        Artisan::call('config:cache');
        Artisan::call('route:cache');

        // Step 8: Mark setup as complete
        File::put(storage_path('app/installed.lock'), <<<TEXT
📦 Laravel Project Installed

✅ Installation Timestamp: {$this->now()}

🔧 Setup Steps Completed:
- .env file checked and copied if missing
- Application key generated
- Storage symlink created
- Config and route caches generated
- laravel.log cleared
- Database migrations run
- Storage symlink created
- Config and route caches generated

📁 This file marks that the initial setup has been completed.
To re-run setup, you must delete this file manually: storage/app/installed.lock
TEXT);

        $this->info('
===>>>> Project setup completed successfully :) <<<<===


');
        $this->comment('Note:Now you can run [php artisan serve] to start the server.');
        $this->info('==>>> Visit: http://127.0.1:8000 // http://localhost:8000 // http://your-domain.com <<<==

');
    }
    protected function now()
    {
        return now()->toDateTimeString();
    }
}
