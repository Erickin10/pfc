AQUI FICA A PAGINA DAS ONGS
@php
    use App\Models\Ong;
@endphp


@foreach ($endereco_ong as $endereco)

@php
{{$ong = Ong::where([['id_Endereco', 'like', $endereco->id]])->first();}}
@endphp


@if($endereco)



    <p ><strong>Nome: </strong>{{$ong->name}}<br>
        <strong>telefone: </strong>{{$ong->phone}}<br>
        <strong>email: </strong>{{$ong->email}}<br>
        <strong>Cnpj: </strong>{{$ong->cnpj}}<br>

        <strong>cidade: </strong>{{$endereco->cidade}}<br>
        <strong>bairro: </strong>{{$endereco->bairro}}<br>
        <strong>rua: </strong>{{$endereco->rua}}<br>
        <strong>numero: </strong>{{$endereco->numero}}</p><br><br>



@endif


@endforeach




