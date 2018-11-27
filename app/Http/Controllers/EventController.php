<?php

namespace App\Http\Controllers;

use App\Str;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use UploadImage;
use Dan\UploadImage\Exceptions\UploadImageException;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = "Events list";
        $events = Event::orderby('id','desc')->paginate(15);
       return view('event.events', compact('title', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Events create";
        return view('event.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EventRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $username = Auth::user()->name;
        $file = $request->file('image');
        $newData = $request->all();
        $title = $newData['title'];
        $slug = str_slug($title, '-');
        $newData['slug'] = $slug;
        if(!empty($file)){
        try {
            // Upload and save image.
            $input['image'] = UploadImage::upload($file, 'image')->getImageName();
        } catch (UploadImageException $e) {
        
            return back()->withInput()->withErrors(['image', $e->getMessage()]);
        }
        $newData['img'] = $input['image'];
        }
        
        $newData['created_by'] = $username ;
        Event::create($newData);//заполняем бд
        return redirect('event');  
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
        $event = Event::where('slug', $slug)->first();
        $title = "Event ".$event['title'];
        return view('event.show', compact('title', 'event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit";
        $event = Event::findOrFail($id);;
        
        return view('event.edit', compact('event', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $Event = event::findOrFail($id);
        $file = $request->file('image');
        $newData= $request->all();
        $title = $request->get('title');
        $slug = str_slug($title, '-');
        if(!empty($file)){
            try {
                // Upload and save image.
                $input['image'] = UploadImage::upload($file, 'image')->getImageName();
            } catch (UploadImageException $e) {
            
                return back()->withInput()->withErrors(['image', $e->getMessage()]);
            }
            $newData['img'] = $input['image'];
            }
        $newData['slug']=$slug;
        
        $Event->update($newData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('event');
    }
}
