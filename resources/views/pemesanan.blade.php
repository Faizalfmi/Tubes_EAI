@extends('template.navbar')
@section('content')

    <body class="one-content-column-version">
        <div class="left-menu">
            <div class="content-logo">
                <div class="logo">
                    <img alt="platform by Emily van den Heever from the Noun Project"
                        title="platform by Emily van den Heever from the Noun Project" src="images/logo.png" height="32" />
                    <span>API Documentation</span>
                </div>
                <button class="burger-menu-icon" id="button-menu-mobile">
                    <svg width="34" height="34" viewBox="0 0 100 100">
                        <path class="line line1"
                            d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                        </path>
                        <path class="line line2" d="M 20,50 H 80"></path>
                        <path class="line line3"
                            d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="mobile-menu-closer"></div>
            <div class="content-menu">
                <div class="content-infos">
                    <div class="info"><b>Version:</b> 1.0.5</div>
                    <div class="info"><b>Last Updated:</b> 15th Sep, 2021</div>
                </div>
                <ul>
                    <li class="scroll-to-link active" data-target="content-get-started">
                        <a>GET STARTED</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-get-characters">
                        <a>Get Pemesanan</a>
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
                                    <th scope="col">Action</th>
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
                                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#cabang">View</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                </div>
            </div>

            <script src="js/script.js"></script>
    </body>
@endsection
