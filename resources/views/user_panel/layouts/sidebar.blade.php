<div class="dash-left">
    @foreach($menu as $menuvalue)
    <ul>
        <li class="active"><a href="{{url('/')}}">{{ $menuvalue->category }}</a></li>
    </ul>
    @endforeach
</div>   