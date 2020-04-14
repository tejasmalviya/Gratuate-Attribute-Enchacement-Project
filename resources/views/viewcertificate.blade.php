<!DOCTYPE html>
<html>
<head>
    <title>ZoneX</title>
</head>
<body>
@foreach($users as $user)

<div class="text-center">
 
<img src="{{asset('uploads/activity/'.$user->image)}}" style="height: 1000px;width: 100%px;" class="mx-auto d-block center">
</div>
@endforeach

</body>
</html>