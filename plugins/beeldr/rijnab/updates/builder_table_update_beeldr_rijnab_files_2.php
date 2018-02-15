<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabFiles2 extends Migration
{
    public function up()
    {
        Schema::rename('beeldr_rijnab_userfiles', 'beeldr_rijnab_files');
    }
    
    public function down()
    {
        Schema::rename('beeldr_rijnab_files', 'beeldr_rijnab_userfiles');
    }
}
