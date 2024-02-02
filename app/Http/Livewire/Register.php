<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome
 *
 * @author Asip Hamdi
 * Github : axxpxmd
 */

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app');
    }
}
