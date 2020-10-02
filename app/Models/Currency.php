<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    // protected $table = 'currencies';
    // protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function clearCurrencies(){
        $self = new self();
        $self::truncate();
    }

    public function updateCurrencies($data)
    {
        $self = new self();
        $inserted = $self->insert($data);

        return $inserted;
    }

}
