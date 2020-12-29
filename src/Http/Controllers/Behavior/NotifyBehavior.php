<?php

namespace Recca0120\LaravelPayum\Http\Controllers\Behavior;

use Illuminate\Http\Request;
use Recca0120\LaravelPayum\Service\PayumService;

trait NotifyBehavior
{
    /**
     * receiveNotify.
     *
     * @param \Recca0120\LaravelPayum\Service\Payum $payumService
     * @param string $payumToken
     * @return mixed
     */
    public function receiveNotify(PayumService $payumService, Request $request, $payumToken = null)
    {
        return $payumService->receiveNotify($this->checkPayumToken($request, $payumToken));
    }

    /**
     * receiveNotifyUnsafe.
     *
     * @param \Recca0120\LaravelPayum\Service\Payum $payumService
     * @param string $gatewayName
     * @return mixed
     */
    public function receiveNotifyUnsafe(PayumService $payumService, Request $request, $gatewayName)
    {
        return $payumService->receiveNotifyUnsafe($gatewayName);
    }
}
