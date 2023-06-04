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
                        <a>Get Pemesanan</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-post-characters">
                        <a>Post Pemesanan</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-put-characters">
                        <a>Put Pemesanan</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-delete-characters">
                        <a>Delete Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="content-page p-4">
            <div class="content">
                <div class="overflow-hidden content-section" id="content-get-characters">
                    <h2 class="title-cabang mt-3">Data Pemesanan</h2>
                    <!-- Button trigger modal -->
                    @if ($pemesanan->count() == 0)
                        <h3>Tidak ada data</h3>
                    @else
                        <table class="table numbered-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Harga Produk</th>
                                    <th scope="col">Tanggal Pemesanan</th>
                                    <th scope="col">Status Pemesanan</th>
                                    <th scope="col">Nama Customer</th>
                                    <th scope="col">Alamat Customer</th>
                                    <th scope="col">Telepon Customer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pemesanan as $p)
                                    <tr>
                                        <td></td>
                                        <td>{{ $p->nama_produk_pemesanan }}</td>
                                        <td>{{ $p->harga_produk_pemesanan }}</td>
                                        <td>{{ $p->tanggal_pemesanan }}</td>
                                        <td>{{ $p->status_pemesanan }}</td>
                                        <td>{{ $p->nama_customer }}</td>
                                        <td>{{ $p->alamat_customer }}</td>
                                        <td>{{ $p->telp_customer }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                </div>
            </div>
            <div class="content">
                <div class="overflow-hidden content-section" id="content-get-characters">
                    <h2 class="title-cabang mt-3">Get Cabang</h2>
                    <p>
                        Get url :<br>
                        <code class="higlighted break-word">https://eai.babagigroup.com/api/pemesanan</code>
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
                                <td>nama_produk_pemesanan</td>
                                <td>String</td>
                                <td>Nama Produk</td>
                            </tr>
                            <tr>
                                <td>harga_produk_pemesanan</td>
                                <td>Integer</td>
                                <td>Harga Produk</td>
                            </tr>
                            <tr>
                                <td>tanggal_pemesanan</td>
                                <td>Date</td>
                                <td>Tanggal Pemesanan</td>
                            </tr>
                            <tr>
                                <td>status_pemesanan</td>
                                <td>String</td>
                                <td>Status Pemesanan</td>
                            </tr>
                            <tr>
                                <td>nama_customer</td>
                                <td>String</td>
                                <td>Nama Customer</td>
                            </tr>
                            <tr>
                                <td>alamat_customer</td>
                                <td>String</td>
                                <td>Alamat Customer</td>
                            </tr>
                            <tr>
                                <td>telp_customer</td>
                                <td>String</td>
                                <td>Telepon Customer</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="content">
                <div class="overflow-hidden content-section" id="content-post-characters">
                    <h2 class="title-cabang mt-3">Post Cabang</h2>
                    <p>
                        Post url :<br>
                        <code class="higlighted break-word">https://eai.babagigroup.com/api/pemesanan</code>
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
                                <td>nama_produk_pemesanan</td>
                                <td>String</td>
                                <td>Nama Produk</td>
                            </tr>
                            <tr>
                                <td>harga_produk_pemesanan</td>
                                <td>Integer</td>
                                <td>Harga Produk</td>
                            </tr>
                            <tr>
                                <td>tanggal_pemesanan</td>
                                <td>Date</td>
                                <td>Tanggal Pemesanan</td>
                            </tr>
                            <tr>
                                <td>status_pemesanan</td>
                                <td>String</td>
                                <td>Status Pemesanan</td>
                            </tr>
                            <tr>
                                <td>nama_customer</td>
                                <td>String</td>
                                <td>Nama Customer</td>
                            </tr>
                            <tr>
                                <td>alamat_customer</td>
                                <td>String</td>
                                <td>Alamat Customer</td>
                            </tr>
                            <tr>
                                <td>telp_customer</td>
                                <td>String</td>
                                <td>Telepon Customer</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="content">
                    <div class="overflow-hidden content-section" id="content-put-characters">
                        <h2 class="title-cabang mt-3">Put Cabang</h2>
                        <p>
                            Put url :<br>
                            <code class="higlighted break-word">https://eai.babagigroup.com/api/pemesanan/{id}/edit</code>
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
                                    <td>nama_produk_pemesanan</td>
                                    <td>String</td>
                                    <td>Nama Produk</td>
                                </tr>
                                <tr>
                                    <td>harga_produk_pemesanan</td>
                                    <td>Integer</td>
                                    <td>Harga Produk</td>
                                </tr>
                                <tr>
                                    <td>tanggal_pemesanan</td>
                                    <td>Date</td>
                                    <td>Tanggal Pemesanan</td>
                                </tr>
                                <tr>
                                    <td>status_pemesanan</td>
                                    <td>String</td>
                                    <td>Status Pemesanan</td>
                                </tr>
                                <tr>
                                    <td>nama_customer</td>
                                    <td>String</td>
                                    <td>Nama Customer</td>
                                </tr>
                                <tr>
                                    <td>alamat_customer</td>
                                    <td>String</td>
                                    <td>Alamat Customer</td>
                                </tr>
                                <tr>
                                    <td>telp_customer</td>
                                    <td>String</td>
                                    <td>Telepon Customer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="content">
                        <div class="overflow-hidden content-section" id="content-delete-characters">
                            <h2 class="title-cabang mt-3">Delete Cabang</h2>
                            <p>
                                Delete url :<br>
                                <code
                                    class="higlighted break-word">https://eai.babagigroup.com/api/pemesanan/{id}/delete</code>
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
                                        <td>nama_produk_pemesanan</td>
                                        <td>String</td>
                                        <td>Nama Produk</td>
                                    </tr>
                                    <tr>
                                        <td>harga_produk_pemesanan</td>
                                        <td>Integer</td>
                                        <td>Harga Produk</td>
                                    </tr>
                                    <tr>
                                        <td>tanggal_pemesanan</td>
                                        <td>Date</td>
                                        <td>Tanggal Pemesanan</td>
                                    </tr>
                                    <tr>
                                        <td>status_pemesanan</td>
                                        <td>String</td>
                                        <td>Status Pemesanan</td>
                                    </tr>
                                    <tr>
                                        <td>nama_customer</td>
                                        <td>String</td>
                                        <td>Nama Customer</td>
                                    </tr>
                                    <tr>
                                        <td>alamat_customer</td>
                                        <td>String</td>
                                        <td>Alamat Customer</td>
                                    </tr>
                                    <tr>
                                        <td>telp_customer</td>
                                        <td>String</td>
                                        <td>Telepon Customer</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <script src="js/script.js"></script>
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
    </body>
@endsection
