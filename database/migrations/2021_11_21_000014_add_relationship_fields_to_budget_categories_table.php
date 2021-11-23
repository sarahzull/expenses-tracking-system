<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBudgetCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('budget_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_5378368')->references('id')->on('users');
        });
    }
}
