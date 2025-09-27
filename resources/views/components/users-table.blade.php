@props(['users'])
<div>
    <table class="table">
        <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        </tr>
        @foreach ($users as $user)
                <tr>
                    <td>{{$user['id']}}</td>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['age']}}</td>
                </tr>
        @endforeach
      

    </table>
</div>