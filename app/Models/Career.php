<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'title',
        'experience',
        'deadline',
        'job_description',
        'status',
    ];

    protected $appends=['published'];

    public function getPublishedAttribute(){
        $currentTime =  Carbon::parse( $this->attributes['created_at'])->diffInDays( $this->attributes['deadline']);
        return Carbon::createFromTimeStamp(strtotime($currentTime) )->diffForHumans();
    }
}
