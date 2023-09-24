<?php

namespace App\Controllers;


use App\Models\MusicModel;
use App\Models\PlaylistModel;
use App\Models\TracksModel;
use App\Controllers\BaseController;

class MusicController extends BaseController
{
    private $music;
    private $playlists;
    private $tracks;

    public function __construct()
{
    $this->music = new MusicModel();
    $this->playlists = new PlaylistModel();
    $this->tracks = new TracksModel();
}

    public function jemalyn()
    {
        $data['playlists'] = $this->playlists->findAll();
        $data['music'] = $this->music->findAll();
        return view ('song',$data);

    }
    public function song($song)
   {
     echo $song;
   }  
  public function index()
    {
        $data['playlists'] = $this->playlists->findAll();
        $data['music'] = $this->music->findAll();
        return view ('song',$data);

    }
    public function create()
    {
        $data = [
            'name'=> $this->request->getPost('name')
        ];
        $this->playlists->insert($data);
        return redirect()->to('/song');
    }
   
    public function playlists($id)
    {
    $playlist = $this->playlists->findAll($id);
      
    if($playlist){
        $tracks =  $this->tracks-> where('playlist_id,$id')->findAll();
        $music = [];
        foreach($tracks as $track){
            $musicItem =$this->music->find($track['music_id']);
            if($musicItem){
             $music[]=$musicItem;
            }
        }
        $data=[
        'playlist' => $playlist,   
        'music' => $music,       
        'playlists' => $this->playlists->findAll(),       
        'tracks' => $tracks,           
        ];
        return view('song',$data);
    }else{
        return redirect()->to('/song');
    }

    }
    public function upload()
{
   
    if ($this->request->getFile('file')) {
        $file = $this->request->getFile('file');
        $title = $this->request->getPost('title');
        $artist = $this->request->getPost('artist');
        $newName = $title . '_' . $artist . '_' . 'mp3';

      
        if ($file->isValid() && !$file->hasMoved()) {
            $file->move(ROOTPATH . 'public/', $newName);

            $data = [
                'title' => $title,
                'artist' => $artist,
                'file_path' => $newName,
            ];

            $this->music->insert($data);
            
            return redirect()->to('/song');
       }
    }
}

  
    public function search()
    {
      
    }
    

   
   
}


