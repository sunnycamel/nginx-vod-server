<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Video;
use App\Http\Controllers\Controller as AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class VideoController extends AppBaseController
{
    /**
     * Display a listing of the Video.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
         $videos = Video::all();

         return view('videos.index')
              ->with('videos', $videos);
    }

    /**
     * Show the form for creating a new Video.
     *
     * @return Response
     */
    public function create()
    {
         return view('videos.create');
    }

    /**
     * Store a newly created Video in storage.
     *
     * @param CreateVideoRequest $request
     *
     * @return Response
     */
    public function store(CreateVideoRequest $request)
    {
        $input = $request->all();
        $video_url = '';
        $thumb_picture_url = '';

        $video_path = '';
        if($request->hasFile('video_url')){
             $name = $request->file('video_url')->getClientOriginalName();
             $video_path = $request->video_url->storeAs('movie', $name, 'public');             
             $video_url = config('app.url') . ':' . config('app.video_service_port') . '/' . $video_path;
        }

        if($request->hasFile('thumb_picture_url')){
             $name = $request->file('thumb_picture_url')->getClientOriginalName();
             $thumb_picture_url = config('app.url') . ':' . config('app.http_service_port') . '/' . $request->thumb_picture_url->storeAs('thumb_pictures', $name, 'public');
        }
        else{
             $ffmpeg = FFMpeg\FFMpeg::create();
             $ffmpeg->open(public_path() . '/' . $video_path );
             $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(20));
             $frame->save(public_path() . '/' . $video_path . '.jpg');
        }

        
        
        $video = new Video;
        $video->title = $input['title'];
        $video->description = $input['description'];
        $video->video_url = $video_url;
        $video->thumb_picture_url = $thumb_picture_url;
        $video->save();

        Flash::success('Video saved successfully.');

        return redirect(route('videos.index'));
    }

    /**
     * Display the specified Video.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
         $video = Video::find($id);

        if (empty($video)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

        return view('videos.show')->with('video', $video);
    }

    /**
     * Show the form for editing the specified Video.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
         $video = Video::find($id);

        if (empty($video)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

      
        return view('videos.edit')->with('video', $video);
    }

    /**
     * Update the specified Video in storage.
     *
     * @param  int              $id
     * @param UpdateVideoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVideoRequest $request)
    {
         $video = Video::find($id);

        if (empty($video)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

        $input = $request->all();
        
        $video->title = $input['title'];
        $video->description = $input['description'];
        $video->save();
        
        Flash::success('Video updated successfully.');

        return redirect(route('videos.index'));
    }

    /**
     * Remove the specified Video from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
         $video = Video::find($id);

        if (empty($video)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

        $video->delete();

        Flash::success('Video deleted successfully.');

        return redirect(route('videos.index'));
    }
}
