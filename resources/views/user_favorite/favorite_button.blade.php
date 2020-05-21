@if (Auth::id() != $micropost->id)
    @if (Auth::user()->is_favorites($micropost->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete', 'class' => 'form-inline']) !!}
            <!--<input class="btn btn-primary" type="submit" value="Favorite">-->
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger col-sm offset-md-2"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id], 'class' => 'form-inline']) !!}
            <!--<input class="btn btn-primary" type="submit" value="Favorite">-->
            {!! Form::submit('favorite', ['class' => "btn btn-primary col-sm offset-md-2"]) !!}
        {!! Form::close() !!}
    @endif
@endif