<?php namespace Beeldr\Rijnab\Models;

use Model;

/**
 * Model
 */
class Handig extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'beeldr_rijnab_handig';

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];
}
