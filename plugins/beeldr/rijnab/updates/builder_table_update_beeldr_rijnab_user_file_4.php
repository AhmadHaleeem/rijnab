<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabUserFile4 extends Migration
{
    public function up()
    {
        Schema::rename('beeldr_rijnab_user_files', 'beeldr_rijnab_user_file');
    }
    
    public function down()
    {
        Schema::rename('beeldr_rijnab_user_file', 'beeldr_rijnab_user_files');
    }
}
