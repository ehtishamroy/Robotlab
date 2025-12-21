<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\AsSource;

class Setting extends Model
{
    use HasFactory, AsSource, Attachable;

    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
    ];

    /**
     * Get setting value by key.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function getByKey(string $key, $default = null)
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    /**
     * Set setting value by key.
     *
     * @param string $key
     * @param mixed $value
     * @param string $group
     * @param string $type
     * @return Setting
     */
    public static function setByKey(string $key, $value, string $group = 'general', string $type = 'text')
    {
        return self::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'group' => $group, 'type' => $type]
        );
    }
}
