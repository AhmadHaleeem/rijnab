<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeeldrRijnabOnzeDiensten extends Migration
{
    public function up()
    {
        Schema::create('beeldr_rijnab_onze_diensten', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('body');
            $table->text('headerimage');
            $table->text('bodyimage');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beeldr_rijnab_onze_diensten');
    }
}
