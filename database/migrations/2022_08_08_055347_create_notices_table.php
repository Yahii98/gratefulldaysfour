
$table->notice_status;<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('notice_status')->nullable();
            $table->string('notice_link_ok',30)->nullable();
            $table->string('notice_link_ng',30)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('company_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('position_id')->nullable();
            $table->bigInteger('office_id')->nullable();
            $table->bigInteger('department_id')->nullable();
            $table->string('notice_title',20)->nullable();
            $table->bigInteger('notice_type_id')->nullable();
            $table->text('notice_to')->nullable();  /*This could be array*/
            $table->text('notice_content')->nullable();
            $table->string('notice_attached_filename',30)->nullable();
            $table->timestamp('notice_created_at')->nullable();
            $table->datetime('notice_duedate')->nullable();
            $table->bitInteger('approved_user_id')->nullable();
            $table->tinyInteger('notice_deleted')->default(0);    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notices');
    }
};
