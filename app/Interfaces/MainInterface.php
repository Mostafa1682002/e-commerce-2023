<?php

namespace App\Interfaces;

interface MainInterface
{
    public function index();
    public function show($id);
    public function create();
    public function store($request);
    public function edit($id);
    public function update($id, $request);
    public function destroy($id);
}