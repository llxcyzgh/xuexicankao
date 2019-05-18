@extends('layouts.default')

@section('title','| Challenges')

@section('content')
    <div class="form-row  align-items-center" style="margin-bottom: 10px">
        <div class="col-auto">
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="search">search</label>
                </div>
                <input type="text" class="form-control" id="search" placeholder="keywords" @keyup="search()">
            </div>
        </div>
    </div>

    <div class="_list">
        <ul class="list-group">
            <li class="list-group-item bg-dark text-light">
                <div class="row">
                    <div class="col-md-1">序号</div>
                    <div class="col-md-8">题目</div>
                    <div class="col-md-3">答案</div>
                </div>
            </li>


            @foreach($list as $value)
                <li class="list-group-item _list-item">
                    <div class="row">
                        <div class="col-md-1">{{ $value['id'] }}</div>
                        <div class="col-md-8">{{ $value['ask'] }}</div>
                        <div class="col-md-3">{{ $value['answer'] }}</div>
                    </div>
                </li>
            @endforeach

        </ul>

        <div class="_pagination">
            {{ $list->links() }}
        </div>

    </div>
@endsection

@section('script')
    <script>
        $(function () {


            $('#search').keyup(function () {
                if (this.value.length > 1) {
                    window.axios.get('/?' + 'keyword=' + this.value).then(function (response) {
                        console.log(response.data);

                        var top = ' <ul class="list-group">' +
                            '            <li class="list-group-item bg-dark text-light">' +
                            '                <div class="row">' +
                            '                    <div class="col-md-1">序号</div>' +
                            '                    <div class="col-md-8">题目</div>' +
                            '                    <div class="col-md-3">答案</div>' +
                            '                </div>\n' +
                            '            </li>';
                        var middle = '';
                        response.data.forEach(function (val) {
                            middle += '<li class="list-group-item _list-item">' +
                                '                    <div class="row">' +
                                '                        <div class="col-md-1">' + val.id + '</div>' +
                                '                        <div class="col-md-8">' + val.ask + '</div>' +
                                '                        <div class="col-md-3">' + val.answer + '</div>' +
                                '                    </div>\n' +
                                '                </li>';
                        });
                        var bottom = '</ul>';

                        $('._list').html(top + middle + bottom);


                    });
                }

            });


        });
    </script>
@endsection


