<?php

namespace App\Domain\Lottery\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    use Cachable;
    use HasFactory;

    protected $table = 'lotteries';

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'slug',
    ];

    public function name(): string
    {
        return $this->getAttribute('name');
    }
}
