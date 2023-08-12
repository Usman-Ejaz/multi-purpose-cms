<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'auth' => $this->authUserInfo(),
            'scopes' => $this->rolesAndPermissions(),
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
        ]);
    }

    private function authUserInfo()
    {
        $info = [
            'user' => null
        ];

        if (! auth()->check()) {
            return $info;
        }

        $info['user'] = [
            'name' => auth()->user()->name, 
            'email' => auth()->user()->email
        ];

        return $info;
    }

    private function rolesAndPermissions()
    {
        '';
    }
}
