<?php
$validatedData = request()->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:users,email|max:255',
    'age' => 'numeric|min:18',
    'username' => 'alpha_num',
    'password' => 'required|string|min:6|confirmed',
    'website' => 'url',
    'birthdate' => 'date',
    'event_date' => 'date_format:Y-m-d',
    'start_date' => 'before:end_date',
    'emergency_contact' => 'required_if:has_emergency_contact,true',
    'address' => 'required_with:city,state',
    'avatar' => 'mimes:jpeg,png|max:2048',
]);
?>