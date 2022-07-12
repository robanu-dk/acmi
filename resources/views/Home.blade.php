<style>
  .satu{
    padding-top:150px;
    background-image: url('../../gambar/cover.png');
    background-color: black;
    background-repeat: no-repeat;
    height: 100%;
    width:100%;
    background-size: 100%
  }
</style>

@extends('layout\main')

@section('isihome')
<div class="satu">
  <div style="width:60%; margin:auto; padding: auto;">
    <table align="center">
      <tbody>
        <tr>
          <td rowspan="3" style="padding-right:50px">
            <img src="gambar/logo.png" alt="" style="height:300px">
          </td>
          <td style="font-family: 'Bebas Neue', cursive; font-size:80px;">ACMI 2022</td>
        </tr>
        <tr>
          <td style="font-family: 'Inter', sans-serif;font-weight: 600; font-size:25px;">AIRLANGGA COMPETITION OF MOSLEM IDEAS</td>
        </tr>
        <tr>
          <td style="font-family: 'Inter', sans-serif;font-weight: 6400; font-size:18px">ACMI merupakan sebuah kompetisi tingkat nasional yang diselenggarakan oleh UKMKI dengan tujuan untuk mewadahi ide-ide mahasiswa/i muslim di Indonesia</td>
        </tr>
      </tbody>
  </table>
  </div>
</div>

@endsection