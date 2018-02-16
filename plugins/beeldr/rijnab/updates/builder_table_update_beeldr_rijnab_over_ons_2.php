<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabOverOns2 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_over_ons', function($table)
        {
            $table->text('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_over_ons', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
