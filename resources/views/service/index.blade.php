@extends('layouts.general')

@section('content')

<div class="container is-fluied">
  <div class="title">
      Medical Services In Brisbane
  </div>

  <hr>
  <table class="table is-bordered is-narrow">
    <thead class="is-hoverable">
      <tr>
        <th class="text-setup">ID</th>
        <th class="text-setup">Hospital's name</th>
        <th class="text-setup">Description</th>
        <th>Link</th>
        <th>Photo</th>
        <th>rating</th>
      </tr>
    </thead>
    <tbody>
      @foreach($services as $service)
      <tr class="is-hoverable">
        <th>
          {{$service-> id}}
        </th>
        <td>
              <a href="{{url('service/'.$service->id)}}"> {{$service -> service_name}}</a>
        </td>
        <td>
          {{$service -> service_description}}
        </td>
        <td>
          <a href="{{$service -> service_url }}">{{$service -> service_url }}</a>
        </td>
        <td>
          <img class="thumbnail" src="{{$service -> service_photo}}" alt="">
        </td>
        <td>
          <div class="ratings">
              <p class="pull-right">{{$service->rating_count}} reviews</p>
              <p>
	                      <div class="ui heart rating disabled" data-rating="{{  $service->rating_cache }}" data-max-rating="5"></div>

              </p>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
