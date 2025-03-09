<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = collect(Route::getRoutes())
            ->filter(function ($route) {
                return $route->getName();
            })
            ->map(function ($route) {
                return [
                    'url' => $route->uri(),
                    'name' => $route->getName(),

                ];
            });

        Permission::insert($routes->toArray());
    }
}
