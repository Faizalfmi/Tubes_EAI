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
                        <a>Get Cabang</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-post-characters">
                        <a>Post Cabang</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-put-characters">
                        <a>Put Cabang</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-delete-characters">
                        <a>Delete Cabang</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="content-page p-4">
            <div class="content">
                <div class="overflow-hidden content-section" id="content-get-characters">
                    <h2 class="title-cabang mt-3">Data Cabang</h2>
                    @if ($cabang->count() == 0)
                        <h3>Tidak ada data</h3>
                    @else
                        <table class="table numbered-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Cabang</th>
                                    <th scope="col">Alamat Cabang</th>
                                    <th scope="col">Telepon Cabang</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cabang as $c)
                                    <tr>
                                        <td></td>
                                        <td>{{ $c->nama_cabang }}</td>
                                        <td>{{ $c->alamat_cabang }}</td>
                                        <td>{{ $c->telp_cabang }}</td>

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
                        <code class="higlighted break-word">https://eai.babagigroup.com/api/cabang</code>
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
                                <td>nama_cabang</td>
                                <td>String</td>
                                <td>Nama cabang</td>
                            </tr>
                            <tr>
                                <td>alamat_cabang</td>
                                <td>String</td>
                                <td>Alamat Cabang</td>
                            </tr>
                            <tr>
                                <td>telepon_cabang</td>
                                <td>String</td>
                                <td>Telepon cabang</td>
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
                        <code class="higlighted break-word">https://eai.babagigroup.com/api/cabang</code>
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
                                <td>nama_cabang</td>
                                <td>String</td>
                                <td>Nama cabang yang ingin dimasukkan</td>
                            </tr>
                            <tr>
                                <td>alamat_cabang</td>
                                <td>String</td>
                                <td>Alamat cabang yang ingin dimasukkan</td>
                            </tr>
                            <tr>
                                <td>telepon_cabang</td>
                                <td>String</td>
                                <td>Telepon cabang yang ingin dimasukkan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="content">
                    <div class="overflow-hidden content-section" id="content-put-characters">
                        <h2 class="title-cabang mt-3">Put Cabang</h2>
                        <p>
                            Put url :<br>
                            <code class="higlighted break-word">https://eai.babagigroup.com/api/cabang/{id}/edit</code>
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
                                    <td>nama_cabang</td>
                                    <td>String</td>
                                    <td>Nama cabang yang ingin diupdate</td>
                                </tr>
                                <tr>
                                    <td>alamat_cabang</td>
                                    <td>String</td>
                                    <td>Alamat cabang yang ingin diupdate</td>
                                </tr>
                                <tr>
                                    <td>telepon_cabang</td>
                                    <td>String</td>
                                    <td>Telepon cabang yang ingin diupdate</td>
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
                                    class="higlighted break-word">https://eai.babagigroup.com/api/cabang/{id}/delete</code>
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
                                        <td>nama_cabang</td>
                                        <td>String</td>
                                        <td>Nama cabang yang ingin didelete</td>
                                    </tr>
                                    <tr>
                                        <td>alamat_cabang</td>
                                        <td>String</td>
                                        <td>Alamat cabang yang ingin didelete</td>
                                    </tr>
                                    <tr>
                                        <td>telepon_cabang</td>
                                        <td>String</td>
                                        <td>Telepon cabang yang ingin didelete</td>
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
        @foreach ($cabang as $c)
            <form action="/cabang/{{ $c->id }}" method="post">
                @csrf
                @method('put')
                <div class="modal fade" id="cabang{{ $c->id }}" tabindex="-1"
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
                                        value="{{ $c->nama_cabang }}">
                                </div>
                                <div class="mb-3">
                                    <label for="alamatCabang" class="form-label">Alamat Cabang</label>
                                    <input type="text" class="form-control" name="alamatCabang" id="alamatCabang"
                                        value="{{ $c->alamat_cabang }}">
                                </div>
                                <div class="mb-3">
                                    <label for="teleponCabang" class="form-label">Telepon Cabang</label>
                                    <input type="text" class="form-control" name="teleponCabang" id="teleponCabang"
                                        value="{{ $c->telp_cabang }}">
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
