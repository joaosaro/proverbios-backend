<?php namespace Dilexicos\Proverbios\Models;

use Model;

/**
 * Model
 */
class Proverbios extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];


    public $fillable = ['active', 'part1', 'part2', 'language'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dilexicos_proverbios_';
}
