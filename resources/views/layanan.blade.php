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
                        <a>Get Layanan</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-post-characters">
                        <a>Post Layanan</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-put-characters">
                        <a>Put Layanan</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-delete-characters">
                        <a>Delete Layanan</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="content-page p-4">
            <div class="content">
                <div class="overflow-hidden content-section" id="content-get-characters">
                    <h2 class="title-cabang mt-3">Data Layanan</h2>
                    @if ($layanan->count() == 0)
                        <h3>Tidak ada data</h3>
                    @else
                        <table class="table numbered-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Layanan</th>
                                    <th scope="col">Berat Barang</th>
                                    <th scope="col">Asal Pengiriman</th>
                                    <th scope="col">Tujuan Pengiriman</th>
                                    <th scope="col">Jarak Pengiriman</th>
                                    <th scope="col">Asuransi Pengiriman</th>
                                    <th scope="col">Biaya Ongkir</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($layanan as $l)
                                    <tr>
                                        <td></td>
                                        <td>{{ $l->nama_layanan }}</td>
                                        <td>{{ $l->berat_barang }} Kg</td>
                                        <td>{{ $l->asal_pengiriman }}</td>
                                        <td>{{ $l->tujuan_pengiriman }}</td>
                                        <td>{{ $l->jarak_pengiriman }}</td>
                                        <td>{{ $l->asuransi_pengiriman }}</td>
                                        <td>{{ $l->biaya_ongkir }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
            <div class="content">
                <div class="overflow-hidden content-section" id="content-get-characters">
                    <h2 class="title-cabang mt-3">Get Layanan</h2>
                    <p>
                        Get url :<br>
                        <code class="higlighted break-word">https://eai.babagigroup.com/api/layanan</code>
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
                                <td>nama_layanan</td>
                                <td>String</td>
                                <td>Nama Layanan</td>
                            </tr>
                            <tr>
                                <td>berat_barang</td>
                                <td>Float</td>
                                <td>Berat Barang</td>
                            </tr>
                            <tr>
                                <td>asal_pengiriman</td>
                                <td>String</td>
                                <td>Asal Pengiriman</td>
                            </tr>
                            <tr>
                                <td>tujuan_pengiriman</td>
                                <td>String</td>
                                <td>Tujuan Pengiriman</td>
                            </tr>
                            <tr>
                                <td>jarak_pengiriman</td>
                                <td>Integer</td>
                                <td>Jarak Pengiriman</td>
                            </tr>
                            <tr>
                                <td>asuransi_pengiriman</td>
                                <td>String</td>
                                <td>Asuransi Pengiriman</td>
                            </tr>
                            <tr>
                                <td>biaya_ongkir</td>
                                <td>Integer</td>
                                <td>Biaya Ongkir</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="content">
                <div class="overflow-hidden content-section" id="content-post-characters">
                    <h2 class="title-cabang mt-3">Post Layanan</h2>
                    <p>
                        Post url :<br>
                        <code class="higlighted break-word">https://eai.babagigroup.com/api/layanan</code>
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
                                <td>nama_layanan</td>
                                <td>String</td>
                                <td>Nama Layanan</td>
                            </tr>
                            <tr>
                                <td>berat_barang</td>
                                <td>Float</td>
                                <td>Berat Barang</td>
                            </tr>
                            <tr>
                                <td>asal_pengiriman</td>
                                <td>String</td>
                                <td>Asal Pengiriman</td>
                            </tr>
                            <tr>
                                <td>tujuan_pengiriman</td>
                                <td>String</td>
                                <td>Tujuan Pengiriman</td>
                            </tr>
                            <tr>
                                <td>jarak_pengiriman</td>
                                <td>Integer</td>
                                <td>Jarak Pengiriman</td>
                            </tr>
                            <tr>
                                <td>asuransi_pengiriman</td>
                                <td>String</td>
                                <td>Asuransi Pengiriman</td>
                            </tr>
                            <tr>
                                <td>biaya_ongkir</td>
                                <td>Integer</td>
                                <td>Biaya Ongkir</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="content">
                    <div class="overflow-hidden content-section" id="content-put-characters">
                        <h2 class="title-cabang mt-3">Put Layanan</h2>
                        <p>
                            Put url :<br>
                            <code class="higlighted break-word">https://eai.babagigroup.com/api/layanan/{id}/edit</code>
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
                                    <td>nama_layanan</td>
                                    <td>String</td>
                                    <td>Nama Layanan</td>
                                </tr>
                                <tr>
                                    <td>berat_barang</td>
                                    <td>Float</td>
                                    <td>Berat Barang</td>
                                </tr>
                                <tr>
                                    <td>asal_pengiriman</td>
                                    <td>String</td>
                                    <td>Asal Pengiriman</td>
                                </tr>
                                <tr>
                                    <td>tujuan_pengiriman</td>
                                    <td>String</td>
                                    <td>Tujuan Pengiriman</td>
                                </tr>
                                <tr>
                                    <td>jarak_pengiriman</td>
                                    <td>Integer</td>
                                    <td>Jarak Pengiriman</td>
                                </tr>
                                <tr>
                                    <td>asuransi_pengiriman</td>
                                    <td>String</td>
                                    <td>Asuransi Pengiriman</td>
                                </tr>
                                <tr>
                                    <td>biaya_ongkir</td>
                                    <td>Integer</td>
                                    <td>Biaya Ongkir</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="content">
                        <div class="overflow-hidden content-section" id="content-delete-characters">
                            <h2 class="title-cabang mt-3">Delete Layanan</h2>
                            <p>
                                Delete url :<br>
                                <code
                                    class="higlighted break-word">https://eai.babagigroup.com/api/layanan/{id}/delete</code>
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
                                        <td>nama_layanan</td>
                                        <td>String</td>
                                        <td>Nama Layanan</td>
                                    </tr>
                                    <tr>
                                        <td>berat_barang</td>
                                        <td>Float</td>
                                        <td>Berat Barang</td>
                                    </tr>
                                    <tr>
                                        <td>asal_pengiriman</td>
                                        <td>String</td>
                                        <td>Asal Pengiriman</td>
                                    </tr>
                                    <tr>
                                        <td>tujuan_pengiriman</td>
                                        <td>String</td>
                                        <td>Tujuan Pengiriman</td>
                                    </tr>
                                    <tr>
                                        <td>jarak_pengiriman</td>
                                        <td>Integer</td>
                                        <td>Jarak Pengiriman</td>
                                    </tr>
                                    <tr>
                                        <td>asuransi_pengiriman</td>
                                        <td>String</td>
                                        <td>Asuransi Pengiriman</td>
                                    </tr>
                                    <tr>
                                        <td>biaya_ongkir</td>
                                        <td>Integer</td>
                                        <td>Biaya Ongkir</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <script src="js/script.js"></script>
                </div>
            </div>
        </div>

    </body>
@endsection
