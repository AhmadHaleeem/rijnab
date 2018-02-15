<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabFiles extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_files', function($table)
        {
            $table->text('file');
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_files', function($table)
        {
            $table->dropColumn('file');
        });
    }
}
