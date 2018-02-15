<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabOnzeDiensten extends Migration
{
    public function up()
    {
        Schema::table('beeldr_rijnab_onze_diensten', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_rijnab_onze_diensten', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
