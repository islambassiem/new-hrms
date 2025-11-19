<?php

use App\Models\Employee;
use App\Models\JobTitle;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(JobTitle::class, 'job_title_id')->constrained();
            $table->foreignIdFor(Employee::class, 'employee_id')->constrained();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('is_official_position')->default(false);
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained();
            $table->foreignIdFor(User::class, 'updated_by')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
