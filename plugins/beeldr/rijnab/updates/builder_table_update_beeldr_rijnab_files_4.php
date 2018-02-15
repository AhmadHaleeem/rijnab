<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabFiles4 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_files', function($table)
        {
            $table->dropColumn('users_id');
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_files', function($table)
        {
            $table->integer('users_id');
        });
    }
}
