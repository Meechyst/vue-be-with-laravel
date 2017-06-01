@extends('welcome')

@section('content')
<form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <div class="control">
                <label for="name" class="label">Project Name:</label>

                <input type="text" id="name" name="name" class="input" v-model="form.name">

                <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
            </div>

            <div class="control">
                <label for="description" class="label">Project Description:</label>

                <input type="text" id="description" name="description" class="input" v-model="form.description">

                <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
            </div>
              <br>
            <div class="control">
                <button class="button is-primary" :disabled="form.errors.any()">Create</button>
            </div>
        </form>

<br><br>
        @if (count($projects))
        	<h1 class="title is-3">My Projects</h1>
          <hr>

        	<ul>
        		@foreach ($projects as $project)
        			<li>
        				<a href="#">{{ $project->name }}</a>
        			</li>
        		@endforeach
        	</ul>

        	<hr>
        @endif

        @endsection
