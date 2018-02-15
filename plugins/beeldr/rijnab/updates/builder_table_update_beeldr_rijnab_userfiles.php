<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabUserfiles extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_userfiles', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_userfiles', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
