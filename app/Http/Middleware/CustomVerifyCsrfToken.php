<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class CustomVerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        // Add routes/URLs that should bypass CSRF verification
        'api/*',
    ];

    /**
     * Override the tokensMatch method for custom verification logic.
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    protected function tokensMatch($request)
    {
         // Default behavior: Check if CSRF token matches
        $token = $request->session()->token();


        $header = $request->header('X-CSRF-TOKEN') ?: $request->input('_token');
        dd([
            'session_token' => $token,
            'request_token' => $header,
            'custom_validation_result' => $this->customTokenValidation($header),
            'hash_equals_result' => hash_equals($token, $header),
        ]);
        if (hash_equals($token, $header)) {
            return true;
        }

        // Custom logic: Add additional checks (e.g., token validation from database, IP check, etc.)
         if ($this->customTokenValidation($header)) {
            return true;
        }

        return false;
    }

    /**
     * Custom token validation logic.
     *
     * @param string|null $token
     * @return bool
     */
    private function customTokenValidation($token)
    {
        $customToken = session('custom_csrf_token');
        dd([
            'customTokenInSession' => $customToken, // Debugging session value
            'request_token' => $token
        ]);

        return $token === $customToken;
      }
}
