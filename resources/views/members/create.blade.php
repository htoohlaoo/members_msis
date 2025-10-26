<x-app-layout>
<div class="gradient-section p-6 bg-white dark:bg-gray-800 shadow-md sm:rounded-lg">
    Test Create Page
    @if(Auth::user()->isUser())
        <span> User </span>
    @endif
</div>
</x-app-layout>