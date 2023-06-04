@extends('template.navbar')
@section('content')

    <body class="one-content-column-version">
        <div class="left-menu">
            <div class="content-logo">
                <div class="logo">
                    <img alt="platform by Emily van den Heever from the Noun Project"
                        title="platform by Emily van den Heever from the Noun Project" src="images/jne.jpeg" height="32" />
                    <span>API Documentation</span>
                </div>
            </div>
            <div class="mobile-menu-closer"></div>
            <div class="content-menu">
                <div class="content-infos">
                    <div class="info"><b>Version:</b> 1.0.0</div>
                    <div class="info"><b>Last Updated:</b> 4 June 2023</div>
                </div>
                <ul>
                    <li class="scroll-to-link active" data-target="content-get-started">
                        <a>GET STARTED</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-get-characters">
                        <a>Get Status</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-post-characters">
                        <a>Post Status</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-put-characters">
                        <a>Put Status</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-delete-characters">
                        <a>Delete Status</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="content-page p-4">
            <div class="content">
                <div class="overflow-hidden content-section" id="content-get-characters">
                    <h2 class="title-cabang mt-3">Data Status</h2>
                    @if ($status->count() == 0)
                        <h3>Tidak ada data</h3>
                    @else
                        <table class="table numbered-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Pemesanan ID</th>
                                    <th scope="col">Cabang ID</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Lokasi Barang</th>
                                    <th scope="col">Alamat Tujuan</th>
                                    <th scope="col">Status Pengiriman</th>
                                    <th scope="col">Tanggal Pengiriman</th>
                                    <th scope="col">Tanggal Penerimaan</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($status as $s)
                                    <tr>
                                        <td></td>
                                        <td>{{ $s->pemesanan_id }}</td>
                                        <td>{{ $s->cabang_id }}</td>
                                        <td>{{ $s->nama_barang }}</td>
                                        <td>{{ $s->lokasi_barang }}</td>
                                        <td>{{ $s->alamat_tujuan }}</td>
                                        <td>{{ $s->status_pengiriman }}</td>
                                        <td>{{ $s->tanggal_pengiriman }}</td>
                                        <td>{{ $s->tanggal_penerimaan }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
            <div class="content">
                <div class="overflow-hidden content-section" id="content-get-characters">
                    <h2 class="title-cabang mt-3">Get Status</h2>
                    <p>
                        Get url :<br>
                        <code class="higlighted break-word">https://eai.babagigroup.com/api/status</code>
                    </p>
                    <br>

                    <h4>QUERY PARAMETERS</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Field</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>pemesanan_id</td>
                                <td>Integer</td>
                                <td>Pemesanan ID</td>
                            </tr>
                            <tr>
                                <td>cabang_id</td>
                                <td>integer</td>
                                <td>Cabang ID</td>
                            </tr>
                            <tr>
                                <td>nama_barang</td>
                                <td>String</td>
                                <td>Nama Barang</td>
                            </tr>
                            <tr>
                                <td>lokasi_barang</td>
                                <td>String</td>
                                <td>Lokasi Barang</td>
                            </tr>
                            <tr>
                                <td>alamat_tujuan</td>
                                <td>String</td>
                                <td>Alamat Tujuan</td>
                            </tr>
                            <tr>
                                <td>status_pengiriman</td>
                                <td>String</td>
                                <td>Status Pengiriman</td>
                            </tr>
                            <tr>
                                <td>tanggal_pengiriman</td>
                                <td>Date</td>
                                <td>Tanggal Pengiriman</td>
                            </tr>
                            <tr>
                                <td>status_penerimaan</td>
                                <td>Date</td>
                                <td>Tanggal Penerimaan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="content">
                <div class="overflow-hidden content-section" id="content-post-characters">
                    <h2 class="title-cabang mt-3">Post Status</h2>
                    <p>
                        Post url :<br>
                        <code class="higlighted break-word">https://eai.babagigroup.com/api/status</code>
                    </p>
                    <br>

                    <h4>QUERY PARAMETERS</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Field</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>pemesanan_id</td>
                                <td>Integer</td>
                                <td>Pemesanan ID</td>
                            </tr>
                            <tr>
                                <td>cabang_id</td>
                                <td>integer</td>
                                <td>Cabang ID</td>
                            </tr>
                            <tr>
                                <td>nama_barang</td>
                                <td>String</td>
                                <td>Nama Barang</td>
                            </tr>
                            <tr>
                                <td>lokasi_barang</td>
                                <td>String</td>
                                <td>Lokasi Barang</td>
                            </tr>
                            <tr>
                                <td>alamat_tujuan</td>
                                <td>String</td>
                                <td>Alamat Tujuan</td>
                            </tr>
                            <tr>
                                <td>status_pengiriman</td>
                                <td>String</td>
                                <td>Status Pengiriman</td>
                            </tr>
                            <tr>
                                <td>tanggal_pengiriman</td>
                                <td>Date</td>
                                <td>Tanggal Pengiriman</td>
                            </tr>
                            <tr>
                                <td>status_penerimaan</td>
                                <td>Date</td>
                                <td>Tanggal Penerimaan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="content">
                    <div class="overflow-hidden content-section" id="content-put-characters">
                        <h2 class="title-cabang mt-3">Put Status</h2>
                        <p>
                            Put url :<br>
                            <code class="higlighted break-word">https://eai.babagigroup.com/api/status/{id}/edit</code>
                        </p>
                        <br>

                        <h4>QUERY PARAMETERS</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>pemesanan_id</td>
                                    <td>Integer</td>
                                    <td>Pemesanan ID</td>
                                </tr>
                                <tr>
                                    <td>cabang_id</td>
                                    <td>integer</td>
                                    <td>Cabang ID</td>
                                </tr>
                                <tr>
                                    <td>nama_barang</td>
                                    <td>String</td>
                                    <td>Nama Barang</td>
                                </tr>
                                <tr>
                                    <td>lokasi_barang</td>
                                    <td>String</td>
                                    <td>Lokasi Barang</td>
                                </tr>
                                <tr>
                                    <td>alamat_tujuan</td>
                                    <td>String</td>
                                    <td>Alamat Tujuan</td>
                                </tr>
                                <tr>
                                    <td>status_pengiriman</td>
                                    <td>String</td>
                                    <td>Status Pengiriman</td>
                                </tr>
                                <tr>
                                    <td>tanggal_pengiriman</td>
                                    <td>Date</td>
                                    <td>Tanggal Pengiriman</td>
                                </tr>
                                <tr>
                                    <td>status_penerimaan</td>
                                    <td>Date</td>
                                    <td>Tanggal Penerimaan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="content">
                        <div class="overflow-hidden content-section" id="content-delete-characters">
                            <h2 class="title-cabang mt-3">Delete Status</h2>
                            <p>
                                Delete url :<br>
                                <code
                                    class="higlighted break-word">https://eai.babagigroup.com/api/status/{id}/delete</code>
                            </p>
                            <br>
                            <h4>QUERY PARAMETERS</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Field</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>pemesanan_id</td>
                                        <td>Integer</td>
                                        <td>Pemesanan ID</td>
                                    </tr>
                                    <tr>
                                        <td>cabang_id</td>
                                        <td>integer</td>
                                        <td>Cabang ID</td>
                                    </tr>
                                    <tr>
                                        <td>nama_barang</td>
                                        <td>String</td>
                                        <td>Nama Barang</td>
                                    </tr>
                                    <tr>
                                        <td>lokasi_barang</td>
                                        <td>String</td>
                                        <td>Lokasi Barang</td>
                                    </tr>
                                    <tr>
                                        <td>alamat_tujuan</td>
                                        <td>String</td>
                                        <td>Alamat Tujuan</td>
                                    </tr>
                                    <tr>
                                        <td>status_pengiriman</td>
                                        <td>String</td>
                                        <td>Status Pengiriman</td>
                                    </tr>
                                    <tr>
                                        <td>tanggal_pengiriman</td>
                                        <td>Date</td>
                                        <td>Tanggal Pengiriman</td>
                                    </tr>
                                    <tr>
                                        <td>status_penerimaan</td>
                                        <td>Date</td>
                                        <td>Tanggal Penerimaan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <script src="js/script.js"></script>
                </div>
            </div>
        </div>

        {{-- <form action="/cabang" method="post">
            @csrf
            <div class="modal fade" id="cabang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Cabang</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="namaCabang" class="form-label">Nama Cabang</label>
                                <input type="text" class="form-control" id="namaCabang" name="namaCabang"
                                    placeholder="Nama Cabang">
                            </div>
                            <div class="mb-3">
                                <label for="alamatCabang" class="form-label">Alamat Cabang</label>
                                <input type="text" class="form-control" name="alamatCabang" id="alamatCabang"
                                    placeholder="Alamat Cabang">
                            </div>
                            <div class="mb-3">
                                <label for="teleponCabang" class="form-label">Telepon Cabang</label>
                                <input type="text" class="form-control" name="teleponCabang" id="teleponCabang"
                                    placeholder="Telepon Cabang">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @foreach ($kurir as $k)
            <form action="/cabang/{{ $k->id }}" method="post">
                @csrf
                @method('put')
                <div class="modal fade" id="cabang{{ $k->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Cabang</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="namaCabang" class="form-label">Nama Cabang</label>
                                    <input type="text" class="form-control" id="namaCabang" name="namaCabang"
                                        value="{{ $k->nama_cabang }}">
                                </div>
                                <div class="mb-3">
                                    <label for="alamatCabang" class="form-label">Alamat Cabang</label>
                                    <input type="text" class="form-control" name="alamatCabang" id="alamatCabang"
                                        value="{{ $k->alamat_cabang }}">
                                </div>
                                <div class="mb-3">
                                    <label for="teleponCabang" class="form-label">Telepon Cabang</label>
                                    <input type="text" class="form-control" name="teleponCabang" id="teleponCabang"
                                        value="{{ $k->telp_cabang }}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endforeach --}}
    </body>
@endsection
