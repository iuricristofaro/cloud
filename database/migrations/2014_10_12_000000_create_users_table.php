<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('lastname')->default(false);
            $table->string('username')->unique(); // used for slug.
            $table->string('email');
            $table->string('password', 60);
            $table->integer('rank_id');
            $table->string('register_by')->default(false);
            $table->string('dateofbirth', 60)->default('00/00/0000');
            $table->string('address1')->default(false);
            $table->string('address2')->default(false);
            $table->string('gender')->default('');
            $table->string('city', 200)->default('');
            $table->string('location', 200)->default('');
            $table->string('occuption', 200)->default('');
            $table->string('country', 200)->default('');
            $table->string('state', 200)->default('');
            $table->string('zip', 60)->default('000000');
            $table->string('binary_qualification', 60)->default('no');
            $table->string('active', 60)->default('no');
            $table->string('image', 600)->default('avatar.png');
            $table->string('mobile', 60)->default(false);
            $table->string('skype', 200)->default(false);
            $table->string('twitter')->default(false);
            $table->string('facebook')->default(false);
            $table->string('gplus')->default(false);
            $table->string('linkedin')->default(false);
            $table->string('whatsapp')->default(false);
            $table->text('about');
            $table->string('confirmation_code')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->boolean('admin')->default(false);
            $table->integer('my_package');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
