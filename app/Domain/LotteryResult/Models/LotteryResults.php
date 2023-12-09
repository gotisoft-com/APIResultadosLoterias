<?php

namespace App\Domain\LotteryResult\Models;

use App\Concerns\Traits\HasFingerPrint;
use Illuminate\Database\Eloquent\Model;

class LotteryResults extends Model
{
    use HasFingerPrint;

    protected $table = 'lottery_results';

    protected $hidden = [
        'id',
        'finger_print',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'lottery',
        'slug',
        'date',
        'result',
        'series',
        'finger_print',
    ];

    public function lottery(): string
    {
        return $this->getAttribute('lottery');
    }

    public function date(): string
    {
        return $this->getAttribute('date');
    }

    public function result(): string
    {
        return $this->getAttribute('result');
    }

    public function series(): string
    {
        return $this->getAttribute('series');
    }

    public function fingerPrint(): string
    {
        return $this->getAttribute('finger_print');
    }
}
