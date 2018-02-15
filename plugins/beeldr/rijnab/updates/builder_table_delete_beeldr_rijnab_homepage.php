<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBeeldrRijnabHomepage extends Migration
{
    public function up()
    {
        Schema::dropIfExists('beeldr_rijnab_homepage');
    }
    
    public function down()
    {
        Schema::create('beeldr_rijnab_homepage', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('body');
            $table->string('headerimage', 255);
            $table->string('sectionimage', 255);
        });
    }
}
