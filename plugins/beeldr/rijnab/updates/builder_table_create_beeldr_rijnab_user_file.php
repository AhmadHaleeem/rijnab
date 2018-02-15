<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeeldrRijnabUserFile extends Migration
{
    public function up()
    {
        Schema::create('beeldr_rijnab_user_file', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('user_id');
            $table->integer('fiel_id');
            $table->primary(['user_id','fiel_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beeldr_rijnab_user_file');
    }
}
