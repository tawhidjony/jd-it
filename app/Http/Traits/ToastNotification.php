<?php

namespace App\Http\Traits;

trait ToastNotification
{
    public function success($message)
    {
        $this->dispatchBrowserEvent('success', ['message' => $message, 'success'=>'success']);
    }

    public function error($message)
    {
        $this->dispatchBrowserEvent('error', ['message' => $message]);
    }
    public function warning($message)
    {
        $this->dispatchBrowserEvent('warning', ['message' => $message]);
    }
}
