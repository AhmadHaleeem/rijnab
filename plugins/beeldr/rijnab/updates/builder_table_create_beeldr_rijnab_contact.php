<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeeldrRijnabContact extends Migration
{
    public function up()
    {
        Schema::create('beeldr_rijnab_contact', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('poster');
            $table->text('body');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beeldr_rijnab_contact');
    }
}
