<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Bosh sahifa (Portfolio va sening barcha ma'lumotlaring)
    public function index()
    {
        $projects = Project::latest()->get();
        return view('welcome', compact('projects'));
    }

    // Admin panel sahifasi (Loyihalar ro'yxati va qo'shish formasi)
    public function admin()
    {
        $projects = Project::latest()->get();
        return view('admin', compact('projects'));
    }

    // Yangi loyiha qo'shish funksiyasi
    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required',
            'title_en' => 'required',
            'description_uz' => 'required',
            'description_en' => 'required',
            'technologies' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'project_url' => 'nullable|url'
        ]);

        $data = $request->all();

        // Rasm yuklash qismi
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName;
        }

        Project::create($data);

        return redirect()->route('admin')->with('success', 'Loyiha muvaffaqiyatli qo\'shildi!');
    }

    // Loyihani o'chirish funksiyasi
    public function destroy(Project $project)
    {
        if ($project->image && file_exists(public_path($project->image))) {
            unlink(public_path($project->image));
        }
        $project->delete();
        return redirect()->route('admin')->with('success', 'Loyiha o\'chirildi!');
    }
}