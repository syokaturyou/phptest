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
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('todo.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="todo">Todo</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="todo" id="todo">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="deadline">Deadline</label>
              <input class="border py-2 px-3 text-grey-darkest" type="date" name="deadline" id="deadline">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="comment">Comment</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="comment" id="comment">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">
              Create
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection