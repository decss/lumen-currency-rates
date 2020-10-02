<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    // protected $table = 'currencies';
    // protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function updateCurrencies($data)
    {
        $self = new self();
        $self::truncate();

        $cnt = [
            'total' => count($data),
            'created' => 0,
        ];
        foreach ($data as $item) {
            if (is_array($item)) {
                $self->create($item);
                $cnt['created']++;
            }
        }
        echo intval($cnt['created']) . ' of ' . intval($cnt['total']) . " currencies was updated\r\n";
    }

}
