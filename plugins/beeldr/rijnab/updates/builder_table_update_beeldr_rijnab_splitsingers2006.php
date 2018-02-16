<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabSplitsingers2006 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_splitsingers2006', function($table)
        {
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_splitsingers2006', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
