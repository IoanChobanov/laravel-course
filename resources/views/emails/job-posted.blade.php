<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! Your job is now posted.
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your job posting</a>
</p>
