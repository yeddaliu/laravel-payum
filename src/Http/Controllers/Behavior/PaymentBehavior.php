<?php

namespace Recca0120\LaravelPayum\Http\Controllers\Behavior;

use Illuminate\Http\Request;

trait PaymentBehavior
{
    use AuthorizeBehavior;
    use CaptureBehavior;
    use CancelBehavior;
    use NotifyBehavior;
    use PayoutBehavior;
    use RefundBehavior;
    use SyncBehavior;

    protected function checkPayumToken(Request $request, $payumToken)
    {
        if (!$payumToken) {
            $payumToken = $request->query('payum_token', null);
        }
        return $payumToken;
    }

}
