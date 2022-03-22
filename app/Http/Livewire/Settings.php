<?php

namespace App\Http\Livewire;

use App\Models\SiteSettings;
use Livewire\Component;

class Settings extends Component
{
    public SiteSettings $siteInfo;

    public $settingField = "Heyyy";
    public $answer = "Answer for Your";
    
    public function editSetting($setting){


        dd($setting);
        
       $this->settingField = $setting;
    }

    public function mount(){
        $this->siteInfo = SiteSettings::first();
    }

    public function render()
    {
        return view('livewire.settings');
    }
}