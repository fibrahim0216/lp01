@extends('layout.master')
@section('title', 'Home Page')
@section('content')
	
<div class="slidersection templete clear">
        <div id="slider">
            <a href="#"><img src="{{asset('images/slideshow/01.jpg')}}" alt="nature 1" title="This is slider one Title or Description" /></a>
            <a href="#"><img src="{{asset('images/slideshow/02.jpg')}}" alt="nature 2" title="This is slider Two Title or Description" /></a>
            <a href="#"><img src="{{asset('images/slideshow/03.jpg')}}" alt="nature 3" title="This is slider three Title or Description" /></a>
            <a href="#"><img src="{{asset('images/slideshow/04.jpg')}}" alt="nature 4" title="This is slider four Title or Description" /></a>
        </div>

</div>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="samepost clear">
				<h2><a href="{{route('single')}}">Our post title here</a></h2>
				<h4>April 10, 2016, 12:30 PM, By <a href="#">Delowar</a></h4>
				 <a href="{{route('single')}}"><img src="{{asset('images/post1.jpg')}}" alt="post image"/></a>
				<p>
					Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
				</p>
				<div class="readmore clear">
					<a href="{{route('single')}}">Read More</a>
				</div>
			</div>
			<div class="samepost clear">
				<h2><a href="{{route('single')}}">Our post title here</a></h2>
				<h4>April 10, 2016, 12:30 PM, By <a href="#">Delowar</a></h4>
				 <a href="{{route('single')}}"><img src="{{asset('images/post2.png')}}" alt="post image"/></a>
				<p>
					Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
				</p>
				<div class="readmore clear">
					<a href="{{route('single')}}">Read More</a>
				</div>
			</div>
			<div class="samepost clear">
				<h2><a href="{{route('single')}}">Our post title here</a></h2>
				<h4>April 10, 2016, 12:30 PM, By <a href="#">Delowar</a></h4>
				 <a href="{{route('single')}}"><img src="{{asset('images/post1.jpg')}}" alt="post image"/></a>
				<p>
					Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
				</p>
				<div class="readmore clear">
					<a href="{{route('single')}}">Read More</a>
				</div>
			</div>

		</div>
@endsection