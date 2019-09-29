<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Overrides method in class 'AuthenticatesUsers'
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    // Showing LoginForm
    public function showLoginForm()
    {
        $view = property_exists($this, 'loginView')
            ? $this->loginView : 'auth.authenticate';
        if (view()->exists($view)) {
            return view($view);
        }
        /**
         * seve the previous page in the session
         */
        $previous_url = Session::get('_previous.url');
        $ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $ref = rtrim($ref, '/');
        if ($previous_url != url('login')) {
            Session::put('referrer', $ref);
            if ($previous_url == $ref) {
                Session::put('url.intended', $ref);
            }
        }
        /**
         * seve the previous page in the session
         * end
         */
        return view('auth.login');
    }
    /**
     * Overrides method in class 'AuthenticatesUsers'
     *
     * @param Request $request
     * @param $throttles
     *
     * @return \Illuminate\Http\RedirectResponse
     */

     // Checking if the user was Authenicated
    protected function handleUserWasAuthenticated(Request $request, $throttles)
    {
        if ($throttles) {
            $this->clearLoginAttempts($request);
        }
        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::guard($this->getGuard())->user());
        }
        return redirect()->intended(Session::pull('referrer'));
    }

}