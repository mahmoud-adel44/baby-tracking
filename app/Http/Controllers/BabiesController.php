<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssignPartnerRequest;
use App\Http\Requests\BabyRequest;
use App\Models\Baby;
use Illuminate\Http\Request;

class BabiesController extends Controller
{

    public function store(BabyRequest $request)
    {
        return auth()->user()->babies()->create($request->validated());
    }

    public function assignPartners(AssignPartnerRequest $request)
    {
        return auth()->user()->partners()->attach($request->partners);
    }

    public function assignBabySetter(Baby $baby , BabyRequest $request): bool
    {
        return $baby->update($request->validated());
    }

    public function show(Baby $baby): Baby
    {
        return $baby->load([
            'parent.partners',
            'babySetter'
        ]);
    }

}
