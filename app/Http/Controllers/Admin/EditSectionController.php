<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionProfile;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectionprofiles = SectionProfile::all();
        $socials = Social::all();
        return view('admin.edit-section', [
            'sectionprofiles' => $sectionprofiles,
            'socials' => $socials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function aboutme()
    {
        $sectionprofiles = SectionProfile::all();
        return view('admin.edit-section.aboutme', [
            'sectionprofiles' => $sectionprofiles
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the section profile or social media link by its ID

        $socials = Social::find($id);

        // if (!$sectionprofiles) {
        //     // If the sectionprofiles$sectionprofiles is not found, handle the error accordingly (e.g., redirect back with a message)
        // }

        // Get all the data from the form submission
        $data = $request->all();

        // // Validate the data from the form (you can customize the validation rules)
        // $validatedData = $data->validated();

        // Update the sectionprofiles$sectionprofiles profile or social media link with the validated data
        $socials->update($data);

        // Redirect back to the edit page with a success message (you can customize this)
        return redirect()->route('admin.edit-section.index')->with('success', 'Section updated successfully!');
    }

    public function updateaboutme(Request $request, string $id)
    {
        // Find the section profile or social media link by its ID
        $sectionprofiles = SectionProfile::find($id);

        // if (!$sectionprofiles) {
        //     // If the sectionprofiles$sectionprofiles is not found, handle the error accordingly (e.g., redirect back with a message)
        // }

        // Get all the data from the form submission
        $data = $request->all();

        //image validation
        if (!empty($data['image'])) {
            // Check if the old image exists and delete it
            if (Storage::disk('public')->exists($sectionprofiles->image)) {
                Storage::disk('public')->delete($sectionprofiles->image);
            }
            // Store the new image
            $data['image'] = $request->file('image')->store('assets', 'public');
        } else {
            unset($data['image']);
        }
        // // Validate the data from the form (you can customize the validation rules)
        // $validatedData = $data->validated();

        // Update the sectionprofiles$sectionprofiles profile or social media link with the validated data
        $sectionprofiles->update($data);

        // Redirect back to the edit page with a success message (you can customize this)
        return redirect()->route('admin.edit-section.aboutme')->with('success', 'Section updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
