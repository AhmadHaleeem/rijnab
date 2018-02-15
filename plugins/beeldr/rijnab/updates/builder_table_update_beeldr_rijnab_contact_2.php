<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabContact2 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_contact', function($table)
        {
            $table->text('textarea')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_contact', function($table)
        {
            $table->dropColumn('textarea');
        });
    }
}
