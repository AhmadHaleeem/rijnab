<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabVveVrijwilliger2 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_vve_vrijwilliger', function($table)
        {
            $table->string('title', 65535)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_vve_vrijwilliger', function($table)
        {
            $table->text('title')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}