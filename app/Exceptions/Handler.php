<?php

namespace App\Exceptions;

use App\Services\TelegramService;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Report or log an exception.
     *
     * @param \Exception $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        if ($exception instanceof ValidationException || $exception instanceof NotFoundHttpException || $exception instanceof MethodNotAllowedException || $exception instanceof MethodNotAllowedHttpException) {

        } else {
            $text = '
            <b>[Lỗi] : </b><code>' . htmlentities($exception->getMessage()) . '</code>
            <b>[File] : </b><code>' . $exception->getFile() . '</code>
            <b>[Line] : </b><code>' . $exception->getLine() . '</code>
            <b>[Request] : </b><code>' . json_encode(request()->all()) . '</code>
            <b>[URL] : </b><a href="' . url()->full() . '">' . url()->full() . '</a>
            <b>[Method] : </b><code>' . request()->method() . '</code>
            <b>[project_token] : </b><code>' . request('project_token') . '</code>';
            TelegramService::sendMessage($text);
        }
    }
}
