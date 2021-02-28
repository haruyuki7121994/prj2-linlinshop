Hello {{$user->name}}!
Thanks for becoming our member!<br>
We will send you the latest news of our shop to let you know. <br>
But first please verify your email to update your information at the link below: <br>
<a href="{{route('auth.register.confirm', $user->remember_token)}}">Click here to verify email</a>
