<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabMijnvve extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_mijnvve', function($table)
        {
            $table->text('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_mijnvve', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
