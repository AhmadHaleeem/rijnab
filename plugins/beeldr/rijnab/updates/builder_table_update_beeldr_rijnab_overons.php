<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabOverons extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_overons', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('headerimage');
            $table->dropColumn('bodyimage');
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_overons', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->text('headerimage');
            $table->text('bodyimage');
        });
    }
}
