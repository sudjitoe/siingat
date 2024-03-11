<div>
    <div class="breadcrumb-wrapper">
        <h1>Kendaraan</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="mdi mdi-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    Kendaraan
                </li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Data Kendaraan</h2>
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nomor Polisi</th>
                                <th scope="col">Jenis Kendaraan</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Tahunan</th>
                                <th scope="col">Lima Tahunan</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($kendaraans as $kendaraan)
                                <td>{{ $kendaraan->id }}</td>
                                <td>{{ $kendaraan->nopol }}</td>
                                <td>{{ $kendaraan->jenis }}</td>
                                <td>{{ $kendaraan->merk }}</td>
                                <td>{{ $kendaraan->tahunan }}</td>
                                <td>{{ $kendaraan->lima_tahunan }}</td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
