<?php

namespace App\Domains\Users\Models\Providers;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;
use App\Domains\Users\Models\Database\Migrations;

class MigrationServiceProvider extends ServiceProvider
{
    use MigratorTrait;
    
    public function register()
    {
        $this->migrations([
            Migrations\CreateUsersTable::class,
            Migrations\createPasswordResetTokensTable::class,
        ]);
    }
}