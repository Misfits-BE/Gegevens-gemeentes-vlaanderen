<?php 

namespace Misfits\Gemeentes\Database\Models; 

use Illuminate\Database\Eloquent\Model; 

/**
 * Class Provincies 
 * 
 * @author    Tim Joosten <Topairy@gmail.com>
 * @license   MIT
 * @copyright 2018 Tim Joosten
 * 
 * @package   Misfits\Gemeentes\Database\Models
 */
class Provincies extends Model 
{
    /**
     * Provincies constructor 
     * 
     * @param  array $attributes 
     * @return void
     */
    public function __construct($attributes) 
    {
        parent::__construct($attributes);
        $this->setTable(config('gemeentes.database.tables.provincies'));
    }

    /**
     * Mass-assign velden voor de databank table.
     * 
     * @return void
     */
    protected $fillable = ['name'];
}