<?php

namespace Recca0120\LaravelPayum\Http\Controllers\Behavior;

use Illuminate\Http\Request;
use Recca0120\LaravelPayum\Service\PayumService;

trait AuthorizeBehavior
{
    /**
     * receiveAuthorize.
     *
     * @param \Recca0120\LaravelPayum\Service\Payum $payumService
     * @param string $payumToken
     * @return mixed
     */
    public function receiveAuthorize(PayumService $payumService, Request $request, $payumToken = null)
    {
        return $payumService->receiveAuthorize($this->checkPayumToken($request, $payumToken));
    }
}
