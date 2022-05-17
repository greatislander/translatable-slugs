<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * List all organizations.
     *
     * @return View
     */
    public function index(): View
    {
        return view('organizations.index', ['organizations' => Organization::all()]);
    }

    /**
     * Show a single organization.
     *
     * @param Organization $organization
     * @return View
     */
    public function show(Organization $organization): View
    {
        return view('organizations.show', ['organization' => $organization]);
    }
}
