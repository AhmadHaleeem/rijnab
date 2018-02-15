<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabOverOns extends Migration
{
    public function up()
    {
        Schema::rename('beeldr_rijnab_overons', 'beeldr_rijnab_over_ons');
    }
    
    public function down()
    {
        Schema::rename('beeldr_rijnab_over_ons', 'beeldr_rijnab_overons');
    }
}
