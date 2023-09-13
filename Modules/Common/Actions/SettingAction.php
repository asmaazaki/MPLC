<?php

namespace Modules\Common\Actions;

use Modules\Common\Entities\Setting;

class SettingAction
{

    public function getAll()
    {
        return Setting::all();
    }

    public function allWithRelation()
    {
        return Setting::with('projectCategories')->get();
    }

    public function getRowById(int $id)
    {
        return Setting::findOrFail($id);
    }

    public function storeNew(array $data)
    {
        return Setting::create($data);
    }

    public function deleteRow(int $id)
    {
        Setting::find($id)->delete();
    }

    public function filterCollectionByKeyAndValue($key, $value)
    {
        return Setting::whereKeyEqualsValue($key, $value)->get();
    }

    public function filterRowByKeyAndValue($key, $value)
    {
        return Setting::whereKeyEqualsValue($key, $value)->first();
    }
}


