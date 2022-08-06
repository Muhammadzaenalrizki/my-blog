@extends('templates.index')
@section('content')
    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== section start ========== -->
        <section class="section">
            <div class="container-fluid">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="title mb-30">
                                <h2>Create Kategori</h2>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->

                <!-- ========== tables-wrapper start ========== -->
                <div class="tables-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-style mb-30">
                                <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-style-1">
                                        <label>Judul</label>
                                        <input type="text" name="judul" placeholder="Judul">
                                    </div>
                                    <!-- end input -->
                                    <div class="input-style-2">
                                        <input type="file" name="file">
                                    </div>
                                    <!-- end input -->
                                    <div class="input-style-3">
                                        <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                            </svg></button>
                                    </div>
                                    <!-- end input -->
                                </form>


                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->


                </div>
                <!-- ========== tables-wrapper end ========== -->
            </div>
        </section>
        <!-- ========== section end ========== -->
        <x-footer></x-footer>

    </main>
    <!-- ======== main-wrapper end =========== -->
@endsection
