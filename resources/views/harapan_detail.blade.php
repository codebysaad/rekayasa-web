@extends('layouts.utama')

@section('konten')
    <article>
        <h2>{{ $artikel["judul"] }}</h2>
        <p>{{ $artikel["pesan"] }}</p>
        <?php 
            if($artikel["table"] === "on"){
                echo '
                <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Penilaian</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Indeks</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Presensi</td>
                    <td>100</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Quiz</td>
                    <td>100</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Tugas</td>
                    <td>100</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>UTS</td>
                    <td>100</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>UAS</td>
                    <td>100</td>
                    <td>A</td>
                  </tr>
                </tbody>
              </table>
                ';
            } else {
                echo '
                    <ol>
                        <li>Saya selalu presensi tepat waktu</li>
                        <li>Saya tidak pernah titip absen</li>
                        <li>Saya selalu mengerjakan tugas sesuai instruksi dan tepat waktu</li>
                        <li>Saya tidak pernah melakukan plagiat dalam mengerjakan Quiz, Tugas, UTS, maupun UAS</li>
                        <li>Saya selalu aktif dalam setiap pertemuan</li>
                    </ol>
                ';
            }
        ?>
    </article>
    <a href="/harapan">Kembali</a>
@endsection