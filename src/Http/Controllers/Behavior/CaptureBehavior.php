<?php

namespace Recca0120\LaravelPayum\Http\Controllers\Behavior;

use Illuminate\Http\Request;
use Recca0120\LaravelPayum\Service\PayumService;

trait CaptureBehavior
{
    /**
     * receiveCapture.
     *
     * @param \Recca0120\LaravelPayum\Service\Payum $payumService
     * @param string $payumToken
     * @return mixed
     */
    public function receiveCapture(PayumService $payumService, Request $request, $payumToken = null)
    {
        return $payumService->receiveCapture($this->checkPayumToken($request, $payumToken));
    }
}
