<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBeeldrRijnabFiles extends Migration
{
    public function up()
    {
        Schema::dropIfExists('beeldr_rijnab_files');
    }
    
    public function down()
    {
        Schema::create('beeldr_rijnab_files', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('file');
            $table->primary(['id']);
        });
    }
}
