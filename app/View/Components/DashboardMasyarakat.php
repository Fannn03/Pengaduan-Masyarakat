<?php

namespace App\View\Components;

use App\Models\Laporan;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class DashboardMasyarakat extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    // public $laporan;

    public function __construct()
    {
        // $this->laporan = Laporan::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = [
            'laporan' => Laporan::where('username', Auth::user()->username)->get()
        ];
        return view('components.dashboard-masyarakat')->with($data);
    }
}
