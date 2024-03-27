<?php

namespace App\Observers;

use App\Models\Frais;
use Illuminate\Support\Facades\Auth;

class FraisObserver
{
    /**
     * Handle the Frais "created" event.
     *
     * @param  \App\Models\Frais  $frais
     * @return void
     */
    public function created(Frais $frais)
    {
        //
    }

    /**
     * Handle the Frais "updated" event.
     *
     * @param  \App\Models\Frais  $frais
     * @return void
     */
    public function updated(Frais $frais)
    {
        //
    }

    /**
     * Handle the Frais "deleted" event.
     *
     * @param  \App\Models\Frais  $frais
     * @return void
     */
    public function deleted(Frais $frais)
    {
        //
    }

    /**
     * Handle the Frais "restored" event.
     *
     * @param  \App\Models\Frais  $frais
     * @return void
     */
    public function restored(Frais $frais)
    {
        //
    }

    /**
     * Handle the Frais "force deleted" event.
     *
     * @param  \App\Models\Frais  $frais
     * @return void
     */
    public function forceDeleted(Frais $frais)
    {
        //
    }
}
