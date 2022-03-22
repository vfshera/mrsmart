<?php

namespace App\Http\Livewire;

use App\Models\SiteSettings;
use Livewire\Component;

class Settings extends Component
{
    public SiteSettings $siteInfo;
    
    public function update($field){

        $settings = SiteSettings::first();



        var_dump($field);
        // $settings->update([ $field => ])
    }


    public function render()
    {
        return view('livewire.settings');
    }
}