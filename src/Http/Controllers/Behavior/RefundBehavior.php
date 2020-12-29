<?php

namespace Recca0120\LaravelPayum\Http\Controllers\Behavior;

use Illuminate\Http\Request;
use Recca0120\LaravelPayum\Service\PayumService;

trait RefundBehavior
{
    /**
     * receiveRefund.
     *
     * @param \Recca0120\LaravelPayum\Service\Payum $payumService
     * @param string $payumToken
     * @return mixed
     */
    public function receiveRefund(PayumService $payumService, Request $request, $payumToken = null)
    {
        return $payumService->receiveRefund($this->checkPayumToken($request, $payumToken));
    }
}
