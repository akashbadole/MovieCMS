<div class="dash-left">
    @foreach($menu as $menuvalue)
    <ul>
        <li class="active"><a href="{{URL::to('/?val='.$menuvalue->category)}}">{{ $menuvalue->category }}</a></li>
    </ul>
    @endforeach
</div>   

