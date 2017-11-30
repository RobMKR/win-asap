@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">

        <table class="table" style="margin-top: 100px;">
            <thead>
            <tr>
                <th>#</th>
                <th>Անուն</th>
                <th>Ազգանուն</th>
                <th>Հեռախոսահամար</th>
                <th>Էլ. հասցե</th>
                <th>Անձնագիր</th>
                <th>Ակտիվացված</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php $i = 1 + $users->currentPage() * $users->perPage() - $users->perPage(); ?>
                @foreach($users as $_user)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{$_user->name}}</td>
                        <td>{{$_user->surname}}</td>
                        <td>{{$_user->phone}}</td>
                        <td>{{$_user->email}}</td>
                        <td><div class="image" style="width: 100px;"><a href="{{$_user->passport}}" target="_blank"><img style="width: 100%;" src="{{$_user->passport}}" alt=""></a></div></td>
                        <td>{{$_user->active}}</td>
                        <td >{!! !$_user->active ? '<a style="color: #fff" href="/admin/activate/' . $_user->id . '">Ակտիվացնել</a>' : '<a style="color: #fff" href="/admin/deactivate/' . $_user->id . '">Դեակտիվացնել</a>'  !!}</td>
                        <td ><a style="color: #fff" href="/admin/delete/{{$_user->id}}">Հեռացնել</a></td>
                        <?php $i++; ?>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="links">
            {{$users->links()}}
        </div>
    </div>
</div>
@endsection
