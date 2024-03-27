<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'franc',
        'dollar',
        'description',
        'dat_depense',
    ] ;

    protected $table = 'depenses';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
