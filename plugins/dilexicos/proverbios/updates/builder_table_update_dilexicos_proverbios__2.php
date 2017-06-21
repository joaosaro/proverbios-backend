<?php namespace Dilexicos\Proverbios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDilexicosProverbios2 extends Migration
{
    public function up()
    {
        Schema::table('dilexicos_proverbios_', function($table)
        {
            $table->renameColumn('status', 'active');
        });
    }
    
    public function down()
    {
        Schema::table('dilexicos_proverbios_', function($table)
        {
            $table->renameColumn('active', 'status');
        });
    }
}
