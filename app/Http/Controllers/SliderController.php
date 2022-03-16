<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('backend.pages.slider.index', ["sliders" => $sliders]);
    }

    public function create()
    {
        return view('backend.pages.slider.create-edit');
    }

    public function store(Request $request)
    {
        // return $request;
        if ($request->id) {
            $slider = Slider::findOrFail($request->id);
            $old_file = $slider->slider;
            $slider->fill($request->all());

            if ($request->hasFile('slider')) {
                if (Storage::exists($old_file)) {
                    Storage::delete($old_file);
                }
                $slider->slider = Storage::put('slider', $request->file('slider'));
            }
            $slider->update();
        } else {
            $slider = new Slider();
            $slider->fill($request->all());

            if ($request->hasFile('slider')) {
                $slider->slider = Storage::put('slider', $request->file('slider'));
            }
            $slider->save();
        }

        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('backend.pages.slider.index', ["sliders" => $sliders]);
    }

    public function show(Slider $slider)
    {
    }

    public function edit(Slider $slider)
    {
        return view('backend.pages.slider.create-edit', ["slider" => $slider]);
    }

    public function update(Request $request, Slider $slider)
    {
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('backend.pages.slider.index', ["sliders" => $sliders]);
    }
}
