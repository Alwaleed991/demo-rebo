<p>
    Your job with Title: {{$job->title}} and Salary: {{$job->salary}} has been posted successfuly please click the link below to view it 
</p>
<a href="{{ url('/jobs/'. $job->id ) }}">Click here</a>