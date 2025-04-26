<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->increments(true);
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->unsignedBigInteger('sponsor_id')->nullable()->index();
            $table->unsignedBigInteger('country_id')->nullable()->index();
            $table->unsignedBigInteger('stateprov_id')->nullable()->index();
            $table->unsignedBigInteger('timezone_id')->nullable()->index();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('avatar')->nullable();
            $table->string('bio')->nullable();
            $table->enum('status', ['active','onhold','inactive','suspended'])->default('active');
            $table->enum('role', ['admin','mentor','editor','user'])->default('user');
            $table->boolean('isOnline')->default(0);
            $table->timestamp('last_login')->nullable();
            $table->string('last_ip')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        // add an admin user
        $user = new \App\Models\User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->firstname = 'Admin';
        $user->lastname = 'User';
        $user->sponsor_id = 1;
        $user->country_id = 37;
        $user->stateprov_id = 2;
        $user->timezone_id = 1;
        $user->password = Hash::make('password');
        $user->phone = '5095166142';
        $user->address = '7416 Canada Way';
        $user->city = 'Burnaby';
        $user->postalcode = 'V3N3J6';
        $user->bio = "Hello! I'm the administrator here. If you have any questions or need help navigating the platform, feel free to get in touch.";
        $user->status = 'active';
        $user->role = 'admin';
        $user->isOnline = 0;
        $user->last_login = null;
        $user->last_ip = '';
        $user->remember_token = '';
        $user->created_at = now();
        $user->updated_at = now();
        $user->email_verified_at = now();
        $user->deleted_at = null;
        $user->save();

        // add a regular user
        $user = new \App\Models\User();
        $user->name = 'jclustre';
        $user->email = 'jclustre@gmail.com';
        $user->firstname = 'Joey';
        $user->lastname = 'Lustre';
        $user->sponsor_id = 1;
        $user->country_id = 224;
        $user->stateprov_id = 18;
        $user->timezone_id = 1;
        $user->password = Hash::make('password');
        $user->phone = '5095166142';
        $user->address = '4387 Sta Rita Rd';
        $user->city = 'California';
        $user->postalcode = '94803';
        $user->bio = "Hello! I'm the administrator here. If you have any questions or need help navigating the platform, feel free to get in touch.";
        $user->status = 'active';
        $user->role = 'admin';
        $user->isOnline = 0;
        $user->last_login = null;
        $user->last_ip = '';
        $user->remember_token = '';
        $user->created_at = now();
        $user->updated_at = now();
        $user->email_verified_at = now();
        $user->deleted_at = null;
        $user->save();

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
