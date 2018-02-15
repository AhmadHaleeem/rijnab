<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabUserFile7 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_user_file', function($table)
        {
            $table->dropPrimary(['user_id','file_id']);
            $table->primary(['file_id','user_id']);
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_user_file', function($table)
        {
            $table->dropPrimary(['file_id','user_id']);
            $table->primary(['user_id','file_id']);
        });
    }
}
