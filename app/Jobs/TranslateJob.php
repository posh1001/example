<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


class TranslateJob implements ShouldQueue
{
    use Dispatchable, Queueable;

    public $customJob;

    public function __construct($customJob)
    {
        $this->customJob = $customJob;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('Translating' . $this->customJob->title . 'to spanish.');
    }
}
