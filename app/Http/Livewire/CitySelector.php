<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\City;
use App\Models\Divison;

class CitySelector extends Component {
    public $divisionId;
    public $cities = [];
    public $divisions = [];

    public function mount() {
        $this->divisions = Divison::orderBy( 'divison', 'asc' )->get();
        $this->cities = City::orderBy( 'city', 'asc' )->get();
    }

    public function render() {
        return view( 'livewire.city-selector', [
            'divisions' => $this->divisions,
            'cities' => $this->cities,
        ] );
    }
}
