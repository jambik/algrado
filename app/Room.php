<?php

namespace App;

use App\Traits\ImageableTrait;
use App\Traits\PhotoableTrait;
use App\Traits\ResourceableTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Room extends Model
{
    use ImageableTrait, PhotoableTrait, ResourceableTrait, LogsActivity;

    protected $table = 'rooms';

    protected $fillable = ['name', 'spec', 'description', 'capacity', 'price', 'text', 'note', 'image'];

    protected static $logAttributes = ['name', 'spec', 'description', 'capacity', 'price', 'text', 'note', 'image'];

    protected $appends = ['img_url', 'photo_url'];
}
