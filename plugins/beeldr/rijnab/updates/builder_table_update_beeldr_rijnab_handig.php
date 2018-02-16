<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabHandig extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_handig', function($table)
        {
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_handig', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
