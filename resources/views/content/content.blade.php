@extends('principal')

@section('content')
    <template v-if="menu==0">
        <div class="container">
            <h1>Bienvenidos!</h1>
        </div>
    </template>
    <template v-if="menu==1">
        <natural_customer></natural_customer>
    </template>

@endsection