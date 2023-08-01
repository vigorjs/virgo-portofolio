<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use App\Models\SectionProfile;
use App\Models\Skill;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
            'socials' => $socials,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function createskills()
    {
        return view('admin.edit-section.createskills');
    }

    public function createportofolio()
    {
        return view('admin.edit-section.createportofolio');
    }

    public function storeskills(Request $request)
    {
        // Validate the form data (you can customize the validation rules)
        $validatedData = $request->validate([
            'skill' => 'required|string|max:255',
            'proficient' => 'required|string|max:255',
        ]);

        // Create a new skill using the validated data
        Skill::create($validatedData);

        // Redirect back to the skills page with a success message
        return redirect()->route('admin.edit-section.skills')->with('success', 'Skill created successfully!');
    }

    public function storeportofolio(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required',
            'detail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url' => 'required|url',
        ]);

        $portofolio = new Portofolio();
        $portofolio->title = $request->input('title');
        $portofolio->description = $request->input('description');
        $portofolio->category = $request->input('category');
        $portofolio->url = $request->input('url');

        // Handle image file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/assets');
            $portofolio->image = basename($imagePath);
        }

        // Handle detail image file upload
        if ($request->hasFile('detail')) {
            $detailImage = $request->file('detail');
            $detailImagePath = $detailImage->store('public/assets');
            $portofolio->detail = basename($detailImagePath);
        }

        $portofolio->save();

        return redirect()->route('admin.edit-section.portofolio')->with('success', 'Portofolio entry created successfully!');
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

    public function skills()
    {
        $skills = Skill::all();
        return view('admin.edit-section.skills', [
            'skills' => $skills,
        ]);
    }

    public function portofolio()
    {
        $portofolio = Portofolio::all();
        return view('admin.edit-section.portofolio', [
            'portofolio' => $portofolio,
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

    public function destroyskills($id)
    {
        // Find the skill by its ID
        $skills = Skill::findOrFail($id);

        // Delete the skill
        $skills->delete();

        // Redirect back to the skills page with a success message
        return redirect()->route('admin.edit-section.skills')->with('successdelete', 'Skill deleted successfully!');
    }

    public function destroyportofolio($id)
    {
        $portofolio = Portofolio::findOrFail($id);

        // Delete the associated image and detail image files from storage
        Storage::delete([
            'public/assets/' . $portofolio->image,
            'public/assets/' . $portofolio->detail,
        ]);

        $portofolio->delete();

        return redirect()->route('admin.edit-section.portofolio')->with('successdelete', 'Portofolio entry deleted successfully!');
    }

    public function sendemail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $messageContent = $request->input('message');

        // Get the email address from SectionProfile model based on your logic
        $sectionprofiles = SectionProfile::find(1); // Replace '1' with the appropriate ID

        if (!$sectionprofiles) {
            // Handle the case where SectionProfile with the given ID is not found
            return redirect()->back()->with('error', 'Email address not found.');
        }

        // Send the email
        Mail::send([], [], function ($emailMessage) use ($name, $email, $subject, $messageContent, $sectionprofiles) {
            $emailMessage->to($sectionprofiles->email)
                ->subject($subject)
                ->setBody("
                    Name: $name \n
                    Email: $email \n
                    Message: $messageContent
                ");
        });

        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
    }

}
