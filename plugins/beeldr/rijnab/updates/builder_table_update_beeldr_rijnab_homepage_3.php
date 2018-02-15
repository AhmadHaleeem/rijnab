<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabHomepage3 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_homepage', function($table)
        {
            $table->string('headerimage');
            $table->string('sectionimage');
            $table->dropColumn('title');
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_homepage', function($table)
        {
            $table->dropColumn('headerimage');
            $table->dropColumn('sectionimage');
            $table->text('title');
        });
    }
}
