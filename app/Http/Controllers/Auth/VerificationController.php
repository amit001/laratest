<?php

namespace App\Http\Controllers\Auth;

<<<<<<< 271cacc194c00a887a3b9c83e6191f39bfee0f08
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
=======
use App\Http\Controllers\Controller;
>>>>>>> Test email first commit
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
<<<<<<< 271cacc194c00a887a3b9c83e6191f39bfee0f08
    | be resent if the user did not receive the original email message.
=======
    | be re-sent if the user didn't receive the original email message.
>>>>>>> Test email first commit
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
