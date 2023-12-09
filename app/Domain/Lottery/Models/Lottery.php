<?php

namespace App\Domain\Lottery\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    use HasFactory;

    protected $table = 'lotteries';

    protected $fillable = [
        'name',
    ];

    public function name(): string
    {
        return $this->getAttribute('name');
    }
}
