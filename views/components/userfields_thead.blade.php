@if($userfields && count($userfields) > 0)

@foreach($userfields as $userfield)

@if($userfield->show_as_column_in_tables == 1)
<th class="allow-grouping">{{ $userfield->caption }}</th>
@endif

@endforeach

@endif
