<div class="row">
    <div class="form-group col-md-12 mb-3">
        <input type="date" class="form-control @error('fecha') is-invalid @enderror"
            min="{{ $minDate }}" value="{{ $minDate }}" wire:model.defer="fecha">
        @error('fecha')
            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="form-group col-md-12 mb-3">
        <select class="form-select @error('horario') is-invalid @enderror" wire:model="horario">
            @forelse ($horarios as $h)
                <option>{{ $h['horario'] }}</option>
            @empty
            @endforelse
        </select>
        @error('horario')
            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="form-group col-md-5 mb-3">
        <input placeholder="Cédula" type="text"
            class="form-control @error('cedula') is-invalid @enderror" wire:model.defer="cedula">
        @error('cedula')
            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="form-group col-md-7 mb-3">
        <input placeholder="Nombre" type="text"
            class="form-control @error('nombre') is-invalid @enderror" wire:model.defer="nombre">
        @error('nombre')
            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="form-group col-md-5 mb-3">
        <input placeholder="Teléfono" type="text"
            class="form-control @error('telefono') is-invalid @enderror" wire:model.defer="telefono">
        @error('telefono')
            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="form-group col-md-7 mb-3">
        <input placeholder="Correo" type="text"
            class="form-control @error('correo') is-invalid @enderror" wire:model.defer="correo">
        @error('correo')
            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    {{-- SELECT: Tipo de servicio --}}
    <div class="form-group col-md-12 mb-3">
        <select class="form-select @error('servicioSeleccionado') is-invalid @enderror"
            wire:model.live="servicioSeleccionado">   {{-- Sin .defer para que dispare updatedServicioSeleccionado --}}
            <option value="" disabled selected>Tipo</option>
            @foreach ($servicios as $svs)
                <option value="{{ $svs['idpaqln'] }}">{{ $svs['descripcion_paq_linea'] }}</option>
            @endforeach
        </select>
        @error('servicioSeleccionado')
            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    {{-- SELECT: Paquetes filtrados --}}
    <div class="form-group col-md-12 mb-3">
        <select class="form-select @error('paquete') is-invalid @enderror"
            wire:model.live="paquete"   {{-- Sin .defer para mostrar la lista al seleccionar --}}
            {{ empty($paquetesFiltrados) ? 'disabled' : '' }}>
            <option value="" disabled selected>Paquetes</option>
            @foreach ($paquetesFiltrados as $paq)
                <option value="{{ $paq['idpaq'] }}">
                    {{ $paq['descripcion_paq'] }} — ₡{{ number_format($paq['precio_paq'], 2) }}
                </option>
            @endforeach
        </select>
        @error('paquete')
            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
        @enderror

        {{-- Lista de lo que incluye el paquete seleccionado --}}
        @if (!empty($listaSeleccionada))
            <p class="mb-1 mt-2"><b>Incluye:</b></p>
            <ul class="list-paquete">
                @foreach ($listaSeleccionada as $item)
                    <li>{{ $item['descripcion_paq_lista'] }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="form-group col-md-12">
        <button type="button" wire:click="crearReserva" class="theme-btn btn-style-one"
        wire:loading.attr="disabled" wire:target="crearReserva"
        wire:loading.class="btn-loading" wire:target="crearReserva">
            <span wire:loading.remove wire:target="crearReserva">Reservar clase</span>
            <span wire:loading wire:target="crearReserva" style="display:none">
                <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                Procesando...
            </span>
        </button>
    </div>

</div>