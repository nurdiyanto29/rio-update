<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <style>
        .bg-custom {
            background-color: #1f2d3d !important;
            color: white
        }

        .dropdown-menu-lg-n {
            max-width: 700px !important;
            min-width: 480px !important;
            padding: 0;
        }
    </style>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @php
            $now = Carbon\Carbon::now();
            $endOfWeek = $now->copy()->addDays(7);
            
            $kadaluarsa = App\Models\Barang::where('kadaluarsa', '<>', null)
                ->whereDate('kadaluarsa', '>=', $now)
                ->whereDate('kadaluarsa', '<=', $endOfWeek)
                ->get();
            
            
            $barang = App\Models\BarangToko::where('stok', '<=', 5)->get();
            // $kadaluarsa = App\Models\Barang::where('kadaluarsa')->get();
            
            $jumlah = $kadaluarsa->count() + $barang->count()
        @endphp

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                @if ($jumlah)
                <span class="badge badge-warning navbar-badge">{{ $jumlah }}</span>
                @endif

            </a>
            <div class="dropdown-menu dropdown-menu-lg-n dropdown-menu-right">
                <span class="dropdown-item dropdown-header">{{ $jumlah }} Notifications</span>
                <div class="dropdown-divider"></div>

                @foreach ($barang as $item)
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('barang-toko?_idd=' . $item->id) }}" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> {{ $item->barang->nama ?? '' }}
                        <span class="float-right text-muted text-sm">Stok  {{ $item->stok ?? '' }}
                            {{ $item->barang->satuan->parent->nama ?? $item->barang->satuan->nama }}</span>
                    </a>
                @endforeach
                @foreach ($kadaluarsa as $item)
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('barang?_idd=' . $item->id) }}" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> {{ $item->nama ?? '' }} 
                        <span class="float-right text-muted text-sm">Kadaluarsa {{ tgl_s($item->kadaluarsa) ?? '' }}
                        </span>
                    </a>
                @endforeach

            </div>
        </li>
        <li class="nav-item dropdown user user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('dist/img/avatar.jpg') }}" class="user-image img-circle elevation-2"
                    alt="User Image">
                <span class="d-none d-flex float-right justify-content-around align-items-center">
                    <span class="d-block mr-4">{{ Str::ucfirst(Auth::user()->name) }}</span>
                    <svg width="8" height="7" viewBox="0 0 8 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.86603 6.5C4.48113 7.16667 3.51887 7.16667 3.13397 6.5L0.535899 2C0.150999 1.33333 0.632124 0.5 1.40192 0.5L6.59808 0.500001C7.36788 0.500001 7.849 1.33333 7.4641 2L4.86603 6.5Z"
                            fill="#333333" />
                    </svg>
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-custom">
                    <img src="{{ asset('dist/img/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    <p>
                        {{ Str::ucfirst(Auth::user()->name) }}
                        <small style="color: gold"> &#8226; Online</small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div style="padding-bottom: 4px">
                        <a href="{{ url('/profile') }}" class="btn btn-default btn-flat btn-block 1single">Ubah
                            Password</a>
                    </div>
                    <div>
                        <button type="button" onclick="window.location='{{ url('/logout') }}'"
                            class="btn btn-default btn-flat btn-block 1single">Sign out</button>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>
