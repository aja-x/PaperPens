<div class="section">
@if (count($hasil))
<div class="card-panel green white-text">Hasil pencarian : {{$keyword}}</div>
    @foreach($hasil as $data)
    <div class="row">
		<div class="col s12">
			<h5>{{ $data->judul_paper }}</h5>
		</div>
	</div>
	@endforeach

</div>
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>"{{$keyword}}"</b> Tidak Ditemukan</div>
@endif
