<?php

namespace App\Observers;

use App\Models\Book;
use App\Models\Library;
use App\Models\Student;

class LibraryObserver
{
    /**
     * Handle the Library "created" event.
     *
     * @param  \App\Models\Library  $library
     * @return void
     */
    public function created(Library $library)
    {
    }

    /**
     * Handle the Library "updated" event.
     *
     * @param  \App\Models\Library  $library
     * @return void
     */
    public function updated(Library $library)
    {
       //
    }

    /**
     * Handle the Library "deleted" event.
     *
     * @param  \App\Models\Library  $library
     * @return void
     */
    public function deleted(Library $library)
    {
        //
    }

    /**
     * Handle the Library "restored" event.
     *
     * @param  \App\Models\Library  $library
     * @return void
     */
    public function restored(Library $library)
    {
        //
    }

    /**
     * Handle the Library "force deleted" event.
     *
     * @param  \App\Models\Library  $library
     * @return void
     */
    public function forceDeleted(Library $library)
    {
        //
    }
}
