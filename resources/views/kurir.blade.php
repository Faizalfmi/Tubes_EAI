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
                        <a>Get Kurir</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-post-characters">
                        <a>Post Kurir</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-put-characters">
                        <a>Put Kurir</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-delete-characters">
                        <a>Delete Kurir</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="content-page p-4">
            <div class="content">
                <div class="overflow-hidden content-section" id="content-get-characters">
                    <h2 class="title-cabang mt-3">Data Kurir</h2>
                    @if ($kurir->count() == 0)
                        <h3>Tidak ada data</h3>
                    @else
                        <table class="table numbered-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kurir</th>
                                    <th scope="col">Status ID</th>
                                    <th scope="col">Layanan ID</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kurir as $k)
                                    <tr>
                                        <td></td>
                                        <td>{{ $k->nama_kurir }}</td>
                                        <td>{{ $k->status_id }}</td>
                                        <td>{{ $k->layanan_id }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
            <div class="content">
                <div class="overflow-hidden content-section" id="content-get-characters">
                    <h2 class="title-cabang mt-3">Get Kurir</h2>
                    <p>
                        Get url :<br>
                        <code class="higlighted break-word">https://eai.babagigroup.com/api/kurir</code>
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
                                <td>nama_kurir</td>
                                <td>String</td>
                                <td>Nama kurir</td>
                            </tr>
                            <tr>
                                <td>status_id</td>
                                <td>integer</td>
                                <td>Status ID</td>
                            </tr>
                            <tr>
                                <td>layanan_id</td>
                                <td>String</td>
                                <td>Layanan ID</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="content">
                <div class="overflow-hidden content-section" id="content-post-characters">
                    <h2 class="title-cabang mt-3">Post Kurir</h2>
                    <p>
                        Post url :<br>
                        <code class="higlighted break-word">https://eai.babagigroup.com/api/kurir</code>
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
                                <td>nama_kurir</td>
                                <td>String</td>
                                <td>Nama kurir</td>
                            </tr>
                            <tr>
                                <td>status_id</td>
                                <td>integer</td>
                                <td>Status ID</td>
                            </tr>
                            <tr>
                                <td>layanan_id</td>
                                <td>String</td>
                                <td>Layanan ID</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="content">
                    <div class="overflow-hidden content-section" id="content-put-characters">
                        <h2 class="title-cabang mt-3">Put Kurir</h2>
                        <p>
                            Put url :<br>
                            <code class="higlighted break-word">https://eai.babagigroup.com/api/kurir/{id}/edit</code>
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
                                    <td>nama_kurir</td>
                                    <td>String</td>
                                    <td>Nama kurir</td>
                                </tr>
                                <tr>
                                    <td>status_id</td>
                                    <td>integer</td>
                                    <td>Status ID</td>
                                </tr>
                                <tr>
                                    <td>layanan_id</td>
                                    <td>String</td>
                                    <td>Layanan ID</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="content">
                        <div class="overflow-hidden content-section" id="content-delete-characters">
                            <h2 class="title-cabang mt-3">Delete Kurir</h2>
                            <p>
                                Delete url :<br>
                                <code class="higlighted break-word">https://eai.babagigroup.com/api/kurir/{id}/delete</code>
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
                                        <td>nama_kurir</td>
                                        <td>String</td>
                                        <td>Nama kurir</td>
                                    </tr>
                                    <tr>
                                        <td>status_id</td>
                                        <td>integer</td>
                                        <td>Status ID</td>
                                    </tr>
                                    <tr>
                                        <td>layanan_id</td>
                                        <td>String</td>
                                        <td>Layanan ID</td>
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
