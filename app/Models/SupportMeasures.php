<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportMeasures extends Model
{
    const SUPPORT_FINANCIAL = 1;
    const SUPPORT_PROPERTY = 2;
    const SUPPORT_ADMINISTRATIVE = 3;

    protected $fillable = ['title', 'text', 'image', 'file', 'support_type'];

    public static function getTypes()
    {
        return[
            self::SUPPORT_FINANCIAL => 'Финансовая поддержка',
            self::SUPPORT_PROPERTY => 'Имущественная поддержка',
            self::SUPPORT_ADMINISTRATIVE => 'Административная поддержка',
        ];
    }

    public static function getTypesText($value)
    {
        foreach (static::getTypes() as $key => $type) {
            if ($key === $value) {
                return $type;
            }
        }
    }
}
