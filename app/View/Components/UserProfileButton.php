<?php

namespace App\View\Components; 

use Auth;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserProfileButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $isUserConnected;

    public function __construct()
    {
        $this->isUserConnected = Auth::user() != null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-profile-button');
    }
}
