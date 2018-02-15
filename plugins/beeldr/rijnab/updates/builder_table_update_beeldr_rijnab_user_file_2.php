<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabUserFile2 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_user_file', function($table)
        {
            $table->dropPrimary(['user_id','fiel_id']);
            $table->renameColumn('fiel_id', 'file_id');
            $table->primary(['user_id','file_id']);
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_user_file', function($table)
        {
            $table->dropPrimary(['user_id','file_id']);
            $table->renameColumn('file_id', 'fiel_id');
            $table->primary(['user_id','fiel_id']);
        });
    }
}
