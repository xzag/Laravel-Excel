<?php

namespace Maatwebsite\Excel\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteTemporaryFile implements ShouldQueue
{
    use Queueable;

    /**
     * @var string
     */
    private $tempPath;

    /**
     * @param string      $tempPath
     */
    public function __construct(string $tempPath)
    {
        $this->tempPath = $tempPath;
    }

    public function handle()
    {
        @unlink($this->tempPath);
    }
}
