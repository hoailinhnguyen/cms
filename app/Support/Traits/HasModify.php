<?php

namespace App\Support\Traits;

/**
 * @method static creating(\Closure $param)
 * @method static updating(\Closure $param)
 * @method static deleting(\Closure $param)
 */
trait HasModify
{
    protected static function boot()
    {
        parent::boot();
        $user = auth()->user();
        static::creating(function ($model) use ($user) {
            $schemaBuilder = $model->getConnection()->getSchemaBuilder();
            if ($user && $schemaBuilder->hasColumn($model->getTable(), 'created_by')) {
                $model->created_by = optional($user)->id;
            }
        });

        static::updating(function ($model) use ($user) {
            $schemaBuilder = $model->getConnection()->getSchemaBuilder();
            if ($schemaBuilder->hasColumn($model->getTable(), 'updated_by')) {
                $model->updated_by = optional($user)->id;
            }
        });

        static::deleting(function ($model) use ($user) {
            $schemaBuilder = $model->getConnection()->getSchemaBuilder();
            if ($schemaBuilder->hasColumn($model->getTable(), 'deleted_by')) {
                $model->deleted_by = optional($user)->id;
                $model->save();
            }
        });
    }
}
