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
                                <h2>Blog</h2>
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
                                <a href="{{ route('blog.create') }}" class="btn btn-primary"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                    </svg></a>
                                <div class="table-wrapper table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h6>Id</h6>
                                                </th>
                                                <th>
                                                    <h6>Judul</h6>
                                                </th>
                                                <th>
                                                    <h6>Slug</h6>
                                                </th>
                                                <th>
                                                    <h6>Kategori</h6>
                                                </th>
                                                <th>
                                                    <h6>Aksi</h6>
                                                </th>
                                            </tr>
                                            <!-- end table row-->
                                        </thead>
                                        <tbody>
                                            @foreach ($blog as $item)
                                                <tr>


                                                    <td>
                                                        <p>{{ $loop->iteration }}</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ $item->title }}</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ $item->title_kategori }}</p>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="{{ route('kategori.edit', $item->id) }}"
                                                                class="text-warning">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-pencil"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                                </svg>
                                                            </a>
                                                            <form action="{{ route('kategori.destroy', $item->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="text-danger">
                                                                    <i class="lni lni-trash-can"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <!-- end table row -->
                                        </tbody>
                                    </table>
                                    <!-- end table -->
                                </div>
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
