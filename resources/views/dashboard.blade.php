@foreach($users as $user)
    <h1>{{ $user['name'] }}</h1>

@endforeach

@copyright {{ date('Y')}}

{{-- <?php  foreach ($users as $user) {?>
    <h1> <?= $user['name'] ?> </h1>
<?php }?> --}}
