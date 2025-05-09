<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')

    @include('admin.partials.css')
</head>

<body>
    <div class="app-wrapper">

        {{-- <div class="loader-wrapper">
            <div class="app-loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div> --}}

        <!-- Menu Navigation starts -->
        {{-- @include('admin.partials.nav') --}}
        <livewire:admin.sidebar.master />
        <!-- Menu Navigation ends -->


        <div class="app-content">
            <div class="">

                <!-- Header Section starts -->
                @include('admin.partials.header')
                <!-- Header Section ends -->

                <!-- Body main section starts -->
                <main>
                    <div class="container-fluid">
                        <!-- Blank start -->
                        <div class="row">
                            <div class="col-sm-7 col-6">
                                <h4 class="main-title">Blank</h4>
                            </div>
                            <div class="col-sm-5 col-6 mt-2">
                                <ul class="breadcrumb breadcrumb-start float-end">
                                    <li class="d-flex">
                                        <i class="ti ti-server f-s-16"></i>
                                        <a href="#" class="f-s-14"> <span class="d-none d-sm-block">Other
                                                pages</span></a>
                                    </li>
                                    <li class="d-flex active">
                                        <a href="#" class="f-s-14">Blank</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Blank end -->
                        <div class="row">
                            <!-- Default Card start -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Default Card</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6>Where does it come from ?</h6>
                                        <p class="text-secondary"> Contrary to popular belief, Lorem Ipsum is not
                                            simply random text. It has
                                            roots in a piece of classical Latin literature from 45 BC, making it over
                                            2000 years old. Richard
                                            McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                                            up one of the more
                                            obscure Latin words, consectetur, from a Lorem Ipsum passage, and going
                                            through the cites of the
                                            word in classical literature, discovered the undoubtable source. Lorem Ipsum
                                            comes from sections
                                            1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good
                                            and Evil) by Cicero,
                                            written in 45 BC. This book is a treatise on the theory of ethics, very
                                            popular during the
                                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",
                                            comes from a line in
                                            section 1.10.32 </p>
                                    </div>
                                    <div class="card-footer">
                                        <p class="float-start text-secondary p-t-10">1 days Ago</p>
                                        <button class="btn btn-primary float-end"> Read More </button>
                                    </div>

                                </div>
                            </div>

                            <!-- Default Card end -->
                        </div>
                    </div>
                </main>
                <!-- Body main section ends -->

                <!-- tap on top -->
                <div class="go-top">
                    <span class="progress-value">
                        <i class="ti ti-arrow-up"></i>
                    </span>
                </div>

                <!-- Footer Section starts-->
                @include('admin.partials.footer')
                <!-- Footer Section ends-->

            </div>
        </div>
    </div>
    <!-- essential   -->

    @include('admin.partials.script')

</body>

</html>
