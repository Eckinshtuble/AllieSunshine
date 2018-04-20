<link href="{{ asset('/css/form.css') }}" rel="stylesheet">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<label for="blog_post_title">Title:</label>
<br />
<input id="title" name="blog_post_title" type="text" value="{{ $blog_post_title or '' }}"><br>
<label for="blog_post_body">Body:</label>
<br />
<br />
<p></p>
<textarea cols="25" rows="7" id="textbox" name="blog_post_body">{{$blog_post_body}}</textarea><br>
<br/>
<label for="blog_post_image">Image:</label>
<br />
<input type="file" id="images" name="blog_post_image">
<br />
<button type="submit">&nbsp;{{ $buttonName  }}&nbsp;</button><br/>
