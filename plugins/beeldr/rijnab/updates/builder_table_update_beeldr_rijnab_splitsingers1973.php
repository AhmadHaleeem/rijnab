<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabSplitsingers1973 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_splitsingers1973', function($table)
        {
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_splitsingers1973', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
