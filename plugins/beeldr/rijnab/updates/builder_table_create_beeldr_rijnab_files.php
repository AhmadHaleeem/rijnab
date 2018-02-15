<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeeldrRijnabFiles extends Migration
{
    public function up()
    {
        Schema::create('beeldr_rijnab_files', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beeldr_rijnab_files');
    }
}
