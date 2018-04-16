<link href="{{ asset('/css/form.css') }}" rel="stylesheet">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<label for="blog_post_title">Title:</label>
<br />
<input name="blog_post_title" type="text" value="{{ $blog_post_title or '' }}"><br>
<label for="blog_post_body">Body:</label>
<br />
<input name="blog_post_body" type="text" value="{{ $blog_post_body or '' }}"><br>
<button type="submit">&nbsp;{{ $buttonName  }}&nbsp;</button><br/>
