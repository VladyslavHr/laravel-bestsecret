<div class="container">
    <div class=" py-5 chart-size-result-select">
        <div class="table-responsive">
            {{-- <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        @foreach ($guides as $guide)
                            <th scope="col">{{ $guide->title }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sizes as $size)
                    <tr>
                        <th>{{ $size->size }}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}



            {{-- <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        @foreach ($guides as $guide)
                            <th scope="col">{{ $guide->title }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sizes as $size)
                        @foreach ($defenitions as $defenition)
                        <tr>
                            <td>{{ $defenition->title }}</td>
                            <td>{{ $size->size }}</td>
                        </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table> --}}


            {{-- <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        @foreach ($guides as $guide)
                            <th scope="col">{{ $guide->title }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($defenitions as $defenition)
                        <tr>
                            <td>{{ $defenition->title }}</td>
                            @foreach ($chartSizes as $size)
                                <td>{{ $size->size }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table> --}}



            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        @foreach ($guides as $guide)
                            <th scope="col">{{ $guide->title }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($defenitions as $defenition)
                        <tr>
                            <td>{{ $defenition->title }}</td>
                            @foreach ($guides as $guide)
                                @php
                                    $size = $chartSizes
                                        ->where('chart_size_defenition_id', $defenition->id)
                                        ->where('chart_size_guide_id', $guide->id)
                                        ->first();
                                @endphp
                                <td>{{ $size ? $size->size : '-' }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>


            {{-- <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        @foreach ($sizes as $size)
                            <th scope="col">{{ $size->guide->title }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sizes as $size)
                        <tr>
                            <th scope="row">{{ $size->defenition->title }}</th>
                            <td>{{ $size->size }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table> --}}
        </div>
    </div>
</div>
