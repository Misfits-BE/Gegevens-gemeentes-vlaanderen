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

    /**
     * Mass-assign velden voor de databank tabel. 
     * 
     * @return array
     */
    protected $fillable = [
        'street', 'nr', 'bus', 'tel_number', 'fax_number', 'email_address',
    ];
}