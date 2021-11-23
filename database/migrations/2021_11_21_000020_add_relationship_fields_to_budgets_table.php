<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBudgetsTable extends Migration
{
    public function up()
    {
        Schema::table('budgets', function (Blueprint $table) {
            $table->unsignedBigInteger('budget_category_id')->nullable();
            $table->foreign('budget_category_id', 'budget_category_fk_5182500')->references('id')->on('budget_categories');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_5378449')->references('id')->on('users');
        });
    }
}
