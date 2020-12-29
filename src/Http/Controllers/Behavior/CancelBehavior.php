<?php

namespace Recca0120\LaravelPayum\Http\Controllers\Behavior;

use Illuminate\Http\Request;
use Recca0120\LaravelPayum\Service\PayumService;

trait CancelBehavior
{
    /**
     * receiveCancel.
     *
     * @param \Recca0120\LaravelPayum\Service\Payum $payumService
     * @param string $payumToken
     * @return mixed
     */
    public function receiveCancel(PayumService $payumService, Request $request, $payumToken = null)
    {
        return $payumService->receiveCancel($this->checkPayumToken($request, $payumToken));
    }
}
