<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabNieuw extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_nieuw', function($table)
        {
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_nieuw', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
