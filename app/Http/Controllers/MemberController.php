<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Rizal',
            'Budi',
            'Citra',
            'Dewi',
            'Eko'
        ];

        return view('members.index', compact('members'));
    }
}