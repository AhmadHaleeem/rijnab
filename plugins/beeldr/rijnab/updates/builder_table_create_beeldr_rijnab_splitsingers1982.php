<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeeldrRijnabSplitsingers1982 extends Migration
{
    public function up()
    {
        Schema::create('beeldr_rijnab_splitsingers1982', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('body');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beeldr_rijnab_splitsingers1982');
    }
}
