<?php 

namespace Misfits\Gemeentes\Database\Models; 

use Illuminate\Database\Eloquent\Model; 

/**
 * Class GemeenteHuizen 
 * 
 * @author    Tim Joosten <Topairy@gmail.com>
 * @license   MIT 
 * @copyright 2018 Tim Joosten
 * 
 * @package Misfits\Gemeentes\Database\Models
 */
class GemeenteHuizen extends Model 
{
    /**
     * GemeenteHUizen constructor 
     * 
     * @param  array $attributes 
     * @return void
     */
    public function __construct(array $attributes = []) 
    {
        parent::__construct($attributes); 
        $this->setTable(config('gemeentes.database.tables.gemeente-huizen'));
    }
}