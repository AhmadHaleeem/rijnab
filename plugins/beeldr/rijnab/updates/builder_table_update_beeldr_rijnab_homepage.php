<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabHomepage extends Migration
{
    public function up()
    {
        Schema::rename('beeldr_rijnab_', 'beeldr_rijnab_homepage');
        Schema::table('beeldr_rijnab_homepage', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('beeldr_rijnab_homepage', 'beeldr_rijnab_');
        Schema::table('beeldr_rijnab_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
