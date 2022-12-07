@if ( isset($datas) && count($datas) > 0 )
    @foreach ( $datas as $dataName => $dataValue )
        {!! $dataName . "='" . $dataValue . "'" !!}
    @endforeach
@endif
