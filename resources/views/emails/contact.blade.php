<h2>New Appointment Request</h2>

<p><strong>Name:</strong> {{ $name }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Phone:</strong> {{ $phone }}</p>
<p><strong>Service Needed:</strong> {{ $need }}</p>

@if(!empty($comment))
    <p><strong>Comment:</strong><br>{{ $comment }}</p>
@endif

<p style="margin-top:20px;">
  <small>Submitted at: {{ $submitted_at }}</small>
</p>
