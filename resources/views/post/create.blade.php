@extends('layouts.app')

@section('content')

<div class="panel-body">

    @include('layouts.error_card_list')

    <div class="d-flex flex-column align-items-center mt-5">
        <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
            <!-- エラー表示部分 -->
            <div class="card">
                <div class="card-header">
                    投稿の新規作成
                </div>
                <div class="card-body">
                    <form class="upload" id="new_post" enctype="multipart/form-data" action="{{route('posts.store')}}" accept-charset="UTF-8" method="POST">
                        @csrf
                        <div class="md-form">
                            <input class="form-control" placeholder="タイトル" name="title" value="{{old('title')}}" />
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="10" placeholder="本文" value="{{old('message')}}"></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="commit" value="投稿する" class="btn btn-primary w-25" data-disable-with="投稿する" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
