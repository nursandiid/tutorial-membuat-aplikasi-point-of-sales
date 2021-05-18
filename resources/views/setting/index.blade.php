@extends('layouts.master')

@section('title')
    Pengaturan
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Pengaturan</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <form action="{{ route('setting.update') }}" method="post" class="form-setting" data-toggle="validator" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="alert alert-info alert-dismissible" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-check"></i> Perubahan berhasil disimpan
                    </div>
                    <div class="form-group row">
                        <label for="nama_perusahaan" class="col-lg-2 control-label">Nama Perusahaan</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-lg-2 control-label">Telepon</label>
                        <div class="col-lg-6">
                            <input type="text" name="telepon" class="form-control" id="telepon" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-lg-2 control-label">Alamat</label>
                        <div class="col-lg-6">
                            <textarea name="alamat" class="form-control" id="alamat" rows="3" required></textarea>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="path_logo" class="col-lg-2 control-label">Logo Perusahaan</label>
                        <div class="col-lg-4">
                            <input type="file" name="path_logo" class="form-control" id="path_logo"
                                onchange="preview('.tampil-logo', this.files[0])">
                            <span class="help-block with-errors"></span>
                            <br>
                            <div class="tampil-logo"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="path_kartu_member" class="col-lg-2 control-label">Kartu Member</label>
                        <div class="col-lg-4">
                            <input type="file" name="path_kartu_member" class="form-control" id="path_kartu_member"
                                onchange="preview('.tampil-kartu-member', this.files[0], 300)">
                            <span class="help-block with-errors"></span>
                            <br>
                            <div class="tampil-kartu-member"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="diskon" class="col-lg-2 control-label">Diskon</label>
                        <div class="col-lg-2">
                            <input type="number" name="diskon" class="form-control" id="diskon" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tipe_nota" class="col-lg-2 control-label">Tipe Nota</label>
                        <div class="col-lg-2">
                            <select name="tipe_nota" class="form-control" id="tipe_nota" required>
                                <option value="1">Nota Kecil</option>
                                <option value="2">Nota Besar</option>
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="box-footer text-right">
                    <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(function () {
        showData();

        $('.form-setting').validator().on('submit', function (e) {
            if (! e.preventDefault()) {
                $.ajax({
                    url: $('.form-setting').attr('action'),
                    type: $('.form-setting').attr('method'),
                    data: new FormData($('.form-setting')[0]),
                    async: false,
                    processData: false,
                    contentType: false
                })
                .done(response => {
                    showData();
                    $('.alert').fadeIn();

                    setTimeout(() => {
                        $('.alert').fadeOut();
                    }, 3000);
                })
                .fail(errors => {
                    alert('Tidak dapat menyimpan data');
                    return;
                });
            }
        });
    });

    function showData() {
        $.get('{{ route('setting.show') }}')
            .done(response => {
                $('[name=nama_perusahaan]').val(response.nama_perusahaan);
                $('[name=telepon]').val(response.telepon);
                $('[name=alamat]').val(response.alamat);
                $('[name=diskon]').val(response.diskon);
                $('[name=tipe_nota]').val(response.tipe_nota);
                $('title').text(response.nama_perusahaan + ' | Pengaturan');
                
                let words = response.nama_perusahaan.split(' ');
                let word  = '';
                words.forEach(w => {
                    word += w.charAt(0);
                });
                $('.logo-mini').text(word);
                $('.logo-lg').text(response.nama_perusahaan);

                $('.tampil-logo').html(`<img src="{{ url('/') }}${response.path_logo}" width="200">`);
                $('.tampil-kartu-member').html(`<img src="{{ url('/') }}${response.path_kartu_member}" width="300">`);
                $('[rel=icon]').attr('href', `{{ url('/') }}/${response.path_logo}`);
            })
            .fail(errors => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }
</script>
@endpush