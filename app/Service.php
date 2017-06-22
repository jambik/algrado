<?php

namespace App;

use App\Traits\ImageableTrait;
use App\Traits\ResourceableTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Service extends Model
{
    use ImageableTrait, ResourceableTrait, LogsActivity;

    protected $table = 'services';

    protected $fillable = ['name', 'short', 'text', 'image'];

    protected static $logAttributes = ['name', 'short', 'text', 'image'];

    protected $appends = ['img_url'];
}
