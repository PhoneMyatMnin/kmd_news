<div class="container px-5">
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: rgb(0, 64, 255); " >news</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color:black;">
                            Year...
                        </a>
                        <ul class="dropdown-menu">
                            @php
                                $years = range(date('Y'), '2017');
                            @endphp
                            @foreach ($years as $year)
                                <form action="{{ route('news') }}" method="POST">
                                    @csrf
                                    @method('GET')
                                    <input type="text" name="years" value="{{ $year }}" hidden>
                                    <li><button type="submit" class="dropdown-item">{{ $year }}</button></li>
                                </form>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color:black;">
                            Category...
                        </a>
                        <ul class="dropdown-menu">
                            <form action="{{ route('news') }}" method="POST">
                                @csrf
                                @method('GET')
                                <li><button type="submit" class="dropdown-item">All</button></li>
                            </form>
                            <form action="{{ route('news') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="category" value="MEDIA" hidden>
                                <li><button type="submit" class="dropdown-item">Media</button></li>
                            </form>
                            <form action="{{ route('news') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="category" value="CSR" hidden>
                                <li><button type="submit" class="dropdown-item">CSR</button></li>
                            </form>

                            <li>
                            </li>
                        </ul>
                    </li>
                </ul>



            </div>
        </div>
    </nav>
</div>
