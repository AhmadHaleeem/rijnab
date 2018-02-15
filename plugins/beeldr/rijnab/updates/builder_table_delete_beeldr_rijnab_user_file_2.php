<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBeeldrRijnabUserFile2 extends Migration
{
    public function up()
    {
        Schema::dropIfExists('beeldr_rijnab_user_file');
    }
    
    public function down()
    {
        Schema::create('beeldr_rijnab_user_file', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('file_id');
            $table->integer('user_id');
            $table->primary(['file_id','user_id']);
        });
    }
}
