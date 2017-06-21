<?php namespace Dilexicos\Proverbios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDilexicosProverbios extends Migration
{
    public function up()
    {
        Schema::table('dilexicos_proverbios_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dilexicos_proverbios_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->unsigned()->change();
        });
    }
}
