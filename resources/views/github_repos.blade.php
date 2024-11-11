<h1>Public Repositories of Octocat</h1>
@foreach($repos as $repo)
<p>{{ $repo['name'] }} - {{ $repo['description'] }}</p>
@endforeach