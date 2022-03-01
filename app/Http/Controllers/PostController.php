<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Post;
use App\Models\User;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::find(3);
        $user = User::find(4);
            foreach($request->file('images') as $image)
            {

                $name=$image->getClientOriginalName();
                $image->move(public_path().'/image/', $name);

//                $img = new Images();
//                $img->image = $name;
                $user->images()->create([
                    'image' => $name,
                ]);

            }

            var_dump($post->images);


    }
}
