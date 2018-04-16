<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 2018-01-16
 * Time: 4:01 AM
 */
?>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}<br/>
    @endforeach
@endif