<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBeeldrRijnabFiles2 extends Migration
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
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('body');
        });
    }
}
