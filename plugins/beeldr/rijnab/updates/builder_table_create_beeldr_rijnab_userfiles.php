<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeeldrRijnabUserfiles extends Migration
{
    public function up()
    {
        Schema::create('beeldr_rijnab_userfiles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('file');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beeldr_rijnab_userfiles');
    }
}
