@if (session('status'))
    <div {{ $attributes->class('rounded-lg border border-emerald-200/80 bg-emerald-50 px-4 py-3 text-[13px] font-medium text-emerald-800') }}>
        {{ session('status') }}
    </div>
@endif
