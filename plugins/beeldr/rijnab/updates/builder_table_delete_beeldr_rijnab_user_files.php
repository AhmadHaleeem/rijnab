<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBeeldrRijnabUserFiles extends Migration
{
    public function up()
    {
        Schema::dropIfExists('beeldr_rijnab_user_files');
    }
    
    public function down()
    {
        Schema::create('beeldr_rijnab_user_files', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('user_id');
            $table->integer('file_id');
            $table->primary(['user_id','file_id']);
        });
    }
}
