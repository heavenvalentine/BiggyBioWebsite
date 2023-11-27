<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $announcements = Announcement::latest()->paginate(50);
        return view('announcements.index', compact('announcements'));
    }

    public function announcements_list()
    {
        $announcements = Announcement::latest()->paginate(50);
        return view('announcements.show_announ', compact('announcements'));
    }

    public function announcement_preview()
    {
        $announcements = Announcement::latest()->paginate(50);
        return view('announcements.preview', compact('announcements'));
    }

    public function create()
    {
        return view('announcements.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
            'title'     => 'required|min:2',
            'description'   => 'required|min:2',
            'start'   => 'required|min:6',
            'end'   => 'required|min:4',
            'place'   => 'required|min:2',
            'sponsorship'   => 'required|min:2'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/announcements', $image->hashName());

        //create announcement
        Announcement::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'description'   => $request->description,
            'start'     => $request->start,
            'end'     => $request->end,
            'place'     => $request->place,
            'sponsorship'     => $request->sponsorship
        ]);

        //redirect to index
        return redirect()->route('announcements.index')->with(['success' => 'Add success.']);
    }

    /**
     * edit
     *
     * @param  mixed $announcement
     * @return void
     */
    public function edit(Announcement $announcement)
    {
        return view('announcements.edit', compact('announcement'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $announcement
     * @return void
     */
    public function update(Request $request, Announcement $announcement)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:3000',
            'title'     => 'required|min:2',
            'description'   => 'required|min:10',
            'start'   => 'required|min:6',
            'end'   => 'required|min:4',
            'place'   => 'required|min:2',
            'sponsorship'   => 'required|min:2'
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/announcements', $image->hashName());

            //delete old image
            Storage::delete('public/announcements/'.$announcement->image);

            //update announcement with new image
            $announcement->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'description'   => $request->description,
                'start'     => $request->start,
                'end'     => $request->end,
                'place'     => $request->place,
                'sponsorship'     => $request->sponsorship
            ]);

        } else {

            //update announcement without image
            $announcement->update([
                'title'     => $request->title,
                'description'   => $request->description,
                'start'     => $request->start,
                'end'     => $request->end,
                'place'     => $request->place,
                'sponsorship'     => $request->sponsorship
            ]);
        }

        //redirect to index
        return redirect()->route('announcements.index')->with(['success' => 'Edit suceess.']);
    }

    /**
     * destroy
     *
     * @param  mixed $announcement
     * @return void
     */
    public function destroy(Announcement $announcement)
    {
        //delete image
        Storage::delete('public/announcements/'. $announcement->image);

        //delete announcement
        $announcement->delete();

        //redirect to index
        return redirect()->route('announcements.index')->with(['success' => 'Delete success.']);
    }


}
