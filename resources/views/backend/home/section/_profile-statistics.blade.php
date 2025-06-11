<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Jumlah Kunjungan Pasien</h6>
                                    <h6 class="font-extrabold mb-0">112.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Jumlah Pasien Baru</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="bi bi-plus-circle-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Jumlah Tindakan Medis</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="bi bi-bookmark-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Jumlah Obat yang Diresepkan</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tagihan Pasien</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Deskripsi</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Item 1</td>
                                        <td>Deskripsi Item 1</td>
                                        <td>2</td>
                                        <td>Rp50,000</td>
                                        <td>Rp100,000</td>
                                    </tr>
                                    <tr>
                                        <td>Item 2</td>
                                        <td>Deskripsi Item 2</td>
                                        <td>1</td>
                                        <td>Rp75,000</td>
                                        <td>Rp75,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Grafik Jumlah Pegawai</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                            <use xlink:href="{{ asset('assets/backend') }}/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Europe</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-0">862</h5>
                                </div>
                                <div class="col-12">
                                    <div id="chart-europe"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-success" width="32" height="32" fill="blue" style="width:10px">
                                            <use xlink:href="{{ asset('assets/backend') }}/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">America</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-0">375</h5>
                                </div>
                                <div class="col-12">
                                    <div id="chart-america"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-danger" width="32" height="32" fill="blue" style="width:10px">
                                            <use xlink:href="{{ asset('assets/backend') }}/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Indonesia</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-0">1025</h5>
                                </div>
                                <div class="col-12">
                                    <div id="chart-indonesia"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pesan Sistem</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="{{ asset('assets/backend') }}/images/faces/5.jpg">
                                                    </div>
                                                    <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">Congratulations on your graduation!</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="{{ asset('assets/backend') }}/images/faces/2.jpg">
                                                    </div>
                                                    <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">Wow amazing design! Can you make another tutorial for this design?</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="{{ asset('assets/backend') }}/images/faces/1.jpg" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">John Duck</h5>
                            <h6 class="text-muted mb-0">@johnducky</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Doctor Contact Links</h4>
                </div>
                <div class="card-content pb-4">
                    <div class="contact-link d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="{{ asset('assets/backend') }}/images/faces/6.jpg">
                        </div>
                        <div class="name ms-4">
                            <a href="mailto:drsmith@example.com" class="h5 mb-1">Dr. John Smith</a>
                            <p class="text-muted mb-0">@drjohnsmith</p>
                        </div>
                    </div>
                    <div class="contact-link d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="{{ asset('assets/backend') }}/images/faces/7.jpg">
                        </div>
                        <div class="name ms-4">
                            <a href="mailto:drjones@example.com" class="h5 mb-1">Dr. Emily Jones</a>
                            <p class="text-muted mb-0">@dremilyjones</p>
                        </div>
                    </div>
                    <div class="contact-link d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="{{ asset('assets/backend') }}/images/faces/8.jpg">
                        </div>
                        <div class="name ms-4">
                            <a href="mailto:drlee@example.com" class="h5 mb-1">Dr. Michael Lee</a>
                            <p class="text-muted mb-0">@drmichaellee</p>
                        </div>
                    </div>
                    <div class="px-4">
                        <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start Consultation</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Kunjungan Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 &copy; Mazer</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                    href="http://ahmadsaugi.com">A. Saugi</a></p>
        </div>
    </div>
</footer>
</div>
</div>

