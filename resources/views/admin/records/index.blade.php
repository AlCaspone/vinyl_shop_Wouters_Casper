@extends('layouts.template')

@section('title', 'Contact us')

@section('main')
    <h1>Records</h1>
    <ul>
        <?php
        foreach ($records as $record){
            echo "<li> $record </li>";
            //echo '<li>' . $record . '</li>';
        }
    ?>
    </ul>
@endsection