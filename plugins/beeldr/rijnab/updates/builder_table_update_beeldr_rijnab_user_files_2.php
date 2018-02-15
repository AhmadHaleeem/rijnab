<?php namespace Beeldr\Rijnab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrRijnabUserFiles2 extends Migration
{
    public function up()
    {
        Schema::rename('beeldr_rijnab_user_file', 'beeldr_rijnab_user_files');
    }
    
    public function down()
    {
        Schema::rename('beeldr_rijnab_user_files', 'beeldr_rijnab_user_file');
    }
}
