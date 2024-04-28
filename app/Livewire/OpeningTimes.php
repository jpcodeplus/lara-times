<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\OpeningTime;

class OpeningTimes extends Component
{
    public $openingTimes;

    public function mount()
    {
        $this->loadOpeningTimes();
    }
    
    public function loadOpeningTimes()
    {
        $this->openingTimes = OpeningTime::all();
    }
    
    public function isOpen()
    {
        $now = now();
        foreach ($this->openingTimes as $time) {
            if ($now->greaterThanOrEqualTo($time->open_time) && $now->lessThan($time->close_time)) {
                return true;
            }
        }
        return false;
    }
    
}
