<div class=' flex flex-row justify-between p-3 max-w-[700px] ml-auto pr-4'>
    <a href='{{ url('/') }}' class='{{ request()->is('/') ? 'bg-indigo-200' : '' }}'>Welcome</a>
    <a href='{{ route('projects.portfolio') }}' class='{{ request()->is('project.portfolio') ? 'bg-indigo-200' : '' }}'>Portfolio</a>
    <a href='{{ url('skills')}}' class='{{ request()->is('skills') ? 'bg-indigo-200' : '' }}'>Skills</a>
    <a href='{{ url('contact')}}' class='{{ request()->is('contact') ? 'bg-indigo-200' : '' }}'>Contact</a>
</div>
