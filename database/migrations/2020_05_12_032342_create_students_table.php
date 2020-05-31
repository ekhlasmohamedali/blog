<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
           
        
$table->bigIncrements('id');
$table->string('gender');
$table->string('student_type');
$table->string('name');
$table->integer('student_ssn');
$table->integer('code');
$table->string('birthday');
$table->string('residence');
$table->string('address');
$table->string('email');
$table->string('mobile');
$table->integer('study_year');
$table->string('collegue');
$table->string('grade');
$table->string('student_image');
$table->string('ssn_image');
$table->string('password');
$table->string('password_sure');
$table->string('father_name');
$table->string('parent_link');
$table->string('father_ssn');
$table->string('father_job'); 
$table->string('phone');
$table->string('father_image');
$table->string('resident');
$table->string('Estimate_last_year');
$table->string('Estimate_percentage');
$table->string('Alazhar_secondaryschool');
$table->string('Total_secondary_Azhar');
$table->string('guarantor_name');
$table->string('guarantor_ssn');
$table->string('guarantor_mobil');
$table->string('guarantor_job');
$table->string('guarantor_image');
$table->string('name_of_father');
$table->string('ssn_of_father');
$table->string('job_of_father');
$table->string('salary');
$table->string('familymember_number');
$table->string('bulding_name');
$table->string('room_id');
$table->string('message');
$table->text('endorsement');

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
        Schema::dropIfExists('students');
    }
}
