<input type="hidden" name="_token" value="{{ csrf_token() }}">

<label for="name">Title:</label>
<input name="name" type="text" value="{{ $title or '' }}"><br>
<label for="description">Description:</label>
<input name="description" type="text" value="{{ $body or '' }}"><br>
<button type="submit">{{ $buttonName  }}</button><br/>
