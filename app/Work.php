<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;
use Storage;
use File;
use Image;

class Work extends Model
{
    protected static $baseDir = 'public/work/';

    protected static $thumbnailDir = 'public/work/tn/';

    protected static $thumbnailSize = '200';

    protected $fillable = [
       'title', 'description', 'url', 'github', 'preview'
    ];

    public static function create(array $attributes = [])
    {
        $file = $attributes['preview'];
        $filename = sha1(microtime() . $file->getClientOriginalName() . mt_rand()) . '.' . $file->getClientOriginalExtension();
        if ($file) {
            Storage::put(static::$baseDir . $filename, File::get($file));
            static::makeThumbnail($filename);
        }

        $attributes['preview'] = $filename;

        return parent::create($attributes);
    }

    protected static function makeThumbnail($filename)
    {
        Image::make(storage_path('app/' . static::$baseDir . $filename))
            ->fit(static::$thumbnailSize)
            ->save(storage_path('app/' . static::$thumbnailDir . $filename));
    }

    public function getPreviewTn()
    {
        return '/work-images/' . $this->preview . '/tn';
    }

    public static function getThumbnailDir()
    {
        return static::$thumbnailDir;
    }

}
