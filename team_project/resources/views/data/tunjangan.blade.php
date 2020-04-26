@extends('layout.master')
@section('title', 'Data Jumlah Pembagian THR')
@section ('menuTunjangan','active')
@section('content')

    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Bagian</th>
            <th scope="col">Gaji</th>
            <th scope="col">Masa Kerja</th>
            <th scope="col">THR</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pegawai as $tampil)
          <tr>
            @for($i=0; $i<count($tampil); $i++)
              @if($tampil[$i]<2)
                <td>{{ $tampil[$i] }}</td>
              @continue
              @endif
              @if($tampil[$i]<=5)
                <td>{{$tampil[$i]}}</td>
              @continue
              @endif
                <td>{{ $tampil[$i] }}</td>
            @endfor
            {{-- @for($i=0; $i<count($tampil); $i++) --}}
              {{-- <td>{{ $tampil[$i] }}</td> --}}
            @if($tampil[3]<=2)
              <td>{{ $tampil[2]*2 }}
            @elseif($tampil[3]<=5)
              <td>{{ $tampil[2]*3 }}
            @elseif($tampil[3]<=10)
              <td>{{ $tampil[2]*4 }}
            @endif
            {{-- @endfor --}}
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

@endsection