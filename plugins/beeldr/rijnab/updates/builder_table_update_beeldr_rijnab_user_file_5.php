<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabUserFile5 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_user_file', function($table)
        {
            $table->dropPrimary(['user_id','file_id']);
            $table->renameColumn('user_id', 'users_id');
            $table->primary(['users_id','file_id']);
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_user_file', function($table)
        {
            $table->dropPrimary(['users_id','file_id']);
            $table->renameColumn('users_id', 'user_id');
            $table->primary(['user_id','file_id']);
        });
    }
}
