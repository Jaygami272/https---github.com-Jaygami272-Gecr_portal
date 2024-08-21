<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('roles', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });
        $string="1234@5678#";
        

        Role::create(['name' => 'Admin', 'slug' => 'admin']);
        $r=Role::where('slug','admin')->first();
        
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
        User::create(['name' => 'Jay', 'email' => 'jaygami272@gmail.com','role_id' => $r->id,'password' => Hash::make($string)]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
