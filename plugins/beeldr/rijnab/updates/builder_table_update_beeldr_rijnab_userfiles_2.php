<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabUserfiles2 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_userfiles', function($table)
        {
            $table->text('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_userfiles', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
