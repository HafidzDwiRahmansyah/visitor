@extends('layout.layout')

@section('title', 'Cam Visitor')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <h3 class="pb-4">List Visitor</h3>
                        <div class="container">
                            <div class="row">
                                @foreach ($data as $item)
                                <div class="col-md-6 mb-3">
                                    <li class="nav-link">
                                        <a type="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                            {{ $loop->iteration }}. <i class="bi bi-person-fill me-2 fs-4"></i> {{
                                            $item->name }} |
                                            {{ $item->no_kartu }}
                                        </a>
                                    </li>
                                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('out', $item->id) }}" method="post">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title fs-5" id="exampleModalLabel">Keterangan
                                                            Visitor</h5>
                                                        <input type="number" name="id" id="id" value="{{ $item->id }}"
                                                            hidden>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-danger">SignOut</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <h3 class="pb-4">Form Register</h3>
                        <div id="video-container">
                            <label for="">Mohon posisikan KTP didalam kotak merah :</label>
                            <video class="mt-2" id="video" autoplay></video>
                            <div id="border"></div>
                        </div>

                        <div id="progress-container" style="display: none;">
                            <p>Sedang Membaca Data...</p>
                            <div class="progress">
                                <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated"
                                    role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="row mt-5 justify-content-center">
                            <div class="col-lg-6">

                                <button class="btn btn-primary mx-auto d-block" id="capture">
                                    <span><i class="bi bi-camera me-2 fs-4"></i> Capture Photo</span>
                                </button>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary mx-auto d-block" id="switch-camera"><i
                                        class="bi bi-arrow-clockwise me-2 fs-4"></i> Switch
                                    Camera</button>
                            </div>
                        </div>
                        <canvas id="canvas" style="display:none;"></canvas>
                        <h2 class="mt-3">Processed Image</h2>
                        <img id="result-image" />
                        <h2>Result</h2>
                        <pre id="result"></pre>
                        <!-- Progress bar element -->
                        {{-- <div id="progress-container" style="display: none;">
                            <div class="progress">
                                <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <!-- Notification if OCR fails -->
                        <div id="ocr-fail" style="display: none;" class="alert alert-danger" role="alert">
                            Data tidak lengkap. Silakan ambil gambar ulang.
                        </div> --}}

                        <h2 class="mt-5">Extracted Data</h2>
                        <form action="/save" method="post" id="data-form">
                            @csrf
                            <label class="form-label" for="nik">NIK:</label>
                            <input class="form-control" type="text" id="nik" name="nik" pattern="[a-zA-Z0-9]+"
                                title="Only alphanumeric characters are allowed." placeholder="nomer nik" />
                            <br>
                            <label class="form-label" for="nama">Nama:</label>
                            <input class="form-control" type="text" id="nama" name="nama" pattern="[a-zA-Z0-9\s]+"
                                title="Only letters, numbers, and spaces are allowed."
                                placeholder="mohon gunakan huruf besar" />
                            <br>
                            <label class="form-label" for="alamat">Alamat:</label>
                            <textarea class="form-control" id="alamat" name="alamat" pattern="[a-zA-Z0-9\s]+"
                                title="Only letters, numbers, and spaces are allowed."
                                placeholder="alamat"></textarea><br>
                            <label class="form-label" for="name_pt">Nama Perusahaan dikunjungi:</label>
                            <input class="form-control" type="text" id="name_pt" name="name_pt"
                                placeholder="nama pt" /><br>
                            <label class="form-label" for="pic">PIC:</label>
                            <input class="form-control" type="text" id="pic" name="pic" placeholder="nama pic" /><br>
                            <label class="form-label" for="tujuan">Tujuan:</label>
                            <input class="form-control" type="text" id="tujuan" name="tujuan"
                                placeholder="tujuan" /><br>
                            <label class="form-label" for="no_kartu">Nomer Kartu:</label>
                            <input class="form-control" type="text" id="no_kartu" name="no_kartu"
                                placeholder="masukan angka" /><br>
                            <br>
                            <button type="submit" class="btn btn-primary mx-auto d-block px-3">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection