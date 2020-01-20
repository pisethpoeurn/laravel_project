
{{-- @if(count($customers) > 0)
    @foreach ($customers as $customer)
        {{$customer}}
    @endforeach
@else
    Empty Customer!!!
@endif --}}

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E_mail</th>
        </tr>
    </thead>
    @foreach( $customer as $item)   
    <tbody>
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['email']}}</td>
        </tr>
    </tbody>
    @endforeach 
</table>
