<?php
namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\QueryException;

class Handler extends ExceptionHandler
{

    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        'Symfony\Component\HttpKernel\Exception\HttpException'
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param \Exception $e            
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request            
     * @param \Exception $e            
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
	if ($e instanceof FatalErrorException)
	{
		return response()->view('errors.500', [], 500);
	}
    	else if ($e instanceof QueryException)
    	{
    		return response()->view('errors.500', [], 500);
    	}
        else if ($e instanceof ModelNotFoundException) 
        {
            return parent::render($request, new NotFoundHttpException());
        } 
        else if ($e instanceof NotFoundHttpException) 
        {
            return response()->view('errors.404', [], 404);
        } 
        else 
        {
            return parent::render($request, $e);
        }
        // return parent::render($request, $e);
    }
}
