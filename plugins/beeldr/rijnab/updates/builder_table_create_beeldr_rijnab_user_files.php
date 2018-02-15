<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeeldrRijnabUserFiles extends Migration
{
    public function up()
    {
        Schema::create('beeldr_rijnab_user_files', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('user_id');
            $table->integer('file_id');
            $table->primary(['user_id','file_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beeldr_rijnab_user_files');
    }
}
