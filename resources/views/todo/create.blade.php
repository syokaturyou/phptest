@extends('layouts.master_bootstrap')
@section('title', 'ユーザー編集')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
  {{ __('Create New Todo') }}
</h2>
<div class="py-12">
    
          @include('common.errors')
          <form action="{{ route('todo.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <label for="todo">Todo</label>
              <input type="text" name="todo" id="todo">
            </div>
            <div class="flex flex-col mb-4">
              <label for="deadline">Deadline</label>
              <input type="date" name="deadline" id="deadline">
            </div>
            <div class="flex flex-col mb-4">
              <label for="comment">Comment</label>
              <input type="text" name="comment" id="comment">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">
              Create
            </button>
          </form>
  </div>
@endsection