@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-3 pr-5 pl-5">
            <img class="rounded-circle" src="https://instagram.fsgn2-2.fna.fbcdn.net/v/t51.2885-19/s150x150/54247724_389983655169271_7614518609653530624_n.jpg?_nc_ht=instagram.fsgn2-2.fna.fbcdn.net&_nc_ohc=ZSfTStA3B2UAX_1Obf1&oh=550c4a59821fffcf7155d88fa65b503c&oe=5E97EE19" alt="">
        </div>
        <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>4</strong> bài viết</div>
                <div class="pr-5"><strong>87</strong> người theo dõi                </div>
                <div class="pr-5">Đang theo dõi <strong>118</strong> người dùng</div>
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a class="font-weight-bold text-decoration-none" href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://instagram.fsgn2-3.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/30593699_188057848517446_8961208504417255424_n.jpg?_nc_ht=instagram.fsgn2-3.fna.fbcdn.net&_nc_cat=110&_nc_ohc=Bs63iE9EP2kAX8GNHdc&oh=b3d624eedda1a5455346fc8e82507970&oe=5E8F3310" alt="">
        </div>
        <div class="col-4">
            <img class="w-100"src="https://instagram.fsgn2-3.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/30593699_188057848517446_8961208504417255424_n.jpg?_nc_ht=instagram.fsgn2-3.fna.fbcdn.net&_nc_cat=110&_nc_ohc=Bs63iE9EP2kAX8GNHdc&oh=b3d624eedda1a5455346fc8e82507970&oe=5E8F3310" alt="">
        </div>
        <div class="col-4">
            <img class="w-100"src="https://instagram.fsgn2-3.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/30593699_188057848517446_8961208504417255424_n.jpg?_nc_ht=instagram.fsgn2-3.fna.fbcdn.net&_nc_cat=110&_nc_ohc=Bs63iE9EP2kAX8GNHdc&oh=b3d624eedda1a5455346fc8e82507970&oe=5E8F3310" alt="">
        </div>
    </div>
</div>
@endsection
