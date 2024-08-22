<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Permission;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('permission');
            $table->timestamps();
        });

        Schema::create('permission_user', function (Blueprint $table) {
          $table->foreignIdFor(Permission::class);
            $table->foreignIdFor(User::class); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
