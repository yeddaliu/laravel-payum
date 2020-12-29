<?php

namespace Recca0120\LaravelPayum\Http\Controllers\Behavior;

use Illuminate\Http\Request;
use Recca0120\LaravelPayum\Service\PayumService;

trait SyncBehavior
{
    /**
     * receiveSync.
     *
     * @param \Recca0120\LaravelPayum\Service\Payum $payumService
     * @param string $payumToken
     * @return mixed
     */
    public function receiveSync(PayumService $payumService, Request $request, $payumToken = null)
    {
        return $payumService->receiveSync($this->checkPayumToken($request, $payumToken));
    }
}
