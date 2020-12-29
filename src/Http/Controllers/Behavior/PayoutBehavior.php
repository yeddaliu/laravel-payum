<?php

namespace Recca0120\LaravelPayum\Http\Controllers\Behavior;

use Illuminate\Http\Request;
use Recca0120\LaravelPayum\Service\PayumService;

trait PayoutBehavior
{
    /**
     * receivePayout.
     *
     * @param \Recca0120\LaravelPayum\Service\Payum $payumService
     * @param string $payumToken
     * @return mixed
     */
    public function receivePayout(PayumService $payumService, Request $request, $payumToken = null)
    {
        return $payumService->receivePayout($this->checkPayumToken($request, $payumToken));
    }
}
