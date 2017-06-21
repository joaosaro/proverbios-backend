<?php namespace Dilexicos\Proverbios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDilexicosProverbios extends Migration
{
    public function up()
    {
        Schema::create('dilexicos_proverbios_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('part1');
            $table->text('part2');
            $table->text('language');
            $table->boolean('status')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dilexicos_proverbios_');
    }
}
