<?php

namespace App\Http\Controllers\Admin;
use App\Models\Event;
use App\Models\News;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function index()
    {

        $event = Event::orderBy('position')->get();
        return view('admin.events')->with('event',$event);
    }
    public function new()
    {
        return view('admin.newevent');
    }
    public function new_news()
    {
        return view('admin.news');
    }
    public function store(Request $request)
    {
        $event=new Event();        //instance of eloquent model created
        $event->title= $request->input('title');
        $event->organiser= $request->input('organiser');
        $event->venue= $request->input('venue');
        $event->description= $request->input('description');
        $event->date= $request->input('date');


        $event->save();
        return redirect('/events')->with('success','event added');
    }
    public function store_news(Request $request)
    {
        $news=new News();        //instance of eloquent model created
        $news->title= $request->input('title');
        $news->content= $request->input('content');
        $news->occurance= $request->input('occurance');

        $news->save();
        return redirect('/news')->with('success','news added');
    }
    public function showAddImagesForm($eventId)
    {
        $event = Event::findOrFail($eventId);
        return view('admin.add_images', compact('event'));
    }

    public function uploadImages(Request $request, $eventId)
    {
        $event = Event::findOrFail($eventId);

        // Handle main picture upload
        $mainPicturePath = $request->file('main_picture')->store('images');
        $event->images()->create(['path' => $mainPicturePath, 'is_main' => true,'disk' => 'public_images']);

        // Handle additional pictures upload
        if ($request->hasFile('additional_pictures')) {
            foreach ($request->file('additional_pictures') as $file) {
                $additionalPicturePath = $file->store('images');
                $event->images()->create(['path' => $additionalPicturePath, 'is_main' => false,'disk' => 'public_images']);
            }
        }

        return redirect('/events')->with('success', 'Images uploaded successfully.');
    }





    public function edit_user(Request $request,$id) 
    {
        $user=User::findOrFail($id);
        return view('admin.editUser')->with('user',$user);
    }
    public function update_user(Request $request,$id) 
    {
        $user=User::find($id);
        $user->name=$request->input('username');
        $user->usertype=$request->input('usertype');
        $user->update();
        return redirect('/dashboard')->with('status','data is updated successfully');
    }
    public function warden()
    {
        return view('warden.base');
    }
}
