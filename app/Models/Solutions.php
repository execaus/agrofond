<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solutions extends Model
{
    const FARMING_ANIMAL = 1;
    const FARMING_PLANT = 2;
    const FARMING_BIRD = 3;
    const FARMING_FISH = 4;

    protected $fillable = ['title', 'name', 'file', 'category_id'];

    public static function getCategories()
    {
        return[
          self::FARMING_ANIMAL => 'Животноводство',
          self::FARMING_PLANT => 'Растениеводство',
          self::FARMING_BIRD => 'Птицеводство',
          self::FARMING_FISH => 'Рыбоводство',
        ];
    }

    public static function getCategoriesText($value)
    {
        foreach (static::getCategories() as $key => $category) {
            if ($key === $value) {
                return $category;
            }
        }
    }
}
