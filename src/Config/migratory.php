<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Where the templates for the generators are stored...
    |--------------------------------------------------------------------------
    |
    */
    'migration_template_path' => base_path('vendor/tyondo/migratory/src/Stubs/migration.txt'),
    'seed_template_path' => base_path('vendor/tyondo/migratory/src/Stubs/seed.stub'),


    'model_template_path' => base_path('vendor/xethron/laravel-4-generators/src/Way/Generators/templates/model.txt'),

    'scaffold_model_template_path' => base_path('vendor/xethron/laravel-4-generators/src/Way/Generators/templates/scaffolding/model.txt'),

    'controller_template_path' => base_path('vendor/xethron/laravel-4-generators/src/Way/Generators/templates/controller.txt'),

    'scaffold_controller_template_path' => base_path('vendor/xethron/laravel-4-generators/src/Way/Generators/templates/scaffolding/controller.txt'),

   // 'seed_template_path' => base_path('vendor/xethron/laravel-4-generators/src/Way/Generators/templates/seed.txt'),

    'view_template_path' => base_path('vendor/xethron/laravel-4-generators/src/Way/Generators/templates/view.txt'),


    /*
    |--------------------------------------------------------------------------
    | Where the generated files will be saved...
    |--------------------------------------------------------------------------
    |
    */
    'model_target_path'   => app_path(),

    'controller_target_path'   => app_path('Http/Controllers'),

    'migration_target_path'   => base_path('database/migrations'),

    'seed_target_path'   => base_path('database/seeds'),

    'view_target_path'   => base_path('resources/views'),

    'path' => '/database/seeders',

    'chunk_size' => 500 // Maximum number of rows per insert statement

];
