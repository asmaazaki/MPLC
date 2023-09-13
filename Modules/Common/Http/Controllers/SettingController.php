<?php

namespace Modules\Common\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Common\Actions\SettingAction;
use Modules\Common\Enums\SettingCategory;
use Modules\Common\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    public function __construct(protected SettingAction $settingAction)
    {
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $settings = [
            'setting'      => $this->settingAction->filterCollectionByKeyAndValue('category', SettingCategory::SETTING->value),
            'seo'          => $this->settingAction->filterCollectionByKeyAndValue('category', SettingCategory::SEO->value),
            'contact_info' => $this->settingAction->filterCollectionByKeyAndValue('category', SettingCategory::CONTACT_INFO->value)
        ];

        return view('common::setting.index', compact('settings'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $setting = $this->settingAction->getRowById($id);
        return view('common::setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateSettingRequest $request)
    {
        $data = $request->settings;

        foreach ($data as $key => $value) {
            $setting = $this->settingAction->filterRowByKeyAndValue('key', $key);
            $setting->value = $value;
            $setting->save();
        }

        if (isset($data['logo'])) {
            $setting = $this->settingAction->filterRowByKeyAndValue('key', 'logo');
            $imageName = upload_image($data['logo'], 'images');
            $setting->value = $imageName;
            $setting->save();
        }

        return redirect()->route('admin.setting.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->settingAction->deleteRow($id);
        return redirect()->route('admin.setting.index');
    }
}
