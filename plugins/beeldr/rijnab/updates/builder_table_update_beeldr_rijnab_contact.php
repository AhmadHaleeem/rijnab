<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabContact extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_contact', function($table)
        {
            $table->dropColumn('poster');
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_contact', function($table)
        {
            $table->string('poster', 255);
        });
    }
}
