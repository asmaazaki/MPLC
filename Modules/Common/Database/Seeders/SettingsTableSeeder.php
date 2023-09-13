<?php

namespace Modules\Common\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Common\Entities\Setting;
use Modules\Common\Enums\SettingCategory;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'key' => 'site_name_en',
                'title' => 'Site Name (English)',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::SETTING
            ],
            [
                'key' => 'site_name_ar',
                'title' => 'Site Name (Arabic)',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::SETTING
            ],
            [
                'key' => 'about_en',
                'title' => 'About (English)',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::SETTING
            ],
            [
                'key' => 'about_ar',
                'title' => 'About (Arabic)',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::SETTING
            ],
            [
                'key' => 'address_en',
                'title' => 'Address (English)',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::SETTING
            ],
            [
                'key' => 'address_ar',
                'title' => 'Address (Arabic)',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::SETTING
            ],
            [
                'key' => 'phone',
                'title' => 'Phone',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::CONTACT_INFO
            ],
            [
                'key' => 'whats_app',
                'title' => 'Whatapp Number',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::CONTACT_INFO
            ],
            [
                'key' => 'facebook_link',
                'title' => 'Facebook Profile',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::CONTACT_INFO
            ],
            [
                'key' => 'twitter_link',
                'title' => 'Twitter Profile',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::CONTACT_INFO
            ],
            [
                'key' => 'linkedin_link',
                'title' => 'Linkedin Profile',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::CONTACT_INFO
            ],
            [
                'key' => 'github_link',
                'title' => 'Github Profile',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::CONTACT_INFO
            ],
            [
                'key' => 'logo',
                'title' => 'Logo',
                'value' => 'lorem ipsum',
                'input_type' => 'file',
                'extra_data' => '',
                'category' => SettingCategory::SETTING
            ],
            [
                'key' => 'meta_keywords',
                'title' => 'Meta Keywords',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::SEO
            ],
            [
                'key' => 'meta_description',
                'title' => 'Meta Description',
                'value' => 'lorem ipsum',
                'input_type' => 'text',
                'extra_data' => '',
                'category' => SettingCategory::SEO
            ],
        ];

        Setting::insert($data);
    }
}
