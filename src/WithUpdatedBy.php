<?php

namespace Thana\CreateUpdateDeleteBy;

trait WithUpdatedBy
{
    /**
     * Boot the trait.
     *
     * @return void
     */
    public static function bootWithUpdatedBy(): void
    {
        static::updating(static function ($model) {
            $model->updated_by = auth()->id();
        });
    }
}