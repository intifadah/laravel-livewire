<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CascadingDropdown extends Component
{

    public $continents = [];
    public $countries = [];

    public $selectedContinent;
    public $selectedCountry;

    public function mount()
    {
        $this->continents = \App\Models\Continent::all();
    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }

    public function changeContinent()
    {
        sleep(1);
        if ($this->selectedContinent !== '-1') {
            $this->countries = \App\Models\Country::where('continent_id', $this->selectedContinent)->get();
        } else {
            $this->countries = [];
        }
    }
}
