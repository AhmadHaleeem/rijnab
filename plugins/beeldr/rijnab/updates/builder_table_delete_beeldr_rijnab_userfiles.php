<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBeeldrRijnabUserfiles extends Migration
{
    public function up()
    {
        Schema::dropIfExists('beeldr_rijnab_userfiles');
    }
    
    public function down()
    {
        Schema::create('beeldr_rijnab_userfiles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('file');
            $table->text('name')->nullable();
        });
    }
}
