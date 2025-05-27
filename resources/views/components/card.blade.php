<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
  <a href="#">
    <img class="rounded-t-lg" src="{{ asset($imgsrc) }}" alt="{{ $title }}" />
  </a>
  <div class="p-5">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $title }}</h5>
    <p class="mb-3 font-normal text-gray-700">{{ $desc }}</p>
    <a href="{{ $btnlink }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
      {{ $btntext }}
    </a>
  </div>
</div>
