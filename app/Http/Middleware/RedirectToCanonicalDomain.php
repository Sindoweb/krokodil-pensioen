<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectToCanonicalDomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $canonicalHost = 'krokodil.be';

        if ($request->getHost() !== $canonicalHost || ! $request->isSecure()) {
            return redirect()->to(
                'https://'.$canonicalHost.$request->getRequestUri(),
                301
            );
        }

        return $next($request);
    }
}
